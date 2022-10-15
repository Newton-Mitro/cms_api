<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder {

    public function run() {
        Staff::factory(100)->create();
    }
}
