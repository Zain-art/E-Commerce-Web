<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            
           
                [
                    'name'=>'Motrola Mobile3',
                      'price'=>'5000',
                      
                      'category'=>'Mobile',
                      'gallery'=>"https://www.whatmobile.com.pk/admin/images/LG/LGW41-b.jpg",
                      'description'=>'this is oppo mobile'
                ],
                [
                  'name'=>'Infinix Mobile3',
                    'price'=>'5000',
                    
                    'category'=>'Mobile',
                    'gallery'=>"https://www.whatmobile.com.pk/admin/images/LG/LGW41-b.jpg",
                    'description'=>'this is infinix mobile'
              ]
    );
    }
}
