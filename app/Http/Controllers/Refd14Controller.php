<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd14Resource;
use App\Http\Requests\StoreRefd14Request;
use App\Http\Requests\UpdateRefd14Request;
use App\Models\Refd04;
use App\Models\Refd14;
use Illuminate\Http\Request;

class Refd14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd14Resource::collection(Refd14::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd14Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd14Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd14  $refd14
     * @return \Illuminate\Http\Response
     */
    public function show(Refd14 $refd14)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd14Request  $request
     * @param  \App\Models\Refd14  $refd14
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd14Request $request, Refd14 $refd14)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd14::updateOrCreate(
                ['refd_14002' =>  $data['name']],
                ['refd_14003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd14  $refd14
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd14 $refd14)
    {
        //
    }
}
