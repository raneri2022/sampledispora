<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dp42Resource;
use App\Models\Dp42;
use App\Http\Requests\StoreDp42Request;
use App\Http\Requests\UpdateDp42Request;
use App\Models\Refd15;
use Illuminate\Support\Facades\DB;

class Dp42Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return Dp42Resource::collection(Dp42::select([
//            "dp42s.*",
//            "dp42002"=>
//        Refd15::selectRaw("refd_15002")])
//            ->whereColumn("id","dp42s.dp42002")
//            ->get());

        return Dp42Resource::collection(Dp42::get());

//        $data = DB::table('dp42s')
//            ->join('refd15s','refd15s.id','=', 'dp42s.dp42002' )
//            ->select('refd15s.refd_15002')
//            ->get();

//        $data = DB::table('dp42s')->get();



//        return  $data;
//        return Dp42Resource::collection($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp42Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp42Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp42  $dp42
     * @return \Illuminate\Http\Response
     */
    public function show(Dp42 $dp42)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp42Request  $request
     * @param  \App\Models\Dp42  $dp42
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp42Request $request, Dp42 $dp42)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp42  $dp42
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp42 $dp42)
    {
        //
    }
}
