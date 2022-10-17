<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

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

class PostFactory extends Factory {

    protected $model = Post::class;

    public function definition() {
        $slug = $this->faker->words(3, true);
        $paragraphs = $this->faker->paragraphs(rand(2, 6));
        $post = "<h1>{$slug}</h1>";
        foreach ($paragraphs as $para) {
            $post .= "<p>{$para}</p>";
        }

        return [
            'post_slug' => Str::slug($slug, '-'),
            'post_title' => $slug,
            'post_content' => $post,
            'post_image' => '/public/cat.jpg',
            'post_type_id' => function () {
                return PostType::all()->random();
            },
        ];
    }
}
