<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd05;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd05Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Refd05::factory(2)->state(new sequence(
            ['refd_05002' => "In Eritrea"],
            ['refd_05002' => "Outside Eritrea"],
    
        ))->create();
    }
}
