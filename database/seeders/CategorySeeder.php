<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::updateOrCreate(['id' => '1'], ['title' => 'Men']);
        $category = Category::updateOrCreate(['id' => '2'], ['title' => 'Women']);
        $category = Category::updateOrCreate(['id' => '3'], ['title' => 'Children']);
    }
}
