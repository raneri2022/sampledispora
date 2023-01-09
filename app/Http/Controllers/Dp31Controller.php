<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp31Request;
use App\Http\Requests\UpdateDp31Request;
use App\Models\Dp31;
use App\Http\Resources\Dp31Resource;
class Dp31Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp31Resource::collection(Dp31::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp31Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp31Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp31  $dp31
     * @return \Illuminate\Http\Response
     */
    public function show(Dp31 $dp31)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp31Request  $request
     * @param  \App\Models\Dp31  $dp31
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp31Request $request, Dp31 $dp31)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp31  $dp31
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp31 $dp31)
    {
        //
    }
}
