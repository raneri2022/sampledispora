<?php

namespace App\Http\Controllers;
use App\Http\Resources\Refd07Resource;
use App\Http\Requests\StoreRefd07Request;
use App\Http\Requests\UpdateRefd07Request;
use App\Models\Refd04;
use App\Models\Refd07;
use Illuminate\Http\Request;

class Refd07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Refd07Resource::collection(Refd07::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRefd07Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefd07Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function show(Refd07 $refd07)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefd07Request  $request
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefd07Request $request, Refd07 $refd07)
    {
        //
    }

    public function updatedata(Request $request)
    {
        $refd_datas = $request->data;
        foreach ( $refd_datas as  $data){
            $refd = Refd07::updateOrCreate(
                ['refd_07002' =>  $data['name']],
                ['refd_07003' => $data['status']],
            );
        }return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refd07  $refd07
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refd07 $refd07)
    {
        //
    }
}
