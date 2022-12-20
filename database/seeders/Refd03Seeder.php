<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd03;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refd03::factory(6)->state(new sequence(
            ['refd_03002' => "Maekel Region"],
            ['refd_03002' => "Anseba Region"],
            ['refd_03002' => "Gash-Barka Region"],
            ['refd_03002' => "Debub Region"],
            ['refd_03002' => "Northern Red Sea Region"],
            ['refd_03002' => "Southern Red Sea Region"],
    
        ))->create();
    }
}
