<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
'name'=>"ali khan",
'email'=>"zaaf7@gmail.com",
"password"=>Hash::make('12345'),
"created_at"=>date("Y:m:d H:i:s")
        ]);



    }
}
