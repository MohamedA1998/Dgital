<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $category = Category::all();

        Project::factory()->count(15)->make()->each(function ($project) use ($category) {
            $project->category_id   = $category->random()->id;
            $project->save();
        });
    }
}
