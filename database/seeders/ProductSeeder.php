<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        foreach(range(1,100) as $i){
        
            Product::create(
                [
                    "name"=>fake()->name,
                    "image"=>fake()->image,
                    "category_id"=>rand(1,5),
                    "disc"=>fake()->sentence,
                    "price"=>fake()->numberBetween(2,1000000)
                ]
                );
        }
    }
}
