<?php

namespace Database\Factories;

use App\Models\SocialMediaType;
use App\Models\Staff;
use App\Models\StaffSocialLink;
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

class StaffSocialLinkFactory extends Factory {

    protected $model = StaffSocialLink::class;

    public function definition() {
        return [
            'social_link' => $this->faker->url(),
            'staff_id' =>  function () {
                return Staff::all()->random();
            },
            'social_media_type_id' => function () {
                return SocialMediaType::all()->random();
            },
        ];
    }
}
