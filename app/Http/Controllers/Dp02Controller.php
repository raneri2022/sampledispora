<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp02Request;
use App\Http\Requests\UpdateDp02Request;
use App\Models\Dp02;
use App\Http\Resources\Dp02Resource;

class Dp02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp02Resource::collection(Dp02::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp02Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp02Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp02  $dp02
     * @return \Illuminate\Http\Response
     */
    public function show(Dp02 $dp02)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp02Request  $request
     * @param  \App\Models\Dp02  $dp02
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp02Request $request, Dp02 $dp02)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp02  $dp02
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp02 $dp02)
    {
        //
    }
}
