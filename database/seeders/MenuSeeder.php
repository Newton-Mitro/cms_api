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
            'link_to' => '/',
            'icon' => 'fa-solid fa-house-chimney',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'About',
            'link_to' => null,
            'icon' => 'fa-solid fa-circle-question',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'About Us',
            'link_to' => 'posts/post-slug/About Us',
            'icon' => 'fa-solid fa-circle-question',
            'parent_id' => 2,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Brief Summery',
            'link_to' => 'posts/post-slug/Brief Summery',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Founder\'s Profile',
            'link_to' => 'posts/post-slug/Founder\'s Profile',
            'icon' => 'fa-duotone fa-bullseye-arrow',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'President Message',
            'link_to' => 'posts/post-slug/President Message',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Our Story',
            'link_to' => 'posts/post-slug/Our Story',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Mission & Vision',
            'link_to' => 'posts/post-slug/Mission & Vision',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Core Values',
            'link_to' => 'posts/post-slug/Core Values',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Achievements',
            'link_to' => 'posts/post-slug/Achievements',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Women\'s Activity',
            'link_to' => 'posts/post-slug/Women\'s Activity',
            'icon' => '',
            'parent_id' => 3,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Board Members',
            'link_to' => 'posts/post-slug/Board Members',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 2,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Office Bearer',
            'link_to' => 'posts/post-slug/Office Bearer',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 12,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Board of Directors',
            'link_to' => 'posts/post-slug/Board of Directors',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 12,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Credit Committee',
            'link_to' => 'posts/post-slug/Credit Committee',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 12,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Supervisory Committee',
            'link_to' => 'posts/post-slug/Supervisory Committee',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 12,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Our Policies',
            'link_to' => 'posts/post-slug/Our Policies',
            'icon' => '',
            'parent_id' => 2,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'AGM Reports',
            'link_to' => 'posts/post-slug/AGM Reports',
            'icon' => '',
            'parent_id' => 2,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Products',
            'link_to' => null,
            'icon' => 'fa-sharp fa-solid fa-piggy-bank',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Deposit Products',
            'link_to' => 'posts/post-types/Deposit Products',
            'icon' => 'fa-sharp fa-solid fa-piggy-bank',
            'parent_id' => 19,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Loan Products',
            'link_to' => 'posts/post-types/Loan Products',
            'icon' => 'fa-sharp fa-solid fa-piggy-bank',
            'parent_id' => 19,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Projects',
            'link_to' => 'posts/post-types/Projects',
            'icon' => 'fa-solid fa-address-book',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Service',
            'link_to' => 'posts/post-types/Service',
            'icon' => 'fa-solid fa-briefcase',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Career',
            'link_to' => 'job-circulars',
            'icon' => 'fa-solid fa-address-book',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Notices',
            'link_to' => 'posts/post-types/notice',
            'icon' => 'fa-solid fa-address-book',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'menu_name' => 'Contact',
            'link_to' => 'service-centers',
            'icon' => 'fa-solid fa-address-book',
            'parent_id' => 0,
            'admin_menu' => false,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
    }
}
