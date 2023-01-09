<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp22Request;
use App\Http\Requests\UpdateDp22Request;
use App\Models\Dp22;
use App\Http\Resources\Dp22Resource;

class Dp22Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp22Resource::collection(Dp22::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp22Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp22Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp22  $dp22
     * @return \Illuminate\Http\Response
     */
    public function show(Dp22 $dp22)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp22Request  $request
     * @param  \App\Models\Dp22  $dp22
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp22Request $request, Dp22 $dp22)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp22  $dp22
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp22 $dp22)
    {
        //
    }
}
