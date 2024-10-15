<?php

namespace Database\Seeders;

use App\Models\CategoryBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryBlog::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence'
        ]);

        CategoryBlog::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        CategoryBlog::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui/ux-design'
        ]);

        CategoryBlog::create([
            'name' => 'Cybersecurity',
            'slug' => 'cybersecurity'
        ]);

        CategoryBlog::create([
            'name' => 'Blockchain',
            'slug' => 'blockchain'
        ]);

        CategoryBlog::create([
            'name' => 'Work Culture',
            'slug' => 'work-culture'
        ]);

        CategoryBlog::create([
            'name' => 'E-commerce',
            'slug' => 'e-commerce'
        ]);

        CategoryBlog::create([
            'name' => 'Marketing',
            'slug' => 'marketing'
        ]);

        CategoryBlog::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        CategoryBlog::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        CategoryBlog::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);

        CategoryBlog::create([
            'name' => 'Big Data',
            'slug' => 'big-data'
        ]);

        CategoryBlog::create([
            'name' => 'Development',
            'slug' => 'development'
        ]);

        CategoryBlog::create([
            'name' => 'Internet of Things',
            'slug' => 'internet-of-things'
        ]);

        CategoryBlog::create([
            'name' => 'Collaboration',
            'slug' => 'collaboration'
        ]);
    }
}
