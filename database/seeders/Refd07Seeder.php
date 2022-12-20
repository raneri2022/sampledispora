<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd07;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                  //
                  Refd07::factory(19)->state(new sequence(
                    ['refd_07002' => "Early childhood education (nursery)"],
                    ['refd_07002' => "Pre-primary education (kindergarten)"],
                    ['refd_07002' => "Elementary without completing a level (elementary grades)"],
                    ['refd_07002' => "Primary education"],
                    ['refd_07002' => "Intermediate education (general)"],
                    ['refd_07002' => "Intermediate education (vocational)"],
                    ['refd_07002' => "Secondary education (general)"],
                    ['refd_07002' => "Secondary education (vocational)"],
                    ['refd_07002' => "Associate diploma (general)"],
                    ['refd_07002' => "Associate diploma (vocational)"],
                    ['refd_07002' => "Intermediate diploma (general)"],
                    ['refd_07002' => "Intermediate diploma (vocational)"],
                    ['refd_07002' => "Academic bachelor's degree (3-4 years)"],
                    ['refd_07002' => "Academic bachelor's degree (5 years)"],
                    ['refd_07002' => "Bachelor of Arts (5 years)"],
                    ['refd_07002' => "Higher diploma"],
                    ['refd_07002' => "6-year undergraduate program"],
                    ['refd_07002' => "Master’s degree"],
                    ['refd_07002' => "PhD"],
            
            
                ))->create();
    }
}
