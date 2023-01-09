<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp15Request;
use App\Http\Requests\UpdateDp15Request;
use App\Models\Dp15;
use App\Http\Resources\Dp15Resource;

class Dp15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp15Resource::collection(Dp15::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp15Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp15Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp15  $dp15
     * @return \Illuminate\Http\Response
     */
    public function show(Dp15 $dp15)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp15Request  $request
     * @param  \App\Models\Dp15  $dp15
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp15Request $request, Dp15 $dp15)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp15  $dp15
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp15 $dp15)
    {
        //
    }
}
