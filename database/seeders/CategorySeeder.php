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
            'name' => 'Celulares',
            'description' => 'Celulares de todos los modelos'
        ]);
        Category::create([
            'name' => 'Computadoras',
            'description' => 'Computadoras de todos los modelos'
        ]);
        Category::factory(10)->create();
    }
}
