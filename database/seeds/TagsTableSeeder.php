<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Tag $tag)
    {
        $default_tags = collect([
            [
                'name' => 'front-end',
                'description' => 'Front-end development related stuff: HTML, CSS, JS, UX/UI, etc.'
            ],
            [
                'name' => 'back-end',
                'description' => 'Front-end development related stuff: PHP, Ruby, databases, etc.'
            ],
            [
                'name' => 'HTML',
                'description' => 'HTML bits and bobs. Likely snippet related.'
            ],
            [
                'name' => 'CSS',
                'description' => 'CSS snippets most likely.'
            ],
            [
                'name' => 'JS',
                'description' => 'All things Javascript. Most likely me trying to learn ES2015.'
            ],
            [
                'name' => 'laravel',
                'description' => 'Laravel related material.'
            ],
            [
                'name' => 'thoughts',
                'description' => 'Quick thoughts. Most likely about development.'
            ],
            [
                'name' => 'changelog',
                'description' => 'The changelog of my site.'
            ],
            [
                'name' => 'project',
                'description' => 'My side projects. Most likely web apps I am building (hopefully).'
            ],
            [
                'name' => 'roadmap',
                'description' => 'Where I plan on going with something.'
            ],
        ]);
        $default_tags->each(function($default_tag) use ($tag) {
            $tag->create($default_tag);
        });
    }
}
