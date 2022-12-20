<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd01;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //
                Refd01::factory(2)->state(new sequence(
                    ['refd_01002' => "Male"],
                    ['refd_01002' => "Female"],
            
                ))->create();
    }
}
