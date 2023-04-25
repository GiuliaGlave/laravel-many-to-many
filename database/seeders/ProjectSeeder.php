<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use App\Models\Project;
use App\Models\Technology;

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
        $technologies= Technology::all()->pluck('id');
        
        for($i = 0; $i < 50; $i++){
            
            $project = new Project;

            $project->technology_id = $faker->randomElement($technologies);

            $project->title = $faker-> catchPhrase(50);
            $project->slug = Str::of($project->title)->slug('-');
            /*  $project->thumbnail = $faker->imageUrl(640, 480, 'homepage', true); */
            $project->details = $faker->paragraph(10);

            $project-> save();

        }

    }
}