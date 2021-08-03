<?php
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 21; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->body = $faker->text();
            $post->image = $faker->imageUrl(600, 300, 'Post', true, $post->title);
            $post->save();
        }
    }
}
