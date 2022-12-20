<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp30Request;
use App\Http\Requests\UpdateDp30Request;
use App\Models\Dp30;

class Dp30Controller extends Controller
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
     * @param  \App\Http\Requests\StoreDp30Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp30Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp30  $dp30
     * @return \Illuminate\Http\Response
     */
    public function show(Dp30 $dp30)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp30Request  $request
     * @param  \App\Models\Dp30  $dp30
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp30Request $request, Dp30 $dp30)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp30  $dp30
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp30 $dp30)
    {
        //
    }
}
