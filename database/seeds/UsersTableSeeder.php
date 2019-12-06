<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'email' => 'system.admin@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'role_id' => 2,
                'email' => 'system.moderator@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'role_id' => 3,
                'email' => 'writter1@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'role_id' => 3,
                'email' => 'writter2@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'role_id' => 3,
                'email' => 'writter3@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'role_id' => 4,
                'email' => 'viewer@gigamare.com',
                'password' => bcrypt('secret'),
                'is_enabled' => 1,
                'is_activated' => 1,
                'timezone' => 'UTC',
                'api_token' => Str::random(80),
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
