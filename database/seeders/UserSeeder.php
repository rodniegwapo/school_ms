<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname'          => 'Admin',
            'lastname'          => 'Admin',
            'email'         => 'admin@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'firstname'          => 'Teacher',
            'lastname'          => 'Teacher',
            'email'         => 'teacher@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        $user3 = User::create([
            'firstname'          => 'Parent',
            'lastname'          => 'Parent',
            'email'         => 'parent@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Parent');

        $user4 = User::create([
            'firstname'          => 'Student',
            'lastname'          => 'Student',
            'email'         => 'student@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Student');


        // DB::table('teachers')->insert([
        //     [
        //         'user_id'           => $user2->id,
        //         'gender'            => 'male',
        //         'phone'             => '0123456789',
        //         'dateofbirth'       => '1993-04-11',
        //         'current_address'   => 'Dhaka-1215',
        //         'permanent_address' => 'Dhaka-1215',
        //         'created_at'        => date("Y-m-d H:i:s")
        //     ]
        // ]);

        // DB::table('parents')->insert([
        //     [
        //         'user_id'           => $user3->id,
        //         'gender'            => 'male',
        //         'phone'             => '0123456789',
        //         'current_address'   => 'Dhaka-1215',
        //         'permanent_address' => 'Dhaka-1215',
        //         'created_at'        => date("Y-m-d H:i:s")
        //     ]
        // ]);

        // DB::table('grades')->insert([
        //     'teacher_id'        => 1,
        //     'class_numeric'     => 1,
        //     'class_name'        => 'One',
        //     'class_description' => 'class one'
        // ]);

        // DB::table('students')->insert([
        //     [
        //         'user_id'           => $user4->id,
        //         'parent_id'         => 1,
        //         'class_id'          => 1,
        //         'roll_number'       => 1,
        //         'gender'            => 'male',
        //         'phone'             => '0123456789',
        //         'dateofbirth'       => '1993-04-11',
        //         'current_address'   => 'Dhaka-1215',
        //         'permanent_address' => 'Dhaka-1215',
        //         'created_at'        => date("Y-m-d H:i:s")
        //     ]
        // ]);
    }
}
