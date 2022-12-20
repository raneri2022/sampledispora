<?php

namespace App\Http\Controllers;

use App\Models\TableNames;
use App\Http\Requests\StoreTableNamesRequest;
use App\Http\Requests\UpdateTableNamesRequest;
use Illuminate\Support\Facades\DB;

class TableNamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tables = DB::select('SHOW TABLES like "refd%"');
 

        return $tables;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTableNamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableNamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TableNames  $tableNames
     * @return \Illuminate\Http\Response
     */
    public function show(TableNames $tableNames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTableNamesRequest  $request
     * @param  \App\Models\TableNames  $tableNames
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTableNamesRequest $request, TableNames $tableNames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableNames  $tableNames
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableNames $tableNames)
    {
        //
    }
}
