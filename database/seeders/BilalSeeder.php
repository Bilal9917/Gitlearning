<?php

namespace Database\Seeders;
use DB;
use Str;
use Illuminate\Database\Seeder;

class BilalSeeder extends Seeder
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
            'email' => Str::random(7).'@gmail',
            'city' => Str::random(6),
            'password' => Str::random(5),
        ]);
    }
}
