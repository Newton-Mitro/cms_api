<?php

namespace Database\Seeders;

use App\Models\Event;
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

class EventSeeder extends Seeder {
    
    public function run() {
        Event::factory(50)->create();
    }
}
