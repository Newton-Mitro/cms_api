<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

class SocialMediaTypeSeeder extends Seeder {
    
    public function run() {
        $social_medias = array("Facebook", "Youtube", "LinkedIn", "Twitter", "Pinterest", "Github");

        foreach ($social_medias as $social_media) {
            DB::table('social_media_types')->insert([
                'social_media_type_name' => $social_media,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
    }
}
