<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('products');
        Storage::makeDirectory('categories');
        Storage::makeDirectory('products');

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,

        ]);
    }
}
