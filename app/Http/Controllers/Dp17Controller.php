<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp17Request;
use App\Http\Requests\UpdateDp17Request;
use App\Models\Dp17;
use App\Http\Resources\Dp17Resource;
class Dp17Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp17Resource::collection(Dp17::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp17Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp17Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp17  $dp17
     * @return \Illuminate\Http\Response
     */
    public function show(Dp17 $dp17)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp17Request  $request
     * @param  \App\Models\Dp17  $dp17
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp17Request $request, Dp17 $dp17)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp17  $dp17
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp17 $dp17)
    {
        //
    }
}
