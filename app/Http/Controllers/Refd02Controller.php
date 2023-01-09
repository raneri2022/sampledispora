<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd02Resource;
use App\Http\Requests\StoreRefd02Request;
use App\Http\Requests\UpdateRefd02Request;
use App\Models\Refd01;
use App\Models\Refd02;
use Illuminate\Http\Request;

class Refd02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd02Resource::collection(Refd02::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd02Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd02Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd02  $refd02
     * @return \Illuminate\Http\Response
     */
    public function show(Refd02 $refd02)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd02Request  $request
     * @param  \App\Models\Refd02  $refd02
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd02Request $request, Refd02 $refd02)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd02::updateOrCreate(
                ['refd_02002' =>  $data['name']],
                ['refd_02003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd02  $refd02
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd02 $refd02)
    {
        //
    }
}
