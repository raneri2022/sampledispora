<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp25Request;
use App\Http\Requests\UpdateDp25Request;
use App\Models\Dp25;
use App\Http\Resources\Dp25Resource;
class Dp25Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp25Resource::collection(Dp25::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp25Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp25Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp25  $dp25
     * @return \Illuminate\Http\Response
     */
    public function show(Dp25 $dp25)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp25Request  $request
     * @param  \App\Models\Dp25  $dp25
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp25Request $request, Dp25 $dp25)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp25  $dp25
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp25 $dp25)
    {
        //
    }
}
