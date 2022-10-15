<?php

namespace Database\Seeders;

use App\Models\User;
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

class UserSeeder extends Seeder {

    public function run() {
        User::factory(5)->create();
    }
}
