<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
               //instancier faker 
        $faker = Factory::create();
       
        for( $i = 0 ; $i < 80 ; $i++) {
            Product::create (
                [
                     'title' => $faker->sentence() ,
                    'description' => $faker->text(),
                    'price'=> $faker->numberBetween(15,300),
                    'size' => $faker->randomElement(['XS','S','M','L','XL']),
                    'image'=>'https://picsum.photos/200',
                    'published'=>$faker->boolean(),
                    'state'=>$faker->boolean(),
                    'reference'=>$faker->numberBetween(1,16),
                     //'reference'=>$faker->sentence(),
                ]);
        } 
    }
}
