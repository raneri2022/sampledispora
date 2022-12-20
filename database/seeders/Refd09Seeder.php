<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd09;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd09Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Refd09::factory(8)->state(new sequence(
            ['refd_09002' => "Government sector"],
            ['refd_09002' => "Public sector enterprise"],
            ['refd_09002' => "Private sector enterprise"],
            ['refd_09002' => "Agricultural sector"],
            ['refd_09002' => "Domestic worker"],
            ['refd_09002' => "Non-profit organization"],
            ['refd_09002' => "International organizations or foreign embassy"],
            ['refd_09002' => "Other sectors (please specify)"],
    
        ))->create();
    }
}
