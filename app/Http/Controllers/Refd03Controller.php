<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd03Resource;
use App\Http\Requests\StoreRefd03Request;
use App\Http\Requests\UpdateRefd03Request;
use App\Models\Refd03;

class Refd03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd03Resource::collection(Refd03::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd03Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd03Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd03  $refd03
     * @return \Illuminate\Http\Response
     */
    public function show(Refd03 $refd03)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd03Request  $request
     * @param  \App\Models\Refd03  $refd03
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd03Request $request, Refd03 $refd03)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd03  $refd03
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd03 $refd03)
    {
        //
    }
}
