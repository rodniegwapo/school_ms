<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\YearLevel;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YearLevel::create(['name' => 'First Year']);
        YearLevel::create(['name' => 'Last Year']);
        YearLevel::create(['name' => 'Third Year']);
        YearLevel::create(['name' => 'Fourth Year']);
    }
}
