<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp21Request;
use App\Http\Requests\UpdateDp21Request;
use App\Models\Dp21;

class Dp21Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp21Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp21Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp21  $dp21
     * @return \Illuminate\Http\Response
     */
    public function show(Dp21 $dp21)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp21Request  $request
     * @param  \App\Models\Dp21  $dp21
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp21Request $request, Dp21 $dp21)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp21  $dp21
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp21 $dp21)
    {
        //
    }
}
