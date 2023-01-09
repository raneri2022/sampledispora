<?php

namespace App\Http\Controllers;

use App\Http\Resources\IsFormCompletedResource;
use App\Models\IsFormCompleted;
use App\Http\Requests\StoreIsFormCompletedRequest;
use App\Http\Requests\UpdateIsFormCompletedRequest;
use Illuminate\Support\Facades\DB;

class IsFormCompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//       $data = DB::table('is_form_completeds')
//           ->select('personal_id')
//           ->where('is_form_completed',true)
//           ->get();





        return IsFormCompletedResource::collection(IsFormCompleted::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIsFormCompletedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIsFormCompletedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IsFormCompleted  $isFormCompleted
     * @return \Illuminate\Http\Response
     */
    public function show(IsFormCompleted $isFormCompleted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIsFormCompletedRequest  $request
     * @param  \App\Models\IsFormCompleted  $isFormCompleted
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIsFormCompletedRequest $request, IsFormCompleted $isFormCompleted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IsFormCompleted  $isFormCompleted
     * @return \Illuminate\Http\Response
     */
    public function destroy(IsFormCompleted $isFormCompleted)
    {
        //
    }
}
