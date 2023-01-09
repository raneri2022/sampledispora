<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp07Request;
use App\Http\Requests\UpdateDp07Request;
use App\Models\Dp07;
use App\Http\Resources\Dp07Resource;

class Dp07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp07Resource::collection(Dp07::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp07Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp07Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp07  $dp07
     * @return \Illuminate\Http\Response
     */
    public function show(Dp07 $dp07)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp07Request  $request
     * @param  \App\Models\Dp07  $dp07
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp07Request $request, Dp07 $dp07)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp07  $dp07
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp07 $dp07)
    {
        //
    }
}
