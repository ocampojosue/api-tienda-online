<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name" => "Est modi.",
            "cost" => 6.72,
            "price" => 3.44,
            "stock" => 779,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Repellat voluptatem.",
            "cost" => 7.57,
            "price" => 2.71,
            "stock" => 337,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Asperiores et.",
            "cost" => 6.71,
            "price" => 2.55,
            "stock" => 525,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Voluptates molestiae.",
            "cost" => 7.62,
            "price" => 3.45,
            "stock" => 324,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Molestiae voluptatem.",
            "cost" => 6.33,
            "price" => 2.98,
            "stock" => 781,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Eos quia.",
            "cost" => 7.82,
            "price" => 2.17,
            "stock" => 592,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Non sit.",
            "cost" => 7.87,
            "price" => 2.93,
            "stock" => 247,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Dolorem autem.",
            "cost" => 7.98,
            "price" => 2.91,
            "stock" => 278,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Neque omnis.",
            "cost" => 6.53,
            "price" => 2.87,
            "stock" => 626,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Rerum cum.",
            "cost" => 7.53,
            "price" => 2.98,
            "stock" => 878,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Esse provident.",
            "cost" => 7.29,
            "price" => 3.05,
            "stock" => 628,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Dolore illum.",
            "cost" => 6.27,
            "price" => 2.99,
            "stock" => 365,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Sed est.",
            "cost" => 7.99,
            "price" => 2.06,
            "stock" => 484,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Officia voluptates.",
            "cost" => 7.03,
            "price" => 3.06,
            "stock" => 440,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Commodi voluptates.",
            "cost" => 7.34,
            "price" => 3.71,
            "stock" => 352,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Occaecati consequatur.",
            "cost" => 6.14,
            "price" => 3.4699999999999998,
            "stock" => 800,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Odit architecto.",
            "cost" => 6.37,
            "price" => 2.43,
            "stock" => 101,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Est voluptatibus.",
            "cost" => 6.07,
            "price" => 2.7199999999999998,
            "stock" => 526,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Aut ullam.",
            "cost" => 7.36,
            "price" => 3.56,
            "stock" => 813,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        Product::create([
            "name" => "Est consequatur.",
            "cost" => 7.96,
            "price" => 3.94,
            "stock" => 244,
            "category_id" => rand(1,15),
            "tag_id" => rand(1,15)
        ]);
        // Product::factory(30)->create();
    }
}
