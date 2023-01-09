<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp12Request;
use App\Http\Requests\UpdateDp12Request;
use App\Models\Dp12;
use App\Http\Resources\Dp12Resource;
class Dp12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp12Resource::collection(Dp12::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp12Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp12Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp12  $dp12
     * @return \Illuminate\Http\Response
     */
    public function show(Dp12 $dp12)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp12Request  $request
     * @param  \App\Models\Dp12  $dp12
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp12Request $request, Dp12 $dp12)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp12  $dp12
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp12 $dp12)
    {
        //
    }
}
