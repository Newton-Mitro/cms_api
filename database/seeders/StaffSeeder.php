<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

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

class StaffSeeder extends Seeder {

    public function run() {
        Staff::factory(100)->create();
    }
}
