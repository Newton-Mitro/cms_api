<?php

namespace Database\Seeders;

use App\Models\Post;
use Exception;
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

class PostSeeder extends Seeder {
    public function run() {
        try {
            Post::factory(250)->create();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
