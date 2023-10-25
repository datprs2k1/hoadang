<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");

        DB::table('users')->truncate();

        $data = [
            'email' => 'datprs@gmail.com',
            'name' => 'datprs',
            'password' => Hash::make('Hoangdat9a')
        ];

        DB::table('users')->insert($data);

        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }
}
