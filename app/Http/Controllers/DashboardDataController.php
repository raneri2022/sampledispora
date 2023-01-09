<?php

namespace App\Http\Controllers;

use App\Models\PersonalId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\is_settled;
use function PHPUnit\Framework\isEmpty;

class DashboardDataController extends Controller
{
    //
    public function dashboardData(Request $request){

        $from = $request['from_date'];
        $to = $request['to_date'];

        $single_date = $request->input('single_date');

        $alldata = (object)[];

        if($request->filled('single_date')) {

            $alldata->personals_all = DB::table('personal_ids')
                ->count();

            $alldata->registered_all = DB::connection('mysql2')->table('users')
                ->count();
            $alldata->registered_date = DB::connection('mysql2')->table('users')
                ->whereDate('created_at', $single_date)
                ->count();
            $alldata->pending_all = DB::connection('mysql2')->table('user_verifications')
                ->where('is_email_Verified', 0)
                ->count();
            $alldata->pending_date = DB::connection('mysql2')->table('user_verifications')
                ->whereDate('created_at', $single_date)
                ->where('is_email_Verified', 0)
                ->count();

            $alldata->verified_request_all = DB::connection('mysql2')->table('user_verifications')
                ->where('is_email_Verified', 1)
                ->count();

            $alldata->verified_request_date = DB::connection('mysql2')->table('user_verifications')
                ->whereDate('created_at', $single_date)
                ->where('is_email_Verified', 1)
                ->count();

            $alldata->form_completed_all = DB::table('is_form_completeds')
                ->count();

            $alldata->form_completed_date = DB::table('is_form_completeds')
                ->whereDate('created_at', $single_date)
                ->count();
        }else {
            $alldata->personals_all = DB::table('personal_ids')
                ->count();

            $alldata->registered_all = DB::connection('mysql2')->table('users')
                ->count();
            $alldata->registered_date = DB::connection('mysql2')->table('users')
                ->whereBetween('created_at', [$from, $to])
                ->count();
            $alldata->pending_all = DB::connection('mysql2')->table('user_verifications')
                ->where('is_email_Verified', 0)
                ->count();
            $alldata->pending_date = DB::connection('mysql2')->table('user_verifications')
                ->whereBetween('created_at', [$from, $to])
                ->where('is_email_Verified', 0)
                ->count();

            $alldata->verified_request_all = DB::connection('mysql2')->table('user_verifications')
                ->where('is_email_Verified', 1)
                ->count();

            $alldata->verified_request_date = DB::connection('mysql2')->table('user_verifications')
                ->whereBetween('created_at', [$from, $to])
                ->where('is_email_Verified', 1)
                ->count();

            $alldata->form_completed_all = DB::table('is_form_completeds')
                ->count();

            $alldata->form_completed_date = DB::table('is_form_completeds')
                ->whereBetween('created_at', [$from, $to])
                ->count();
        }



        return  $alldata ;
    }






}
