<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd10Resource;
use App\Http\Requests\StoreRefd10Request;
use App\Http\Requests\UpdateRefd10Request;
use App\Models\Refd04;
use App\Models\Refd10;
use Illuminate\Http\Request;

class Refd10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd10Resource::collection(Refd10::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd10Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd10Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function show(Refd10 $refd10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd10Request  $request
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd10Request $request, Refd10 $refd10)
    {
        //
    }
    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd10::updateOrCreate(
                ['refd_10002' =>  $data['name']],
                ['refd_10003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd10  $refd10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd10 $refd10)
    {
        //
    }
}
