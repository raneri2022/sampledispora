<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd01Resource;
use App\Http\Requests\StoreRefd01Request;
use App\Http\Requests\UpdateRefd01Request;
use App\Models\Refd01;

class Refd01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd01Resource::collection(Refd01::all());

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd01Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd01Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd01  $refd01
     * @return \Illuminate\Http\Response
     */
    public function show(Refd01 $refd01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd01Request  $request
     * @param  \App\Models\Refd01  $refd01
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd01Request $request, Refd01 $refd01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd01  $refd01
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd01 $refd01)
    {
        //
    }
}
