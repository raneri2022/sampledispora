<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd02;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Refd02::factory(5)->state(new sequence(
          ['refd_02002' => "Single"],
            ['refd_02002' => "Married"],
            ['refd_02002' => "Divorced"],
            ['refd_02002' => "Separated"],
              ['refd_02002' => "Widowed"],
              


        ))->create();
    }
}
