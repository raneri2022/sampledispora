<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd11Resource;
use App\Http\Requests\StoreRefd11Request;
use App\Http\Requests\UpdateRefd11Request;
use App\Models\Refd11;

class Refd11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd11Resource::collection(Refd11::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd11Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd11Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd11  $refd11
     * @return \Illuminate\Http\Response
     */
    public function show(Refd11 $refd11)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd11Request  $request
     * @param  \App\Models\Refd11  $refd11
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd11Request $request, Refd11 $refd11)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd11  $refd11
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd11 $refd11)
    {
        //
    }
}
