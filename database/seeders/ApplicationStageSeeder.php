<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Isrfil
 * @updatedBy      :  Newton Mitro
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Application stage seeder
 *========================================================================**/

class ApplicationStageSeeder extends Seeder {
    
    public function run() {
        $application_stages = array("Applied", "Rejected/Canceled", "Selected For Interview", "Called For Interview", "Agreed To Join");

        foreach ($application_stages as $application_stage) {
            DB::table('application_stages')->insert([
                'stage_name' => $application_stage,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
    }
}
