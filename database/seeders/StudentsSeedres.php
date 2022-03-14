<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class StudentsSeedres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'name'=>Str::random(5),
            'email'=>Str::random(7).'@gmail.com',
            'city'=>Str::random(5),
        ]);
    }
}
