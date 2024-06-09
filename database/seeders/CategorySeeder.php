<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Appetizers']);
        Category::create(['name' => 'Main Courses']);
        Category::create(['name' => 'Desserts']);
        Category::create(['name' => 'Drinks']);
    }
}
