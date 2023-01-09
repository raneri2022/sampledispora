<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRefd18Request;
use App\Http\Requests\UpdateRefd18Request;
use App\Models\Refd04;
use App\Models\Refd18;
use Illuminate\Http\Request;

class Refd18Controller extends Controller
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
     * @param  \App\Http\Requests\StoreRefd18Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd18Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd18  $refd18
     * @return \Illuminate\Http\Response
     */
    public function show(Refd18 $refd18)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd18Request  $request
     * @param  \App\Models\Refd18  $refd18
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd18Request $request, Refd18 $refd18)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd18::updateOrCreate(
                ['refd_18002' =>  $data['name']],
                ['refd_18003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd18  $refd18
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd18 $refd18)
    {
        //
    }
}
