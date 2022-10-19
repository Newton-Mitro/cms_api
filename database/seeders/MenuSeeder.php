<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  MenuSeeder 
 *========================================================================**/

class MenuSeeder extends Seeder {
    
    public function run() {
        DB::table('menus')->insert([
            'menu_name' => 'Home',
            'link_to' => 'home',
            'icon' => '',
            'parent_id' => 0,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'About',
            'link_to' => 'about',
            'icon' => '',
            'parent_id' => 0,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Mission',
            'link_to' => 'mission',
            'icon' => '',
            'parent_id' => 2,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Child Mission',
            'link_to' => 'child_mission',
            'icon' => '',
            'parent_id' => 3,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Vision',
            'link_to' => 'vision',
            'icon' => '',
            'parent_id' => 2,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Service',
            'link_to' => 'services',
            'icon' => '',
            'parent_id' => 0,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Products',
            'link_to' => 'products',
            'icon' => '',
            'parent_id' => 0,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Contact',
            'link_to' => 'contact',
            'icon' => '',
            'parent_id' => 0,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

        ]);
    }
}
