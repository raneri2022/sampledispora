<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp11Request;
use App\Http\Requests\UpdateDp11Request;
use App\Models\Dp11;
use App\Http\Resources\Dp11Resource;
class Dp11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp11Resource::collection(Dp11::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp11Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp11Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp11  $dp11
     * @return \Illuminate\Http\Response
     */
    public function show(Dp11 $dp11)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp11Request  $request
     * @param  \App\Models\Dp11  $dp11
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp11Request $request, Dp11 $dp11)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp11  $dp11
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp11 $dp11)
    {
        //
    }
}
