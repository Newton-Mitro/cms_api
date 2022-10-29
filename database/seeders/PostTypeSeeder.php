<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  3-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  PostType seeder 
 *========================================================================**/

class PostTypeSeeder extends Seeder {

    public function run() {
        $post_types = array(
            "Page", "Deposit Product", "Loan Product", "Service", "Project", "Notification", "News", "Policy", "AGM Report" ,"Post"
        );

        foreach ($post_types as $post_type) {
            DB::table('post_types')->insert([
                'post_type_name' => $post_type,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
    }
}
