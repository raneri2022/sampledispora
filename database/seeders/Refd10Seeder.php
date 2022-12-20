<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd10;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd10Seeder extends Seeder
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
              Refd10::factory(8)->state(new sequence(
                ['refd_10002' => "Earned Income"],
                ['refd_10002' => "Family Member Income "],
                ['refd_10002' => "Govermental Aid"],
             
        
            ))->create();
    }
}
