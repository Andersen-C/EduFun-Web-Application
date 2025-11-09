<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create('ID_id');

        $categories = Category::all();

        foreach($categories as $cat) {
            for($i = 0; $i < 2; $i++) {
                Writer::create([
                    'name' => $faker->name(),
                    'category_id' => $cat->id,
                ]);
            }
        }

    }
}
