<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd05Resource;
use App\Http\Requests\StoreRefd05Request;
use App\Http\Requests\UpdateRefd05Request;
use App\Models\Refd05;

class Refd05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd05Resource::collection(Refd05::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd05Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd05Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function show(Refd05 $refd05)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd05Request  $request
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd05Request $request, Refd05 $refd05)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd05 $refd05)
    {
        //
    }
}
