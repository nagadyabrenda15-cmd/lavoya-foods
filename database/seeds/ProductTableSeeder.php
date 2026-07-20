<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'id' => 1,
            'category_id' => 1,
            'name' => 'African Tea',
            'price' => 7000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'africantea.jpeg',
            'rating' => '5',
            'discount' => 10
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 2,
            'category_id' => 2,
            'name' => 'Strawberry',
            'price' => 12000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'back.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 3,
            'category_id' => 1,
            'name' => 'Sumbiee Beans',
            'price' => 4000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'break.jpeg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 4,
            'category_id' => 1,
            'name' => 'Chicken Pieces',
            'price' => 18000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'chiken.jpeg',
            'rating' => '5',
            'discount' => 15
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 5,
            'category_id' => 1,
            'name' => 'Burger bans',
            'price' => 8000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'bunner1.jpeg',
            'rating' => '5',
            'discount' => 10
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 6,
            'category_id' => 1,
            'name' => 'Liver',
            'price' => 10000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'liver.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 7,
            'category_id' => 1,
            'name' => 'Fresh Chicken',
            'price' => 12000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'slider2.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 8,
            'category_id' => 3,
            'name' => 'Fruit Juice',
            'price' => 2000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'ice.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 9,
            'category_id' => 1,
            'name' => 'Chinese Buffy',
            'price' => 15000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'slider3.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 10,
            'category_id' => 2,
            'name' => 'Spaghetting',
            'price' => 3500,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'supperget.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 11,
            'category_id' => 1,
            'name' => 'Spicied Rice',
            'price' => 5000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'slider4.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 12,
            'category_id' => 1,
            'name' => 'Posho & Beans',
            'price' => 3000,
            'quantity' =>100,
            'description' => 'Taste the delicious and quality product!!',
            'image' => 'posho.jpeg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();
    }
}
