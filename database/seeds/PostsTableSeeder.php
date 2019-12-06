<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Every day carry',
                'category_id' => 1,
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum porro perferendis saepe, obcaecati illo ab doloribus molestiae ipsa voluptates rem?',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'title' => 'Minimalist lifestyle',
                'category_id' => 2,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima labore temporibus mollitia alias adipisci aliquid deserunt consequatur cumque cum a.',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'title' => 'Good Habit',
                'category_id' => 3,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat labore facere distinctio repellat hic, soluta mollitia voluptatem assumenda quibusdam incidunt.',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'title' => 'Distraction is your enemy',
                'category_id' => 3,
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sint nisi quia in molestias aliquam. Soluta alias magnam voluptates earum.',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'title' => 'Summer vacation',
                'category_id' => 4,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta omnis voluptatum, dolore voluptas enim quasi praesentium distinctio nisi architecto? Molestias?',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],

            [
                'title' => 'Redemption city',
                'category_id' => 4,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at tenetur cumque quod minus repellendus odio ducimus quae hic veritatis?',
                'is_active' => 1,
                'created_at' => now(),
                'created_by' => 1,
            ],
        ]);
    }
}
