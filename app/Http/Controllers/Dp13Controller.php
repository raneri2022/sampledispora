<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp13Request;
use App\Http\Requests\UpdateDp13Request;
use App\Models\Dp13;
use App\Http\Resources\Dp13Resource;

class Dp13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp13Resource::collection(Dp13::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp13Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp13Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp13  $dp13
     * @return \Illuminate\Http\Response
     */
    public function show(Dp13 $dp13)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp13Request  $request
     * @param  \App\Models\Dp13  $dp13
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp13Request $request, Dp13 $dp13)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp13  $dp13
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp13 $dp13)
    {
        //
    }
}
