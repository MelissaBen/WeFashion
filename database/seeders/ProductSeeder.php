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
                    'title' => $faker->name() ,
                    //'slug' => $faker->slug ,
                    'description' => $faker->text(),
                    'price'=> $faker->numberBetween(15,300)*100,
                    'size' => $faker->randomElement(['XS','S','M','L','XL']),
                    'discount' => $faker->randomElement(['en solde','Standard']),
                    'image' => 'https://placeimg.com/200/200/any?' . rand(1, 100),
                    'published'=>$faker->boolean(),
                    'reference'=>$faker->numberBetween(1,16),
                     //'reference'=>$faker->sentence(),
                ])->categories()->attach([
                rand(1, 2),]);
        } 
    }
}
