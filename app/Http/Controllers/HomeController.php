<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        function allDate()
        {
            $list = [];
            for ($d = 1; $d <= cal_days_in_month(CAL_GREGORIAN, date("g"), date("Y")); $d++) {
                $time = mktime(12, 0, 0, date('m'), $d, date('Y'));
                if (date('m', $time) == date('m'))
                    $list[] = date('d', $time);
            }
            return $list;
        };

        $allDate = allDate();

        $data = [];
        for ($i = 0; $i < 30; $i++) {
            array_push($data, \Faker\Factory::create()->numberBetween(200, 600));
        }
        $links = User::with(['ShortUrl'])->where("id", "=", Auth::user()->getAuthIdentifier())->first();

        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($allDate)
            ->datasets([
                [
                    "label" => "Total click",
                    'backgroundColor' => "rgba(245, 63, 250, 0.8)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $data,
                ]
            ])
            ->options([]);


        return view('pages.dashboard', [
            'header' => 'Dashboard',
            'chart' => $chartjs,
            'links' => $links
        ]);
    }
}