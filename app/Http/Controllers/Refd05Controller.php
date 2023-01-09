<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd05Resource;
use App\Http\Requests\StoreRefd05Request;
use App\Http\Requests\UpdateRefd05Request;
use App\Models\Refd04;
use App\Models\Refd05;
use Illuminate\Http\Request;

class Refd05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd05Resource::collection(Refd05::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd05Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd05Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function show(Refd05 $refd05)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd05Request  $request
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd05Request $request, Refd05 $refd05)
    {
        //
    }
    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd05::updateOrCreate(
                ['refd_05002' =>  $data['name']],
                ['refd_05003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd05  $refd05
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd05 $refd05)
    {
        //
    }
}
