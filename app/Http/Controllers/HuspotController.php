<?php

namespace App\Http\Controllers;

use App\Models\huspot;
use Illuminate\Http\Request;

class HuspotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, huspot $huspot)
    {

        return "desde index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd($request);

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */}
    public function store(Request $request)
    {
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\huspot  $huspot
     * @return \Illuminate\Http\Response
    */}
    public function show(huspot $huspot)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\huspot  $huspot
     * @return \Illuminate\Http\Response
     */
    public function edit(huspot $huspot)
    {
        dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\huspot  $huspot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, huspot $huspot)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\huspot  $huspot
     * @return \Illuminate\Http\Response
     */
    public function destroy(huspot $huspot)
    {
        //
    }
}
