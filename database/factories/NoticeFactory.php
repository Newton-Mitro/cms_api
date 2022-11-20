<?php

namespace Database\Factories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeFactory extends Factory
{
    protected $model = Notice::class;

    public function definition()
    {
        $title = $this->faker->words(3, true);
        $paragraphs = $this->faker->paragraphs(rand(2, 10));
        $notice = "<h1>{$title}</h1>";
        foreach ($paragraphs as $para) {
            $notice .= "<p>{$para}</p>";
        }

        return [
            'notice_title' => $title,
            'notice_details' => $notice,
            'notice_image' => '/public/cat.jpg',
        ];
    }
}
