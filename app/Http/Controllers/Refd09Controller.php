<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd09Resource;
use App\Http\Requests\StoreRefd09Request;
use App\Http\Requests\UpdateRefd09Request;
use App\Models\Refd04;
use App\Models\Refd09;
use Illuminate\Http\Request;

class Refd09Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd09Resource::collection(Refd09::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd09Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd09Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd09  $refd09
     * @return \Illuminate\Http\Response
     */
    public function show(Refd09 $refd09)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd09Request  $request
     * @param  \App\Models\Refd09  $refd09
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd09Request $request, Refd09 $refd09)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd09::updateOrCreate(
                ['refd_09002' =>  $data['name']],
                ['refd_09003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd09  $refd09
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd09 $refd09)
    {
        //
    }
}
