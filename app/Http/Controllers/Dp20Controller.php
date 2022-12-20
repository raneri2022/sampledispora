<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp20Request;
use App\Http\Requests\UpdateDp20Request;
use App\Models\Dp20;

class Dp20Controller extends Controller
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
     * @param  \App\Http\Requests\StoreDp20Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp20Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp20  $dp20
     * @return \Illuminate\Http\Response
     */
    public function show(Dp20 $dp20)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp20Request  $request
     * @param  \App\Models\Dp20  $dp20
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp20Request $request, Dp20 $dp20)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp20  $dp20
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp20 $dp20)
    {
        //
    }
}
