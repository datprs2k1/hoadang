<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");

        DB::table('licenses')->truncate();

        $data = [
            [
                "ip" => "171.232.194.82",
                "note" => "Quyền",
                "expired_at" => "2099-09-15 00:57:31"
            ],
            [
                "ip" => "171.250.164.49",
                "note" => "Năm Xa",
                "expired_at" => "2099-09-18 11:35:25"
            ],
            [
                "ip" => "171.250.164.62",
                "note" => "Tp Phạm",
                "expired_at" => "2099-09-20 19:07:50"
            ],
            [
                "ip" => "115.74.9.150",
                "note" => "Thế Mỹ",
                "expired_at" => "2099-09-22 22:42:50"
            ]
        ];

        DB::table('licenses')->insert($data);

        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }
}
