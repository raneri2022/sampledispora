<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd08Resource;
use App\Http\Requests\StoreRefd08Request;
use App\Http\Requests\UpdateRefd08Request;
use App\Models\Refd08;

class Refd08Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd08Resource::collection(Refd08::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd08Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd08Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd08  $refd08
     * @return \Illuminate\Http\Response
     */
    public function show(Refd08 $refd08)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd08Request  $request
     * @param  \App\Models\Refd08  $refd08
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd08Request $request, Refd08 $refd08)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd08  $refd08
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd08 $refd08)
    {
        //
    }
}
