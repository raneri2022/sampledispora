<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreDataRequest;
use App\Http\Requests\UpdateStoreDataRequest;
use App\Models\StoreData;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        
        $p2Datastore = $request['stpe1']


    // personal_table

    //    $personal_id = DB::table('personal_ids')->insertGetId([
            
    //         // 'personal_id' => 0101010101,
    //         'f_name_personal' => "Abel",
    //         'm_name_personal' => "Tiezazu",
    //         'l_name_personal' => "Berhe",
    //     ]);

    //personal_info_table

        // DB::table('dp01s')->insertOrIgnore([
        //     'personal_id' => $personal_id,
        //     'dp01002' => $p2Datastore['gender_name_id'],//gender_name
        //     'dp01003' => $p2Datastore['date_of_birth'],//date_of_birth
        //     'dp01004' => $p2Datastore['place_of_birth_country_id'],//place_of_birth_country_name //place_of_birth_country_id
        //     'dp01005' => $p2Datastore['place_of_birth_state_region_id'],//place_of_birth_state/region_name
        //     'dp01006' => $p2Datastore['place_of_birth_city_name'],//place_of_birth_city_name
        // ]);

    //address_table

    //     DB::table('dp02s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp02002' => $p2Datastore['address_country_id'],//country_name
    //         'dp02003' => $p2Datastore['address_state_region_id'],//state/region_name
    //         'dp02004' => $p2Datastore['address_city_name'],//city_name
    //     ]);   
    
    //origin_table
    
    //     DB::table('dp03s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp03002' => $p2Datastore['place_of_origin_country_name_id'],//country_place_of_origin_name
    //         'dp03003' => $p2Datastore['place_of_origin_state_region_name_id'],//state/regione_place_of_origin_name
    //         'dp03004' => $p2Datastore['place_of_origin_city_name'],//village/town_place_of_origin_name
    //     ]);

    //mother_table

    //     DB::table('dp04s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp04002' => $p2Datastore['f_mother_name'],//f_mother_name
    //         'dp04003' => $p2Datastore['m_mother_name'],//m_mother_name
    //         'dp04004' => $p2Datastore['l_mother_name'],//l_mother_name
    //         'dp04005' => $p2Datastore['mother_tongue'],//mother_tongue
    //         'dp04006' => $p2Datastore['mother_place_of_origin_country_id'],//mother_place_origin
    //     ]);

  

    // foreach ($p2data['nationality'] as $data_identitiy) {

    //     if (isset($data_identitiy['nationality_id'])) {

    //nationality_table

    //    $ins_national_id = DB::table('dp05s')->insertGetId([
    //         'personal_id' => $personal_id,
    //         'dp05002' => $data_identitiy['nationality_id'], //nationality
    //     ]);
            
    //     }
       
    // }

    // if(isset($data_identitiy['national_id']))){

    //nationality_id_number_table


    //     DB::table('dp06s')->insertOrIgnore([
    //         'n_id' => $ins_national_id,
    //         'dp06002' => $data_identitiy['national_id'], //nationality_id
    //     ]);

    // }

     // if(isset($data_identitiy['passport_id']))){

    //passport_id_table


    //     DB::table('dp07s')->insertOrIgnore([
    //         'n_id' => $ins_national_id,
    //         'dp07002' => $data_identitiy['passport_id'], //passport_id
    //     ]);

    //  }

  



    //marital_status_table

    //     DB::table('dp08s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp08002' => $p2Datastore['marital_status'], //marital_status
    //     ]);


// mobile_table

    //     DB::table('dp09s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp09002' => $p2Datastore['mobile_number'],//mobile_number
    //     ]);

//fixed_telephone_table

    //     DB::table('dp10s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp10002' => $p2Datastore['fixed_telephone_number'],//fixed_telephone_number
    //     ]);

//email_table

    //     DB::table('dp11s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp11002' => $p2Datastore['personal_email'],//email
    //     ]);


     //Immigration_year_table

    //     DB::table('dp37s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp37002' => $p2Datastore['migrated_from_eritrea'],//immigration_yes_or_no
    //     ]);

    // if ($p2Datastore['migrated_from_eritrea']==1) {
           //Immigration_year_table

    //     DB::table('dp12s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp12002' => $p2Datastore['migration_year'],//immigration_year
    //     ]);
    // }

 

    //language_table

    //     DB::table('dp13s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp13002' => $p2Datastore['ስም'],//language_name
    //     ]);




       //previously_settled_yes or no table

    //     DB::table('dp38s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp38002' => $p2Datastore['changed_residence_before'],//yes_or_no
    //     ]);


    // if ( $p2Datastore['changed_residence_before']==1) {
           //previously_settled_table

    //     DB::table('dp14s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp14002' => $p2Datastore['country_id'],//country_name
    //         'dp14003' => $p2Datastore['state_region_id'],//city_name
    //         'dp14004' => $p2Datastore['city_village_town_name'],//city_name
    //         'dp14005' => $p2Datastore['from_year'],//from_year
    //         'dp14006' => $p2Datastore['to_year'],//to_year
    //     ]);
    // }
// do_you_have_relatives_in_eritrea table

    //     DB::table('dp39s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp39002' => $p2Datastore['do_you_have_relatives_in_eritrea'],//yes_or_no
    //     ]);

      // if ( $p2Datastore['do_you_have_relatives_in_eritrea']==1) {
      //relatives_in_eritrea_table

        //     DB::table('dp15s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp15002' => $p2Datastore['ስም'],//f_name_relative
    //         'dp15002' => $p2Datastore['ስም'],//m_name_relative
    //         'dp15002' => $p2Datastore['ስም'],//l_name_relative
    //         'dp15002' => $p2Datastore['ስም'],//zoba_name_relative
    //         'dp15002' => $p2Datastore['ስም'],//city/village_name
    //         'dp15002' => $p2Datastore['ስም'],//relative_relationship
    //     ]);
    //   }

  


    // foreach ($language as $lang) {
   //read_and_write_table

    //     DB::table('dp16s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp16002' => $lang['read'],//read
    //         'dp16002' => $lang['write'],//write
    //         'dp16002' => $lang['speak'],//speak
    //         'dp16002' => $lang['listen'],//listen
    //     ]);
    // }
       

        //enrolled_in_yes_or_no_table

    //     DB::table('dp17s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp17002' => $p2Datastore['Are_you_enrolled_educational_institution_now'],//enrolled_yes_or_no
    //     ]);

        //currently_enrolled_in_table


        //     DB::table('dp31s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp31002' => $p2Datastore['currently_enrolled_in'],//currently_enrolled_in_name
    //     ]);
    
           //highest_education_level_table

        //     DB::table('dp18s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp18002' => $p2Datastore['ስም'],//email
    //     ]);

            //highest_education_field_name_table


        //     DB::table('dp19s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp19002' => $p2Datastore['ስም'],//email
    //     ]);


    // foreach ($p2Datastore['certification_obtained'] as $certification) {
  //certificate_achieved_table

        //     DB::table('dp20s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp20002' => $certification['number_of_years_learned'],//number_of_years_learned
    //         'dp20003' => $certification['type_of_eduction'],//type_of_eduction
    //         'dp20004' => $certification['graduated_year'],//graduated_year
    //         'dp20005' => $certification['place_of_eduction'],//place_of_eduction
            // 'dp20006' =>  $certification['certificate'],//certificate
    //     ]);
    // }
      

    
        //skill yes or no table

        //     DB::table('dp32s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp32002' => $p2Datastore['skill_obtained_through_experience'],//skill_obtained_through_experience
    //     ]);

   

          // foreach ($p2Datastore['skills'] as $skill) {
        //certificate_achieved_table

        //     DB::table('dp21s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp21002' => $skill['skill_name'],//skill_name
    //         'dp21002' => $skill['experience_in_years'],//experience_in_years
    //     ]);

         // }

        //certificate_achieved_table

        //     DB::table('dp22s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp22002' => $p2Datastore['employment_type'],//employment_type_name
    //     ]);

        //certificate_achieved_table

        //     DB::table('dp23s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp23002' => $p2Datastore['current_occupation'],//occupation_name
    //     ]);
//////////////////////////////////////////////////////////////
        //certificate_achieved_table

        //     DB::table('dp24s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp24002' => $p2Datastore['ስም'],//email
    //     ]);

    ////////////////////////////////////////////

        //sectore of employment _table

        //     DB::table('dp25s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp25002' => $p2Datastore['sector_of_employer_name'],//sector_of_employer_name
    //     ]);

        //money income table

        //     DB::table('dp26s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp26002' => $p2Datastore['money_income'],//money_income
    //         'dp26003' => $p2Datastore['currency'],//currency
    //     ]);


  //yer_or_no_investment_in_eritrea_table

        //     DB::table('dp33s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp33002' => $p2Datastore['have_investment_in_eritrea'],//yes_or_no
    //     ]);

// if ($p2Datastore['have_investment_in_eritrea']==1) {
   // foreach ($p2Datastore['investement_in_eritrea'] as $investment_inside) {
             
    //investment_in_eritrea_table

        //     DB::table('dp27s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp27002' => $investment_inside['in_money'],//in_money 
    //         'dp27002' => $investment_inside['currency'],//currency 
    //         'dp27002' => $investment_inside['investment_year'],//investment_year 
    //         'dp27002' => $investment_inside['investment_type'],//investment_type 
    //     ]);
// 
    // }


// }

 
  



  //yer_or_no_investment_outside_eritrea_table

        //     DB::table('dp34s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp34002' => $p2Datastore['have_investment_outside_eritrea'],//yes_or_no
    //     ]);

// if ($p2Datastore['have_investment_outside_eritrea']==1) {
    
      // foreach ($p2Datastore['investement_outside_eritrea'] as $investement_outside) {
             
        //investement_outside_eritrea_table

        //     DB::table('dp28s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp28002' => $investement_outside['in_money'],//in_money 
    //         'dp28003' => $investement_outside['currency'],//currency 
    //         'dp28004' => $investement_outside['investment_year'],//investment_year 
    //         'dp28005' => $investement_outside['investment_type'],//investment_type 
    //     ]);
// 
    // }
// }
  
    //yes_or_no_property_in_eritrea table

        //     DB::table('dp35s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp35002' => $p2Datastore['have_property_in_eritrea'],//yes_or_no_property_in_eritrea
    //     ]);

// if ( $p2Datastore['have_property_in_eritrea']==1) {
    // foreach ($p2Datastore['property_in_eritrea'] as $property_in) {
       
            //property_inside_eritrea_table

        //     DB::table('dp29s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp29002' => $property_in['type_of_wealthy_property'],//type_of_wealthy_property
    //         'dp29002' => $property_in['property_name'],//property_name
    //         'dp29002' => $property_in['property_in_number'],//property_in_number
    //     ]);
        
    // }
   
// }
     
 //yes_or_no_property_outside_eritrea

        //     DB::table('dp36s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp36002' => $p2Datastore['property_outside_eritrea'],//yes_or_no_property_outside_eritrea
    //     ]);

    // if ( $p2Datastore['property_outside_eritrea']==1) {

    //     foreach ($p2Datastore['property_outside_eritrea'] as $property_outside) {
           
    //               // property_outside_eritrea_table

    //         DB::table('dp30s')->insertOrIgnore([
    //         'personal_id' => $personal_id,
    //         'dp30002' => $property_outside['type_of_wealthy_property'],//type_of_wealthy_property
    //         'dp30003' => $property_outside['property_name'],//property_name
    //         'dp30004' => $property_outside['property_in_number'],//property_in_number
    //     ]);
    //     }
       
    // }
 



    ///////////////finished up-to here ////////////////////////

        return $p2Datastore;
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
