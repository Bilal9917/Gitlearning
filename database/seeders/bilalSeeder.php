<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Str;

class bilalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bilal')->insert([
            'name' => Str::random(5),
            'email' => Str::random(7).'@gmial.com',
            'password' => Str::random(6)
        ]);
    }
}
