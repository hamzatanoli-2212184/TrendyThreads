<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'T-shirt',
            'price' => 20,
            'image' => 'tshirt.jpg', // Ensure the image file is stored in the appropriate folder
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jeans',
            'price' => 40,
            'image' => 'jeans.jpg',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jacket',
            'price' => 60,
            'image' => 'jacket.jpg',
        ]);
    }
}
