<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd06Resource;
use App\Http\Requests\StoreRefd06Request;
use App\Http\Requests\UpdateRefd06Request;
use App\Models\Refd06;

class Refd06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd06Resource::collection(Refd06::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd06Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd06Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd06  $refd06
     * @return \Illuminate\Http\Response
     */
    public function show(Refd06 $refd06)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd06Request  $request
     * @param  \App\Models\Refd06  $refd06
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd06Request $request, Refd06 $refd06)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd06  $refd06
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd06 $refd06)
    {
        //
    }
}
