<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd11;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Refd11::factory(13)->state(new sequence(
            ['refd_11002' => "No income"],
            ['refd_11002' => "1-499"],
            ['refd_11002' => "500-999"],
            ['refd_11002' => "1000-1499"],
            ['refd_11002' => "1500-1999"],
            ['refd_11002' => "2000-2999"],
            ['refd_11002' => "3000-3999"],
            ['refd_11002' => "4000-4999"],
            ['refd_11002' => "5000-6999"],
            ['refd_11002' => "7000-9999"],
            ['refd_11002' => "10,000-14,999"],
            ['refd_11002' => "15,000-19,999"],
            ['refd_11002' => "20,000-and more"],
    
        ))->create();
    }
}
