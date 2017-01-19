<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [
            'name' => 'Learn to build websites in HTML5',
            'image' => 'products/book.png',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptates possimus voluptatem molestias dolores, veniam, natus cum temporibus minus, at praesentium neque, odit perspiciatis unde laborum ullam culpa minima atque?'
        ];
        
        $p2 = [
            'name' => 'PHP DEVELOPMENT in depth',
            'image' => 'products/book.png',
            'price' => 2400,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptates possimus voluptatem molestias dolores, veniam, natus cum temporibus minus, at praesentium neque, odit perspiciatis unde laborum ullam culpa minima atque?'
        ];

        Product::create($p1);
        Product::create($p2);

    }
}
