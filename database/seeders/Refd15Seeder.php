<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd15;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          Refd15::factory(10)->state(new sequence(
                ['refd_15002' => "Tigre"],
                ['refd_15002' => "Tigrina"],
                ['refd_15002' => "Saho"],
                ['refd_15002' => "Nara"],
                ['refd_15002' => "Rashaida"],
                ['refd_15002' => "Kunama"],
                ['refd_15002' => "Bilen"],
                ['refd_15002' => "Afar"],
                ['refd_15002' => "Hdarb"],
                ['refd_15002' => "Other"],

            ))->create();
    }
}
