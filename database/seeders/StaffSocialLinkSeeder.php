<?php

namespace Database\Seeders;

use App\Models\StaffSocialLink;
use Illuminate\Database\Seeder;

class StaffSocialLinkSeeder extends Seeder {

    public function run() {
        StaffSocialLink::factory(300)->create();
    }
}
