<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp29Request;
use App\Http\Requests\UpdateDp29Request;
use App\Models\Dp29;
use App\Http\Resources\Dp29Resource;

class Dp29Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp29Resource::collection(Dp29::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp29Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp29Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp29  $dp29
     * @return \Illuminate\Http\Response
     */
    public function show(Dp29 $dp29)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp29Request  $request
     * @param  \App\Models\Dp29  $dp29
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp29Request $request, Dp29 $dp29)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp29  $dp29
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp29 $dp29)
    {
        //
    }
}
