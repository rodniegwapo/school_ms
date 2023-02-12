<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'user_id' => 4,
            'gender' => 'Male',
            'phone' => 12345678123,
            'address' => 'Crossing Malabog',
            'year_level_id' => 1,
            'section_id' => 1
        ]);
    }
}
