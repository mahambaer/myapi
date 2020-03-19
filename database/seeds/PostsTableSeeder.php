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
        $faker = \Faker\Factory::create();

        \App\User::all()->each(function ($user) use ($faker) {
            foreach(range(1, 5) as $i) {
                \App\Post::create([
                    'user_id' => $user->id,
                    'title' => $faker->sentence,
                    'content' => $faker->paragraphs(3, true)
                ]);
            }
        });
    }
}
