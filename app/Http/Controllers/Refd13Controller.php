<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd13Resource;
use App\Http\Requests\StoreRefd13Request;
use App\Http\Requests\UpdateRefd13Request;
use App\Models\Refd13;

class Refd13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd13Resource::collection(Refd13::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd13Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd13Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd13  $refd13
     * @return \Illuminate\Http\Response
     */
    public function show(Refd13 $refd13)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd13Request  $request
     * @param  \App\Models\Refd13  $refd13
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd13Request $request, Refd13 $refd13)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd13  $refd13
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd13 $refd13)
    {
        //
    }
}
