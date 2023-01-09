<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function dashboard(){

//        $data = DB::table('personal_ids')->get();
        $data = "this is from data";

        return $data;
    }

}
