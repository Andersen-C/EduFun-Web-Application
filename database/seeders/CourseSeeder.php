<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create("ID_id");

        $cat1 = Category::where('name', 'Interactive Multimedia')->get()->first();
        $cat2 = Category::where('name', 'Software Engineering')->get()->first();
        
        $cat1Writer = Writer::where('category_id', $cat1->id)->pluck('id')->toArray();
        $cat2Writer = Writer::where('category_id', $cat2->id)->pluck('id')->toArray();

        $interactiveMultimediaCourse = ['Human and Computer Interaction', 'User Experience', 'User Experience for Digital Immersive Technology'];
        $SoftwareEngineeringCourse = ['Pattern Software Design', 'Agile Software Development', 'Code Reengineering'];

        foreach($interactiveMultimediaCourse as $course) {
            Course::create([
                'name' => $course,
                'description' => $faker->paragraph($nbSentence=8),
                'category_id' => $cat1->id,
                'writer_id' => $faker->randomElement($cat1Writer)
            ]);
        }

        foreach($SoftwareEngineeringCourse as $course) {
            Course::create([
                'name' => $course,
                'description' => $faker->paragraph($nbSentence=8),
                'category_id' => $cat2->id,
                'writer_id' => $faker->randomElement($array=$cat2Writer)
            ]);
        }

    }
}
