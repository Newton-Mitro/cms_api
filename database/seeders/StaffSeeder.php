<?php

namespace Database\Seeders;

use Faker\Factory;
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

class StaffSeeder extends Seeder
{
    function generateHtml($title)
    {
        $faker = Factory::create();
        $paragraphs = $faker->paragraphs(rand(2, 10));
        $postcontent = "";
        foreach ($paragraphs as $para) {
            $postcontent .= "<p>{$para}</p>";
        }
        return $postcontent;
    }

    public function run()
    {
        // Office Bearers
        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Pankaj Gilbert Costa',
            'staff_designation' => 'President',
            'staff_type_id' => 1,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Albert Asish Biswas',
            'staff_designation' => 'Vice-President',
            'staff_type_id' => 1,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Ignatious Hemanta Corraya',
            'staff_designation' => 'Secretary',
            'staff_type_id' => 1,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Peter Ratan Corraya',
            'staff_designation' => 'Treasurer',
            'staff_type_id' => 1,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        // Board Of Directors
        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Papiya Riberu',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Ananda Philip Palma',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Solomon I. Rozario',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Prottesh Rangsa',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Papri Patricia Areng',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Monica Gomes',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Sajal Joseph Gomes',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Pallab Linus D’ Rozario',
            'staff_designation' => 'BOARD OF DIRECTOR',
            'staff_type_id' => 2,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        // Credit Committee
        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Sukumar Lenus Cruze',
            'staff_designation' => 'CHAIRMAN',
            'staff_type_id' => 3,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Subrata Richard Rozario',
            'staff_designation' => 'SECRETARY',
            'staff_type_id' => 3,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Antor Mankhin',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 3,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Lawrence Peter Gomes',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 3,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Uma Magdaline Gomes',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 3,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);


        // Supervisory Committee
        DB::table('staffs')->insert([
            'staff_name' => 'Mr. John Gomes',
            'staff_designation' => 'CHAIRMAN',
            'staff_type_id' => 4,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Prionto C. Costa',
            'staff_designation' => 'SECRETARY',
            'staff_type_id' => 4,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Stella Hazra',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 4,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Mr. Barnard Pankaj D’ Rozario',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 4,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);

        DB::table('staffs')->insert([
            'staff_name' => 'Ms. Madhabi Anita Gomes',
            'staff_designation' => 'MEMBER',
            'staff_type_id' => 4,
            'about_the_staff' => generateHtml(''),
            'staff_image' => '/public/cat.jpg',
        ]);
    }
}
