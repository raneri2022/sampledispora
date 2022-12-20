<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd04Resource;
use App\Http\Requests\StoreRefd04Request;
use App\Http\Requests\UpdateRefd04Request;
use App\Models\Refd04;

class Refd04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd04Resource::collection(Refd04::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd04Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd04Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd04  $refd04
     * @return \Illuminate\Http\Response
     */
    public function show(Refd04 $refd04)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd04Request  $request
     * @param  \App\Models\Refd04  $refd04
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd04Request $request, Refd04 $refd04)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd04  $refd04
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd04 $refd04)
    {
        //
    }
}
