<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRefd16Request;
use App\Http\Requests\UpdateRefd16Request;
use App\Models\Refd04;
use App\Models\Refd16;
use Illuminate\Http\Request;

class Refd16Controller extends Controller
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
     * @param  \App\Http\Requests\StoreRefd16Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd16Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd16  $refd16
     * @return \Illuminate\Http\Response
     */
    public function show(Refd16 $refd16)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd16Request  $request
     * @param  \App\Models\Refd16  $refd16
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd16Request $request, Refd16 $refd16)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd16::updateOrCreate(
                ['refd_16002' =>  $data['name']],
                ['refd_16003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd16  $refd16
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd16 $refd16)
    {
        //
    }
}
