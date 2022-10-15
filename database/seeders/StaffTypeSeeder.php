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

class StaffTypeSeeder extends Seeder {
    
    public function run() {
        $staff_types = array("Office Bearers", "Board Of Directors", "Credit Committee", "Supervisory Committee", "Employee");

        foreach ($staff_types as $staff_type) {
            DB::table('staff_types')->insert([
                'staff_type_name' => $staff_type,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
    }
}
