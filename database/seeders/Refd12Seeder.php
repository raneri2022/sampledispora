<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd12;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd12Seeder extends Seeder
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
               Refd12::factory(9)->state(new sequence(
                ['refd_12002' => "Agricultural"],
                ['refd_12002' => "Tread Company"],
                ['refd_12002' => "Share Company"],
                ['refd_12002' => "Real state"],
                ['refd_12002' => "Sanitation"],
                ['refd_12002' => "Healthy"],
                ['refd_12002' => "Insurance"],
                ['refd_12002' => "Sport"],
                ['refd_12002' => "technology"],
        
            ))->create();
    }
}
