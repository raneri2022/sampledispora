<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp01Request;
use App\Http\Requests\UpdateDp01Request;
use App\Models\Dp01;

class Dp01Controller extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp01Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp01Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp01  $dp01
     * @return \Illuminate\Http\Response
     */
    public function show(Dp01 $dp01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp01Request  $request
     * @param  \App\Models\Dp01  $dp01
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp01Request $request, Dp01 $dp01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp01  $dp01
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp01 $dp01)
    {
        //
    }
}
