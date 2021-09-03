<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Joymap\Models\Goal;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            Goal::create([
                'name' => "GOAL$i"
            ]);
        }
    }
}
