<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd17Resource;
use App\Http\Requests\StoreRefd17Request;
use App\Http\Requests\UpdateRefd17Request;
use App\Models\Refd17;

class Refd17Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
             return Refd17Resource::collection(Refd17::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd17Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd17Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd17  $refd17
     * @return \Illuminate\Http\Response
     */
    public function show(Refd17 $refd17)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd17Request  $request
     * @param  \App\Models\Refd17  $refd17
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd17Request $request, Refd17 $refd17)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd17  $refd17
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd17 $refd17)
    {
        //
    }
}
