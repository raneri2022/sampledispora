<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dp41Resource;
use App\Models\Dp41;
use App\Http\Requests\StoreDp41Request;
use App\Http\Requests\UpdateDp41Request;

class Dp41Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Dp41Resource::collection(Dp41::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp41Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp41Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp41  $dp41
     * @return \Illuminate\Http\Response
     */
    public function show(Dp41 $dp41)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp41Request  $request
     * @param  \App\Models\Dp41  $dp41
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp41Request $request, Dp41 $dp41)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp41  $dp41
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp41 $dp41)
    {
        //
    }
}
