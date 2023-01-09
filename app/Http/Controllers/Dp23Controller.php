<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp23Request;
use App\Http\Requests\UpdateDp23Request;
use App\Models\Dp23;
use App\Http\Resources\Dp23Resource;
class Dp23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return Dp23Resource::collection(Dp23::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp23Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp23Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp23  $dp23
     * @return \Illuminate\Http\Response
     */
    public function show(Dp23 $dp23)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp23Request  $request
     * @param  \App\Models\Dp23  $dp23
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp23Request $request, Dp23 $dp23)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp23  $dp23
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp23 $dp23)
    {
        //
    }
}
