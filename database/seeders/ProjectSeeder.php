<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Project 1',
                'description' => 'This is project 1',
            ],
            [
                'title' => 'Project 2',
                'description' => 'This is project 2',
            ],
            [
                'title' => 'Project 3',
                'description' => 'This is project 3',
            ],
        ];

        //insert posts into the database
        foreach ($projects as $project) {
            DB::table('projects')->insert([
                'title' => $project['title'],
                'description' => $project['description'],
            ]);
        }
    }
}
