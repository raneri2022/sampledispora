<?php

namespace App\Http\Controllers;

use App\Models\Dp32;
use App\Http\Requests\StoreDp32Request;
use App\Http\Requests\UpdateDp32Request;
use App\Http\Resources\Dp32Resource;
class Dp32Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp32Resource::collection(Dp32::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp32Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp32Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp32  $dp32
     * @return \Illuminate\Http\Response
     */
    public function show(Dp32 $dp32)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp32Request  $request
     * @param  \App\Models\Dp32  $dp32
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp32Request $request, Dp32 $dp32)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp32  $dp32
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp32 $dp32)
    {
        //
    }
}
