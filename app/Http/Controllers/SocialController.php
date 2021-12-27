<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            session()->flash('danger', $e->getMessage());
            return redirect()->route('login');
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser);

        session()->flash('success', 'Kamu berhasil login!');
        return redirect()->route('home');
    }



    public function findOrCreateUser($socialUser, $provider)
    {
        $socialAccount = User::with(['socialAccount' => function ($query) use ($socialUser, $provider) {
            $query->where('provider_id', $socialUser->id)->where('provider_name', $provider);
        }])->first();
        if ($socialAccount) {
            return $socialAccount;
        } else {
            $user = User::all()->where('email', $socialUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                ]);
            }


            $user->socialAccount()->create([
                'provider_id' => $socialUser->getId(),
                'provider_name' => $provider
            ]);
            return $user;
        }
    }
}