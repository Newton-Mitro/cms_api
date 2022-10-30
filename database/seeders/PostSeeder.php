<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class PostSeeder extends Seeder {

    public function run() {


        function generateHtml($title) {
            $faker = Factory::create();
            $paragraphs = $faker->paragraphs(rand(2, 10));
            $postcontent = "<h1>{$title}</h1>";
            foreach ($paragraphs as $para) {
                $postcontent .= "<p>{$para}</p>";
            }
            return $postcontent;
        }

        $image ="";

        DB::table('posts')->insert([
            'post_slug' => Str::slug('About Us', '-'),
            'post_title' => 'About Us',
            'post_content' => generateHtml('About Us'),
            // 'post_image' => $image,
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Brief Summery', '-'),
            'post_title' => 'Brief Summery',
            'post_content' => generateHtml('Brief Summery'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Founder\'s Profile', '-'),
            'post_title' => 'Founder\'s Profile',
            'post_content' => generateHtml('Founder Profile'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('President Message', '-'),
            'post_title' => 'President Message',
            'post_content' => generateHtml('President Message'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Our Story', '-'),
            'post_title' => 'Our Story',
            'post_content' => generateHtml('Our Story'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Mission & Vision', '-'),
            'post_title' => 'Mission & Vision',
            'post_content' => generateHtml('Mission & Vision'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Core Values', '-'),
            'post_title' => 'Core Values',
            'post_content' => generateHtml('Core Values'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Achievements', '-'),
            'post_title' => 'Achievements',
            'post_content' => generateHtml('Achievements'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_slug' => Str::slug('Women\'s Activity', '-'),
            'post_title' => 'Women\'s Activity',
            'post_content' => generateHtml('Women\'s Activity'),
            'post_image' => '/public/cat.jpg',
            'post_type_id' => 1,
        ]);

    

        try {
            Post::factory(250)->create();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
