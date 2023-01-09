<?php

namespace App\Http\Controllers;

use App\Models\Dp40;
use App\Http\Requests\StoreDp40Request;
use App\Http\Requests\UpdateDp40Request;
use App\Http\Resources\Dp40Resource;
class Dp40Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Dp40Resource::collection(Dp40::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp40Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp40Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp40  $dp40
     * @return \Illuminate\Http\Response
     */
    public function show(Dp40 $dp40)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp40Request  $request
     * @param  \App\Models\Dp40  $dp40
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp40Request $request, Dp40 $dp40)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp40  $dp40
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp40 $dp40)
    {
        //
    }
}
