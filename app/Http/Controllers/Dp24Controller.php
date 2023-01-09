<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp24Request;
use App\Http\Requests\UpdateDp24Request;
use App\Models\Dp24;
use App\Http\Resources\Dp24Resource;
class Dp24Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp24Resource::collection(Dp24::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp24Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp24Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp24  $dp24
     * @return \Illuminate\Http\Response
     */
    public function show(Dp24 $dp24)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp24Request  $request
     * @param  \App\Models\Dp24  $dp24
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp24Request $request, Dp24 $dp24)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp24  $dp24
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp24 $dp24)
    {
        //
    }
}
