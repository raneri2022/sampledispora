<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd06;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd06Seeder extends Seeder
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
              Refd06::factory(20)->state(new sequence(
                ['refd_06002' => "No Qualification"],
                ['refd_06002' => "Early childhood education (nursery)"],
                ['refd_06002' => "Pre-primary education (kindergarten)"],
                ['refd_06002' => "Some primary education without completing the level"],
                ['refd_06002' => "Primary education"],
                ['refd_06002' => "Intermediate education (general)"],
                ['refd_06002' => "Intermediate education (vocational)"],
                ['refd_06002' => "Secondary education (general)"],
                ['refd_06002' => "Secondary education (vocational)"],
                ['refd_06002' => "Associate diploma (general)"],
                ['refd_06002' => "Associate diploma (vocational)"],
                ['refd_06002' => "Intermediate diploma (general)"],
                ['refd_06002' => "Intermediate diploma (vocational)"],
                ['refd_06002' => "Academic bachelor's degree (3-4 years)"],
                ['refd_06002' => "Academic bachelor's degree (5 years)"],
                ['refd_06002' => "Bachelor of Arts, 5 years"],
                ['refd_06002' => "Higher diploma"],
                ['refd_06002' => "6-year undergraduate program"],
                ['refd_06002' => "Master’s degree"],
                ['refd_06002' => "PhD"],
        
            ))->create();
    }
}

