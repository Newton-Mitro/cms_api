<?php

namespace Database\Factories;

use App\Models\SocialMediaType;
use App\Models\Staff;
use App\Models\StaffSocialLink;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffSocialLinkFactory extends Factory
{
    protected $model = StaffSocialLink::class;

    public function definition()
    {
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
