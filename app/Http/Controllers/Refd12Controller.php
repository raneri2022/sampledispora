<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd12Resource;
use App\Http\Requests\StoreRefd12Request;
use App\Http\Requests\UpdateRefd12Request;
use App\Models\Refd12;

class Refd12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd12Resource::collection(Refd12::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd12Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd12Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd12  $refd12
     * @return \Illuminate\Http\Response
     */
    public function show(Refd12 $refd12)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd12Request  $request
     * @param  \App\Models\Refd12  $refd12
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd12Request $request, Refd12 $refd12)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd12  $refd12
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd12 $refd12)
    {
        //
    }
}