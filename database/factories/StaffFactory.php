<?php

namespace Database\Factories;

use App\Models\Staff;
use App\Models\StaffType;
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

class StaffFactory extends Factory {

    protected $model = Staff::class;

    public function definition() {
        $slug = $this->faker->realText(10);

        $paragraphs = $this->faker->paragraphs(rand(2, 6));
        $about = "<h1>{$slug}</h1>";
        foreach ($paragraphs as $para) {
            $about .= "<p>{$para}</p>";
        }

        return [
            'staff_name' => $this->faker->name(),
            'staff_designation' =>  $this->faker->jobTitle(),
            'staff_type_id' => function () {
                return StaffType::all()->random();
            },
            'about_the_staff' => $about,
            'staff_image' => base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII='),
        ];
    }
}
