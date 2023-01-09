<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd13;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd13Seeder extends Seeder
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
              Refd13::factory(2)->state(new sequence(
                ['refd_13002' => "Fixed Property"],
                ['refd_13002' => "Movabel Property"],

            ))->create();
    }
}
