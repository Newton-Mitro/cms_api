<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
