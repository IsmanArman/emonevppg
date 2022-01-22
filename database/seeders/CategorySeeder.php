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
        Category::create([
            'name' => 'Pro-Teach',
            'slug' => 'pro-teach'
        ]);

        Category::create([
            'name' => 'News-Update',
            'slug' => 'news-update'
        ]);
    }
}
