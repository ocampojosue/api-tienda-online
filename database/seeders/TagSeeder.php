<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            "name" => "Aperiam voluptate.",
            "description" => "Rem similique provident alias."
        ]);
        Tag::create([
            "name" => "Ex corrupti.",
            "description" => "Ducimus qui dolores reprehenderit."
        ]);
        Tag::create([
            "name" => "Quasi sequi.",
            "description" => "Soluta omnis delectus eos."
        ]);
        Tag::create([
            "name" => "Ut magnam.",
            "description" => "Culpa consectetur repudiandae et."
        ]);
        Tag::create([
            "name" => "Eum asperiores.",
            "description" => "Perspiciatis non ad eaque."
        ]);
        Tag::create([
            "name" => "Ducimus optio.",
            "description" => "Et quia qui eligendi."
        ]);
        Tag::create([
            "name" => "Est rerum.",
            "description" => "Et pariatur eos ab."
        ]);
        Tag::create([
            "name" => "Omnis et.",
            "description" => "Officiis eos eligendi maiores."
        ]);
        Tag::create([
            "name" => "Reprehenderit eaque.",
            "description" => "Debitis consequuntur deleniti perferendis."
        ]);
        Tag::create([
            "name" => "Modi molestiae.",
            "description" => "Dolor eum soluta et."
        ]);
        Tag::create([
            "name" => "Qui quo.",
            "description" => "Reprehenderit laboriosam qui corporis."
        ]);
        Tag::create([
            "name" => "Et numquam.",
            "description" => "Veritatis iste ratione velit."
        ]);
        Tag::create([
            "name" => "Harum a.",
            "description" => "Voluptatum laborum qui dolore."
        ]);
        Tag::create([
            "name" => "Dolorem dolorem.",
            "description" => "Beatae eligendi consequuntur labore."
        ]);
        Tag::create([
            "name" => "Voluptas autem.",
            "description" => "Vel odio accusantium voluptas."
        ]);
    }
}
