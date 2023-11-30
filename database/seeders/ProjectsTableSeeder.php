<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use App\Functions\Helper;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [

            [
                'title' => 'Laravel Boolfolio',
                'slug' => 'laravel-boolfolio',
                'description' => 'Descrizione del progetto Boolfolio',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title' => 'Laravel Placeholder',
               'slug' => 'laravel-boolfolio',
                'description' => 'Descrizione del progetto Boolfolio',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'Laravel DC Comics',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'Laravel Boolando',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'PHP ToDo List',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'PHP Strong Password',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'Midterm Project',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ],

            [
                'title'=> 'Final Project',
                'description' => 'Descrizione del progetto DC Comics',
                'image' => 'https://placehold.co/600x400',
                'github_link' => 'link-al-repository-su-GitHub',
                'other_developers' => '',
            ]

        ];
        /* $data = ['Laravel Boolfolio', 'Laravel DC Comics', 'Laravel Boolando', 'PHP ToDo List ', 'PHP Strong Password', 'Midterm Project', 'Vite Boolando', 'Vue Slider', 'Social Posts']; */
        foreach ($data as $item) {

            $new_project = new Project();
            $new_project->title = $item['title'];
            $new_project->slug = Str::slug($item['title'], '-');
            $new_project->description = $item['description'];
            $new_project->image = $item['image'];
            $new_project->github_link = $item['github_link'];
            $new_project->other_developers = $item['other_developers'];
            $new_project->save();

        }
    }

    }

