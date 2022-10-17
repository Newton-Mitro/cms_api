<?php

namespace Database\Factories;

use App\Models\Event;
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
            'event_image' => '/public/cat.jpg',
        ];
    }
}
