<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class datasseedre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laiba')->insert([
            'name'=>Str::random(5),
            'email'=>Str::random(10).'@gmal.com',
            'password'=>Str::random(7),
        ]);
    }
}
