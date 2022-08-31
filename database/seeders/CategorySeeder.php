<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $categories = [

                            [
                                'name' => 'creps',
                                'slug' => Str::slug('creps'),

                            ],
                            [
                                'name' => 'churros',
                                'slug' => Str::slug('churros'),

                            ],
                            [
                                'name' => 'cupcakes',
                                'slug' => Str::slug('cupcakes'),

                            ]
            ];
        foreach ($categories as $category) {
            Category::factory(1)->create($category);
        }
    }
}
