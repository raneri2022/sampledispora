<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd10Resource;
use App\Http\Requests\StoreRefd10Request;
use App\Http\Requests\UpdateRefd10Request;
use App\Models\Refd10;

class Refd10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd10Resource::collection(Refd10::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd10Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd10Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function show(Refd10 $refd10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd10Request  $request
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd10Request $request, Refd10 $refd10)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd10 $refd10)
    {
        //
    }
}
