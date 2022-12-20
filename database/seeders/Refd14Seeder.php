<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd14;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd14Seeder extends Seeder
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
              Refd14::factory(2)->state(new sequence(
                ['refd_14002' => "Yes"],
                ['refd_14002' => "No"],
        
            ))->create();
    }
}
