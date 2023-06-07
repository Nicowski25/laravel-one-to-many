<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->word();
            $project->description = $faker->sentence(10);
            $project->duration =  $faker->randomDigit();
            $project->status = 'inprogress';
            $project->start_date = $faker->date();
            $project->end_date = $faker->date();
            $project->save();
        }
    }
}
