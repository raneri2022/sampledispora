<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd07Resource;
use App\Http\Requests\StoreRefd07Request;
use App\Http\Requests\UpdateRefd07Request;
use App\Models\Refd07;

class Refd07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd07Resource::collection(Refd07::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd07Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd07Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function show(Refd07 $refd07)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd07Request  $request
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd07Request $request, Refd07 $refd07)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd07 $refd07)
    {
        //
    }
}
