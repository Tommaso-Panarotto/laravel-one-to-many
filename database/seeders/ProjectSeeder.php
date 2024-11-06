<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $project = new Project();
        $project->title = "BoolFlix";
        $project->author = "Tommaso-Panarotto";
        $project->language = "JS";
        $project->url = "https://github.com/Tommaso-Panarotto/vite-boolflix";
        $project->description = "Simulazione di una libreria stile netfl";
        $project->type_id = 1;
        $project->save();
    }
}
