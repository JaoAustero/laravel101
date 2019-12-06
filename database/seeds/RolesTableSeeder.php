<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'System Administrator',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'name' => 'Moderator',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'name' => 'Writter',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],
            
            [
                'name' => 'Viewer',
                'description' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
