<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd15Resource;
use App\Http\Requests\StoreRefd15Request;
use App\Http\Requests\UpdateRefd15Request;
use App\Models\Refd15;

class Refd15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd15Resource::collection(Refd15::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd15Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd15Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd15  $refd15
     * @return \Illuminate\Http\Response
     */
    public function show(Refd15 $refd15)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd15Request  $request
     * @param  \App\Models\Refd15  $refd15
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd15Request $request, Refd15 $refd15)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd15  $refd15
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd15 $refd15)
    {
        //
    }
}
