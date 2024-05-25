<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use Database\Factories\BrandFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(25)->create();
        // Product::factory(200)->create();
        // Order::factory(20)->create();
        //Category::factory(15)->create();
        Brand::factory(13)->create();
    }
}
