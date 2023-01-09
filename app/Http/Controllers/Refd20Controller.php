<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRefd20Request;
use App\Http\Requests\UpdateRefd20Request;
use App\Models\Refd04;
use App\Models\Refd20;
use Illuminate\Http\Request;

class Refd20Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd20Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd20Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd20  $refd20
     * @return \Illuminate\Http\Response
     */
    public function show(Refd20 $refd20)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd20Request  $request
     * @param  \App\Models\Refd20  $refd20
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd20Request $request, Refd20 $refd20)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd20::updateOrCreate(
                ['refd_20002' =>  $data['name']],
                ['refd_20003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd20  $refd20
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd20 $refd20)
    {
        //
    }
}
