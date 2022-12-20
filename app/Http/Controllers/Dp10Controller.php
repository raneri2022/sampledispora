<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp10Request;
use App\Http\Requests\UpdateDp10Request;
use App\Models\Dp10;

class Dp10Controller extends Controller
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
     * @param  \App\Http\Requests\StoreDp10Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp10Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp10  $dp10
     * @return \Illuminate\Http\Response
     */
    public function show(Dp10 $dp10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp10Request  $request
     * @param  \App\Models\Dp10  $dp10
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp10Request $request, Dp10 $dp10)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp10  $dp10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp10 $dp10)
    {
        //
    }
}
