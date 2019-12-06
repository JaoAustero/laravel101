<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Essentials',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'name' => 'Lifestyle',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'name' => 'Self Improvement',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'name' => 'Vacation',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
