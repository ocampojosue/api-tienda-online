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
        Category::create([
            "name" => "Atque quo.",
            "description" => "Qui quod aut quam.",
        ]);
        Category::create([
            "name" => "Qui voluptas.",
            "description" => "Beatae tenetur voluptas quo.",
        ]);
        Category::create([
            "name" => "Dolorem et.",
            "description" => "Est nisi facilis aut.",
        ]);
        Category::create([
            "name" => "Necessitatibus maxime.",
            "description" => "Mollitia similique et eos.",
        ]);
        Category::create([
            "name" => "Est et.",
            "description" => "Ut magni quasi consequatur.",
        ]);
        Category::create([
            "name" => "Ex quia.",
            "description" => "Nemo natus iusto iusto.",
        ]);
        Category::create([
            "name" => "Magni qui.",
            "description" => "Veniam sed fuga quia.",
        ]);
        Category::create([
            "name" => "Aut assumenda.",
            "description" => "Fuga eius minima explicabo.",
        ]);
        Category::create([
            "name" => "Labore enim.",
            "description" => "Tempore sed numquam est.",
        ]);
        Category::create([
            "name" => "Ullam voluptatem.",
            "description" => "At natus quia quod.",
        ]);
        Category::create([
            "name" => "Quam non.",
            "description" => "Sed ea sed rerum.",
        ]);
        Category::create([
            "name" => "Et eos.",
            "description" => "Maxime aperiam accusamus aut.",
        ]);
        Category::create([
            "name" => "Quidem aut.",
            "description" => "Aut sunt nesciunt harum.",
        ]);
        // Category::factory(5)->create();
    }
}
