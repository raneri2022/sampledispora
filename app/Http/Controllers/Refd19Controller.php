<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRefd19Request;
use App\Http\Requests\UpdateRefd19Request;
use App\Models\Refd04;
use App\Models\Refd19;
use Illuminate\Http\Request;

class Refd19Controller extends Controller
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
     * @param  \App\Http\Requests\StoreRefd19Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd19Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd19  $refd19
     * @return \Illuminate\Http\Response
     */
    public function show(Refd19 $refd19)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd19Request  $request
     * @param  \App\Models\Refd19  $refd19
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd19Request $request, Refd19 $refd19)
    {
        //
    }
    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd19::updateOrCreate(
                ['refd_19002' =>  $data['name']],
                ['refd_19003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd19  $refd19
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd19 $refd19)
    {
        //
    }
}
