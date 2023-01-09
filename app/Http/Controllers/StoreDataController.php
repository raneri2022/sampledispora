<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreDataRequest;
use App\Http\Requests\UpdateStoreDataRequest;
use App\Models\StoreData;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;

class StoreDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return "this is from store data";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreDataRequest $request)
    {



        $p2Datastore = $request['step1'];
        $p3Datastore = $request['step2'];
        $p4Datastore = $request['step3'];
//        $user_email = $request['email'];
//
        $dis_personal_id02 = DB::connection('mysql2')->table('dver02s')
            ->select('dis_personal_id')
            ->where('dver02003',$request['email'])
            ->first();
//
        if(!$dis_personal_id02){
            return "this email is invalid";
        }

        $dis_personal_id01 = DB::connection('mysql2')->table('dver01s')
            ->select('*')
            ->where('dis_personal_id',$dis_personal_id02->dis_personal_id)
            ->first();



        $first_name = $dis_personal_id01->f_name_personal;
        $mid_name = $dis_personal_id01->m_name_personal;
        $last_name = $dis_personal_id01->l_name_personal;
        $gender = $dis_personal_id01->gender_id;

    // personal_table

       $personal_id = DB::connection('mysql')->table('personal_ids')->insertGetId([
            'f_name_personal' =>  $first_name,
            'm_name_personal' => $mid_name,
            'l_name_personal' => $last_name,
           'created_at' => date("Y-m-d"),
//           'updated_at' => date("Y-m-d"),
        ]);



    //personal_info_table

     $datadp01 =   DB::table('dp01s')->insertGetId([
            'personal_id' => $personal_id,
            'dp01002' =>$gender,//gender_name
            'dp01003' => $p2Datastore['date_of_birth'],//date_of_birth
            'dp01004' => $p2Datastore['place_of_birth_country_id'],//place_of_birth_country_name //place_of_birth_country_id
            'dp01005' => $p2Datastore['place_of_birth_state_region_id'],//place_of_birth_state/region_name
            'dp01006' => $p2Datastore['place_of_birth_city_name'],//place_of_birth_city_name
         'created_at' => date("Y-m-d"),
        ]);




        //address_table

        DB::table('dp02s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp02002' => $p2Datastore['address_country_id'],//country_name
            'dp02003' => $p2Datastore['address_state_region_id'],//state/region_name
            'dp02004' => $p2Datastore['address_city_name'],//city_name
            'created_at' => date("Y-m-d"),
        ]);

    //origin_table

        DB::table('dp03s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp03002' => $p2Datastore['place_of_origin_country_id'],//country_place_of_origin_name
            'dp03003' => $p2Datastore['place_of_origin_state_region_id'],//state/regione_place_of_origin_name
            'dp03004' => $p2Datastore['place_of_origin_city_name'],//village/town_place_of_origin_name
            'created_at' => date("Y-m-d"),
        ]);

    //mother_table


        DB::table('dp04s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp04002' => $p2Datastore['f_mother_name'],//f_mother_name
            'dp04003' => $p2Datastore['m_mother_name'],//m_mother_name
            'dp04004' => $p2Datastore['l_mother_name'],//l_mother_name
            'dp04005' => $p2Datastore['mother_place_of_origin_country_id'],//mother_tongue
//            'dp04006' => $p2Datastore['mother_place_of_origin_country_id'],//mother_place_origin
//            'dp04007' => $p2Datastore['mother_place_of_origin_country_id'],//mother_place_origin
            'created_at' => date("Y-m-d"),
        ]);

        if($p2Datastore['mother_tongue'] == 10){
            $ins_national_id = DB::table('dp41s')->insertOrIgnore([
                'personal_id' => $personal_id,
                'dp41002' => $p2Datastore['mother_tongue_others'], //$p2Datastore
                'created_at' => date("Y-m-d"),
            ]);
            $ins_national_id = DB::table('dp42s')->insertOrIgnore([
                'personal_id' => $personal_id,
                'dp42002' => $p2Datastore['mother_tongue'], //$p2Datastore
                'created_at' => date("Y-m-d"),
            ]);
        }else{
            $ins_national_id = DB::table('dp42s')->insertOrIgnore([
                'personal_id' => $personal_id,
                'dp42002' => $p2Datastore['mother_tongue_others'], //$p2Datastore
                'created_at' => date("Y-m-d"),
            ]);

        }





        foreach ($p2Datastore['national_identity'] as $data_identitiy) {
$ins_national_id = "";
        if (isset($data_identitiy['nationality_id'])) {

   // nationality_table

       $ins_national_id = DB::table('dp05s')->insertGetId([
            'personal_id' => $personal_id,
            'dp05002' => $data_identitiy['nationality_id'], //nationality
           'created_at' => date("Y-m-d"),
        ]);

        }


           if(isset($data_identitiy['national_id'])){

   // nationality_id_number_table


        DB::table('dp06s')->insertOrIgnore([
            'n_id' => $ins_national_id,
            'dp06002' => $data_identitiy['national_id'], //nationality_id
            'created_at' => date("Y-m-d"),
        ]);

    }

     if(isset($data_identitiy['passport_id'])){

   // passport_id_table


        DB::table('dp07s')->insertOrIgnore([
            'n_id' => $ins_national_id,
            'dp07002' => $data_identitiy['passport_id'], //passport_id
            'created_at' => date("Y-m-d"),
        ]);

     }

    }







    //marital_status_table

        DB::table('dp08s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp08002' => $p2Datastore['marital_status'], //marital_status
            'created_at' => date("Y-m-d"),
        ]);


// primary mobile_table

        DB::table('dp09s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp09002' => $p2Datastore['primary_mobile_number'],//mobile_number
            'created_at' => date("Y-m-d"),
        ]);

//secondary_telephone_table
if (isset($p2Datastore['secondary_mobile_number'])) {

        DB::table('dp10s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp10002' => $p2Datastore['secondary_mobile_number'],//fixed_telephone_number
            'created_at' => date("Y-m-d"),
        ]);
}


//email_table
if (isset($p2Datastore['personal_email'])) {
      DB::table('dp11s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp11002' => $p2Datastore['personal_email'],//email
          'created_at' => date("Y-m-d"),
        ]);
}



     //Immigration_year_table

        DB::table('dp37s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp37002' => $p2Datastore['migrated_from_eritrea'],//immigration_yes_or_no
            'created_at' => date("Y-m-d"),
        ]);

    if ($p2Datastore['migrated_from_eritrea']==1) {
          // Immigration_year_table

        DB::table('dp12s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp12002' => $p2Datastore['migration_year'],//immigration_year
            'created_at' => date("Y-m-d"),
        ]);
    }



    //language_table

    //     DB::table('dp13s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp13002' => $p2Datastore['ስም'],//language_name
    //     ]);




       //previously_settled_yes or no table

        DB::table('dp38s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp38002' => $p2Datastore['changed_residence_before'],//yes_or_no
            'created_at' => date("Y-m-d"),
        ]);


    if ( $p2Datastore['changed_residence_before']==1) {
        //    previously_settled_table

        foreach ($p2Datastore['previously_settled'] as $previously_settled) {
                DB::table('dp14s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp14002' => $previously_settled['country_id'],//country_name
            'dp14003' => $previously_settled['state_region_id'],//city_name
            'dp14004' => $previously_settled['city_village_town_name'],//city_name
            'dp14005' => $previously_settled['from_year'],//from_year
            'dp14006' => $previously_settled['to_year'],//to_year
                    'created_at' => date("Y-m-d"),
        ]);
        }




    }
// do_you_have_relatives_in_eritrea table

        DB::table('dp39s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp39002' => $p2Datastore['do_you_have_relatives_in_eritrea'],//yes_or_no
            'created_at' => date("Y-m-d"),
        ]);

      if ( $p2Datastore['do_you_have_relatives_in_eritrea']==1) {
      //relatives_in_eritrea_table
foreach ($p2Datastore['relatives_in_eritrea'] as $relatives_in_eritrea) {
           DB::table('dp15s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp15002' => $relatives_in_eritrea['f_name_relative'],//f_name_relative
            'dp15003' => $relatives_in_eritrea['m_name_relative'],//m_name_relative
            'dp15004' => $relatives_in_eritrea['l_name_relative'],//l_name_relative
            'dp15005' => $relatives_in_eritrea['zoba_name'],//zoba_name_relative
            'dp15006' => $relatives_in_eritrea['city_town_village_name'],//city/village_name
            'dp15007' => $relatives_in_eritrea['relative_relationship'],//relative_relationship
               'created_at' => date("Y-m-d"),
        ]);
}

      }




    foreach ($p3Datastore['language'] as $lang) {
//    read_and_write_table

        DB::table('dp16s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp16002' => $lang['language_name'],//language_name
            'dp16003' => $lang['read'],//read
            'dp16004' => $lang['write'],//write
            'dp16005' => $lang['speak'],//speak
            'dp16006' => $lang['listen'],//listen
            'created_at' => date("Y-m-d"),
        ]);
    }


        //enrolled_in_yes_or_no_table

        DB::table('dp17s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp17002' => $p3Datastore['Are_you_enrolled_educational_institution_now'],//enrolled_yes_or_no
            'created_at' => date("Y-m-d"),
        ]);

        //currently_enrolled_in_table


            DB::table('dp31s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp31002' => $p3Datastore['currently_enrolled_in'],//currently_enrolled_in_name
                'created_at' => date("Y-m-d"),
        ]);

           //highest_education_level_table

        //     DB::table('dp18s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp18002' => $p2Datastore['ስም'],//email
    //     ]);


             DB::table('dp40s')->insertOrIgnore([
             'personal_id' => $personal_id,
             'dp40002' => $p3Datastore['do_you_have_education_level_obtained'],//do_you_have_education_level_obtained
                 'created_at' => date("Y-m-d"),
         ]);

if ($p3Datastore['do_you_have_education_level_obtained'] !== 1){
    foreach ($p3Datastore['certification_obtained'] as $certification) {
//   certificate_achieved_table

        DB::table('dp20s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp20002' => $certification['number_of_years_learned'],//number_of_years_learned
            'dp20003' => $certification['type_of_eduction'],//type_of_eduction
            'dp20004' => $certification['graduated_year'],//graduated_year
            'dp20005' => $certification['place_of_eduction'],//place_of_eduction
            'dp20006' =>  $certification['certificate'],//certificate
            'created_at' => date("Y-m-d"),
        ]);
    }
}




        //skill yes or no table

            DB::table('dp32s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp32002' => $p3Datastore['skill_obtained_through_experience'],//skill_obtained_through_experience
                'created_at' => date("Y-m-d"),
        ]);



          foreach ($p3Datastore['skills'] as $skill) {
        // certificate_achieved_table

            DB::table('dp21s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp21002' => $skill['skill_name'],//skill_name
            'dp21003' => $skill['experience_in_years'],//experience_in_years
                'created_at' => date("Y-m-d"),
        ]);

         }

        //certificate_achieved_table

            DB::table('dp22s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp22002' => $p3Datastore['employment_type'],//employment_type_name
                'created_at' => date("Y-m-d"),
        ]);

        //certificate_achieved_table

            DB::table('dp23s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp23002' => $p3Datastore['current_occupation'],//occupation_name
                'created_at' => date("Y-m-d"),
        ]);
//////////////////////////////////////////////////////////////
        //certificate_achieved_table

        //     DB::table('dp24s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp24002' => $p2Datastore['ስም'],//email
    //     ]);

    ////////////////////////////////////////////sector_of_employment
foreach ($p3Datastore['sector_of_employment'] as $key=>$values) {
          //sectore of employment _table

            DB::table('dp25s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp25002' => $values,//sector_of_employer_name
                'created_at' => date("Y-m-d"),
        ]);
}




        //money income table

            DB::table('dp26s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp26002' => $p4Datastore['money_income'],//money_income
            'dp26003' => $p4Datastore['currency'],//currency
                'created_at' => date("Y-m-d"),
        ]);


  //yer_or_no_investment_in_eritrea_table

            DB::table('dp33s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp33002' => $p4Datastore['have_investment_in_eritrea'],//yes_or_no
                'created_at' => date("Y-m-d"),
        ]);

if ($p4Datastore['have_investment_in_eritrea']==1) {
   foreach ($p4Datastore['investement_in_eritrea'] as $investment_inside) {

    // investment_in_eritrea_table

            DB::table('dp27s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp27002' => $investment_inside['in_money'],//in_money
            'dp27003' => $investment_inside['currency'],//currency
            'dp27004' => $investment_inside['investment_year'],//investment_year
            'dp27005' => $investment_inside['investment_type'],//investment_type
                'created_at' => date("Y-m-d"),
        ]);

    }


}






  //yer_or_no_investment_outside_eritrea_table

            DB::table('dp34s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp34002' => $p4Datastore['have_investment_outside_eritrea'],//yes_or_no
                'created_at' => date("Y-m-d"),
        ]);

if ($p4Datastore['have_investment_outside_eritrea']==1) {

      foreach ($p4Datastore['investement_outside_eritrea'] as $investement_outside) {

        // investement_outside_eritrea_table

            DB::table('dp28s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp28002' => $investement_outside['in_money'],//in_money
            'dp28003' => $investement_outside['currency'],//currency
            'dp28004' => $investement_outside['investment_year'],//investment_year
            'dp28005' => $investement_outside['investment_type'],//investment_type
                'created_at' => date("Y-m-d"),
        ]);

    }
}

    //yes_or_no_property_in_eritrea table

            DB::table('dp35s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp35002' => $p4Datastore['have_property_in_eritrea'],//yes_or_no_property_in_eritrea
                'created_at' => date("Y-m-d"),
        ]);

if ( $p4Datastore['have_property_in_eritrea']==1) {
    foreach ($p4Datastore['property_in_eritrea'] as $property_in) {

            // property_inside_eritrea_table

            DB::table('dp29s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp29002' => $property_in['type_of_wealthy_property'],//type_of_wealthy_property
            'dp29003' => $property_in['property_name'],//property_name
            'dp29004' => $property_in['property_in_number'],//property_in_number
                'created_at' => date("Y-m-d"),
        ]);

    }

}

 //yes_or_no_property_outside_eritrea

            DB::table('dp36s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp36002' => $p4Datastore['have_property_outside_eritrea'],//yes_or_no_property_outside_eritrea
                'created_at' => date("Y-m-d"),
        ]);

    if ( $p4Datastore['property_outside_eritrea']==1) {

        foreach ($p4Datastore['property_outside_eritrea'] as $property_outside) {

                  // property_outside_eritrea_table

            DB::table('dp30s')->insertOrIgnore([
            'personal_id' => $personal_id,
            'dp30002' => $property_outside['type_of_wealthy_property'],//type_of_wealthy_property
            'dp30003' => $property_outside['property_name'],//property_name
            'dp30004' => $property_outside['property_in_number'],//property_in_number
                'created_at' => date("Y-m-d"),
        ]);
        }
    }
        DB::table('is_form_completeds')->insertOrIgnore([
            'personal_id' => $personal_id,
            'is_form_completed' => 1,//when form registration is completed
            'dis_personal_id' => $dis_personal_id02->dis_personal_id,//dis_personal id is id from dver01 database disverification
            'created_at' => date("Y-m-d"),
        ]);




    ///////////////finished up-to here ////////////////////////

        return $dis_personal_id02;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreData  $storeData
     * @return \Illuminate\Http\Response
     */
    public function show(StoreData $storeData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreDataRequest  $request
     * @param  \App\Models\StoreData  $storeData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreDataRequest $request, StoreData $storeData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreData  $storeData
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreData $storeData)
    {
        //
    }
}
