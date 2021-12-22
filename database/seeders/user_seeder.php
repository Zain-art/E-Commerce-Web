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
        DB::table('users')->insert([
'name'=>"ahmad raza",
'email'=>"za870411@gmail.com",
"password"=>Hash::make('zain'),
"created_at"=>date("Y:m:d H:i:s")
        ]);



    }
}
