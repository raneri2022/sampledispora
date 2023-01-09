<?php

namespace App\Http\Controllers;

use App\Models\Dp36;
use App\Http\Requests\StoreDp36Request;
use App\Http\Requests\UpdateDp36Request;
use App\Http\Resources\Dp36Resource;

class Dp36Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp36Resource::collection(Dp36::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp36Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp36Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp36  $dp36
     * @return \Illuminate\Http\Response
     */
    public function show(Dp36 $dp36)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp36Request  $request
     * @param  \App\Models\Dp36  $dp36
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp36Request $request, Dp36 $dp36)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp36  $dp36
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp36 $dp36)
    {
        //
    }
}
