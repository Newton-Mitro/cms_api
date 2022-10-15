<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  04-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Database seeder service center types
 *========================================================================**/

class ServiceCenterTypeSeeder extends Seeder {
    
    public function run() {
        $service_center_types = array("Head Office", "Service Center", "Collection Point");

        foreach ($service_center_types as $service_center_type) {
            DB::table('service_center_types')->insert([
                'service_center_type' => $service_center_type,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
    }
}
