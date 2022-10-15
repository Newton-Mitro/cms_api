<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'post_image' => base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII='),
            'post_type_id' => function () {
                return PostType::all()->random();
            },
        ];
    }
}
