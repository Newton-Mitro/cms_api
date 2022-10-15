<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory {
    
    protected $model = Event::class;

    public function definition() {
        $slug = $this->faker->realText(10);

        $paragraphs = $this->faker->paragraphs(rand(2, 6));
        $event = "<h1>{$slug}</h1>";
        foreach ($paragraphs as $para) {
            $event .= "<p>{$para}</p>";
        }

        return [
            'event_title' => $this->faker->words(3, true),
            'event_date' =>  $this->faker->dateTimeBetween('-36 week', '+60 week'),
            'event_details' => $event,
            'event_image' => base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII='),
        ];
    }
}
