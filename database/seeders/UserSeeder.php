<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = [
            [
                'username' => "super_admin",
                // 'email'=> "sir@peternak.com",
                'role' => "super_admin",
                'password'   => bcrypt("peternaklele"),
                'pass' => "peternaklele",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'username' => "admin",
                'role'=> "admin",
                'password'=> bcrypt("admin"),
                'pass'=>"admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]

        ];
        // \DB::table('users')->insert($usr);
        User::insert($usr);
    }
}
