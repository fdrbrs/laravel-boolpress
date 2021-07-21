<?php
use App\BlogPost;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $blogpost = new BlogPost();
            $blogpost->title = $faker->sentence();
            $blogpost->subtitle = $faker->paragraph();
            $blogpost->text = $faker->text();
            $blogpost->author = $faker->userName();
            $blogpost->date = $faker->dateTimeThisYear();
            $blogpost->image = $faker->imageUrl(640, 480, 'POST IMAGE', true);
        }
    }
}
