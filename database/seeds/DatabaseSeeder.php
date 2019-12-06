<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding default data of roles' . PHP_EOL);
        $this->call(RolesTableSeeder::class);

        $this->command->info('Seeding default data of users' . PHP_EOL);
        $this->call(UsersTableSeeder::class);
        
        $this->command->info('Seeding default data of user profiles' . PHP_EOL);
        $this->call(UserProfilesTableSeeder::class);

        $this->command->info('Seeding default data of categories' . PHP_EOL);
        $this->call(CategoryTableSeeder::class);

        $this->command->info('Seeding default data of posts' . PHP_EOL);
        $this->call(PostsTableSeeder::class);

        $this->command->info('Seeding default data of media' . PHP_EOL);
        $this->call(MediaTableSeeder::class);
    }
}
