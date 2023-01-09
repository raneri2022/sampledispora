<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp08Request;
use App\Http\Requests\UpdateDp08Request;
use App\Models\Dp08;
use App\Http\Resources\Dp08Resource;

class Dp08Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp08Resource::collection(Dp08::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp08Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp08Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp08  $dp08
     * @return \Illuminate\Http\Response
     */
    public function show(Dp08 $dp08)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp08Request  $request
     * @param  \App\Models\Dp08  $dp08
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp08Request $request, Dp08 $dp08)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp08  $dp08
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp08 $dp08)
    {
        //
    }
}
