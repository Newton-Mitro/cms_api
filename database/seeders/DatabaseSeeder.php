<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\StaffSeeder;
use Database\Seeders\PostTypeSeeder;
use Database\Seeders\StaffTypeSeeder;
use Database\Seeders\SocialMediaTypeSeeder;
use Database\Seeders\StaffSocialLinkSeeder;
use Database\Seeders\ApplicationStageSeeder;
use Database\Seeders\ServiceCenterTypeSeeder;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Database main seeder file
 *========================================================================**/

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call([
            UserSeeder::class,
            StaffTypeSeeder::class,
            SocialMediaTypeSeeder::class,
            ServiceCenterTypeSeeder::class,
            ApplicationStageSeeder::class,
            PostTypeSeeder::class,

            // MenuSeeder::class,
            // PostSeeder::class,
            // EventSeeder::class,
            // StaffSeeder::class,
            // StaffSocialLinkSeeder::class,
        ]);
    }
}
