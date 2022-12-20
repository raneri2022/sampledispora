<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Refd08;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Refd08Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Refd08::factory(2)->state(new sequence(
            ['refd_08002' => "Employeed"],
            ['refd_08002' => "Unemployeed"],
            ['refd_08002' => "House wife"],
            ['refd_08002' => "Employer (with hired employees)"],
            ['refd_08002' => "Self-employed (without hired employees)"],
            ['refd_08002' => "Helper (without pay) in a family business"],
            ['refd_08002' => "Paid apprentice"],
            ['refd_08002' => "Other type of employment"],
    
        ))->create();
    }
}
