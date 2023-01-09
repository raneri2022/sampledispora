<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp19Request;
use App\Http\Requests\UpdateDp19Request;
use App\Models\Dp19;
use App\Http\Resources\Dp19Resource;
class Dp19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp19Resource::collection(Dp19::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp19Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp19Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp19  $dp19
     * @return \Illuminate\Http\Response
     */
    public function show(Dp19 $dp19)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp19Request  $request
     * @param  \App\Models\Dp19  $dp19
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp19Request $request, Dp19 $dp19)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp19  $dp19
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp19 $dp19)
    {
        //
    }
}
