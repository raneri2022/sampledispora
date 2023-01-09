<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd01Resource;
use App\Http\Requests\StoreRefd01Request;
use App\Http\Requests\UpdateRefd01Request;
use App\Models\Refd01;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
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
    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
       foreach ( $refd_datas as  $data){
      $refd = Refd01::updateOrCreate(
            ['refd_01002' =>  $data['name']],
            ['refd_01003' => $data['status']],
        );
    }return "true";
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
