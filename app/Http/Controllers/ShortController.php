<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newshort');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'url|active_url'
        ]);
        $destination = $request->post('url');
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $userId = Auth::check() ? Auth::user()->getAuthIdentifier() : null;

        $shortURLObject = $builder->destinationUrl($destination)->make($userId);
        $shortURL = $shortURLObject->default_short_url;

        return redirect()->route('home')->with('success', "Your link has been shortened successfully. <strong>{$shortURL}</strong>.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        dd(DB::table('short_urls')->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        dd(DB::table('short_urls'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}