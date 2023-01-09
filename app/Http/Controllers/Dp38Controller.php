<?php

namespace App\Http\Controllers;

use App\Models\Dp38;
use App\Http\Requests\StoreDp38Request;
use App\Http\Requests\UpdateDp38Request;
use App\Http\Resources\Dp38Resource;

class Dp38Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp38Resource::collection(Dp38::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp38Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp38Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp38  $dp38
     * @return \Illuminate\Http\Response
     */
    public function show(Dp38 $dp38)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp38Request  $request
     * @param  \App\Models\Dp38  $dp38
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp38Request $request, Dp38 $dp38)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp38  $dp38
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp38 $dp38)
    {
        //
    }
}
