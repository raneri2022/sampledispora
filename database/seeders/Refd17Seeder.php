<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd17;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd17Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

          Refd17::factory(3)->state(new sequence(
                ['refd_17002' => "Us Dollar"],
                ['refd_17002' => "Euro"],
                ['refd_17002' => "Pound"],


            ))->create();
    }
}
