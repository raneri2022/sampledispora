<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp18Request;
use App\Http\Requests\UpdateDp18Request;
use App\Models\Dp18;

class Dp18Controller extends Controller
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
     * @param  \App\Http\Requests\StoreDp18Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp18Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp18  $dp18
     * @return \Illuminate\Http\Response
     */
    public function show(Dp18 $dp18)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp18Request  $request
     * @param  \App\Models\Dp18  $dp18
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp18Request $request, Dp18 $dp18)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp18  $dp18
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp18 $dp18)
    {
        //
    }
}
