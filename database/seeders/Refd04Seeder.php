<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd04;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd04Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Refd04::factory(7)->state(new sequence(
            ['refd_04002' => "Wife/Husband"],
            ['refd_04002' => "Son/Daughter"],
            ['refd_04002' => "Son-in-law/ Daughter-in-law"],
            ['refd_04002' => "Grandson/Granddaughter"],
            ['refd_04002' => "Father/Mother"],
            ['refd_04002' => "Brother/Sister"],
            ['refd_04002' => "Grandfather/ Grandmother"],
    
        ))->create();
    }
}
