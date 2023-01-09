<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp05Request;
use App\Http\Requests\UpdateDp05Request;
use App\Models\Dp05;
use App\Http\Resources\Dp05Resource;

class Dp05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp05Resource::collection(Dp05::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp05Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp05Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp05  $dp05
     * @return \Illuminate\Http\Response
     */
    public function show(Dp05 $dp05)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp05Request  $request
     * @param  \App\Models\Dp05  $dp05
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp05Request $request, Dp05 $dp05)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp05  $dp05
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp05 $dp05)
    {
        //
    }
}
