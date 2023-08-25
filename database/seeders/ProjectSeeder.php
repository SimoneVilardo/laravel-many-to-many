<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 11; $i++) {
            $project = new Project();

            $project->title = $faker->sentence(3);
            $project->content = $faker->text(500);
            $project->slug = $project->generateSlug($project->title);
            $project->image = $faker->imageUrl(640, 480, 'project', true);

            $project->save();
        }
    }
}