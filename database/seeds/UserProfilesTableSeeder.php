<?php

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
            [
                'user_id' => 1,
                'first_name' => 'System',
                'last_name' => 'Administrator',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'user_id' => 2,
                'first_name' => 'System',
                'last_name' => 'Moderator',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'user_id' => 3,
                'first_name' => 'Jonas',
                'last_name' => 'Leupe',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'user_id' => 4,
                'first_name' => 'Korby',
                'last_name' => 'Powell',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'user_id' => 5,
                'first_name' => 'Rasheed',
                'last_name' => 'Kemy',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'user_id' => 6,
                'first_name' => 'Thompson',
                'last_name' => 'Venice',
                'contact_number' => null,
                'avatar_photo' => null,
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
