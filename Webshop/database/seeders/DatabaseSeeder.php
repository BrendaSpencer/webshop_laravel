<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    User::create([
        'id' => '1',
        'firstname' => 'tester',
        'lastname' => 'test',
        'username' => 'testertje',
        'email' => 'testertje@gmail.com',
        'password' => 'tester',
    ]);
    Product::create([
        'id' => '1',
        'name' => 'Eerste product',
        'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'tags'=> 'cars, books, batteries',
        'price'=> '3.99',
        'user_id' => '1'
    ]);
    Product::create([
        'id' => '2',
        'name' => 'tweede product',
        'description'=> 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'tags'=> 'cars, nitro, gas',
        'price'=> '63.99',
        'user_id' => '1'
    ]);

    Product::create([
        'id' => '3',
        'name' => 'Derde product',
        'description'=> ' sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'tags'=> '2dehands, test ',
        'price'=> '93.99',
        'user_id' => '1'
    ]);
    Product::create([
        'id' => '4',
        'name' => 'Vierde product',
        'description'=> 'Lorem ipsum dolor sit amet,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'tags'=> 'cars, books, batteries',
        'price'=> '0.99',
        'user_id' => '1'
    ]);
    Product::create([
        'id' => '5',
        'name' => 'vijfde product',
        'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'tags'=> 'cars, books, batteries',
        'price'=> '3.99',
        'user_id' => '1'
    ]);
    ProductImage::create([
        'id' => '1',
        'product_id' => '5',
        'image' => 'car1.jpg'

    ]);
    ProductImage::create([
        'id' => '2',
        'product_id' => '4',
        'image' => 'car2.jpg'

    ]);
    ProductImage::create([
        'id' => '3',
        'product_id' => '3',
        'image' => 'car3.jpg'

    ]);
    ProductImage::create([
        'id' => '4',
        'product_id' => '2',
        'image' => 'car4.jpg'

    ]);
    ProductImage::create([
        'id' => '5',
        'product_id' => '1',
        'image' => 'batterie.jpg'

    ]);
    }
}
