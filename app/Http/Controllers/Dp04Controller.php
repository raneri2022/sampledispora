<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp04Request;
use App\Http\Requests\UpdateDp04Request;
use App\Models\Dp04;

use App\Http\Resources\Dp04Resource;

class Dp04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp04Resource::collection(Dp04::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp04Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp04Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp04  $dp04
     * @return \Illuminate\Http\Response
     */
    public function show(Dp04 $dp04)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp04Request  $request
     * @param  \App\Models\Dp04  $dp04
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp04Request $request, Dp04 $dp04)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp04  $dp04
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp04 $dp04)
    {
        //
    }
}
