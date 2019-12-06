<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 1,
                'name' => 'jonas-leupe',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/jonas-leupe.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 2,
                'name' => 'rasheed-kemy',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/rasheed-kemy.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 3,
                'name' => 'roman-kraft',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/roman-kraft.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 4,
                'name' => 'taylor-simpson',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/taylor-simpson.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 5,
                'name' => 'mukuko-studio',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/mukuko-studio.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/Media',
                'mediable_id' => 6,
                'name' => 'nicolas-gonzalez',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/nicolas-gonzalez.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'mediable_type' => 'App/Models/UserProfile',
                'mediable_id' => 1,
                'name' => 'writter-2',
                'description' => null,
                'type' => 'image',
                'size' => 1000,
                'path' => '/static/writter-2.jpg',
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
