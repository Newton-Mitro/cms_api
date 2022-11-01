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

class ServiceCenterSeeder extends Seeder
{

    public function run()
    {
        // Head Offices
        DB::table('service_centers')->insert([
            'service_center_name'       => 'Head Office',
            'address'                   => 'Rev. Fr. Charles J. Young Bhaban, 173/1/A, East Tejturi Bazar, Tejgaon, Dhaka-1215.',
            'phone_number'              => '02-9123764, 02-9139901-2, 02-58152640, 02-58153316',
            'fax'                       => '88-02-9143079',
            'email'                     => 'info@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 1,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Head Office – Extension',
            'address'                   => 'Tejgaon Church Community Center, 9, Tejkunipara, Tejgaon, Dhaka-1215.',
            'phone_number'              => '',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 1,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        // Service Centers
        DB::table('service_centers')->insert([
            'service_center_name'       => 'Luxmibazar Service Center',
            'address'                   => '61/1, Subash Bose Avenue, Community Center Bhaban, Luxmibazar.',
            'phone_number'              => '01709-815409',
            'fax'                       => '',
            'email'                     => 'lorence.rozario@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Lawrence Kajal Rozario',
            'in_charge_designation'     => 'Manager',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Mirpur Service Center',
            'address'                   => '32/5, Senpara Porbota, Mirpur-10, Dhaka-1216.',
            'phone_number'              => '01709-815417',
            'fax'                       => '',
            'email'                     => 'shilpi.costa@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Shilpi A.D. Costa',
            'in_charge_designation'     => 'Assistant Manager-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Nadda Service Center',
            'address'                   => 'Ka-23/3/B, Joar Shahara Nadda, Dhaka-1212.',
            'phone_number'              => '01709-993086',
            'fax'                       => '',
            'email'                     => 'prodip.das@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Prodip L. Das',
            'in_charge_designation'     => 'Assistant Manager-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Savar Service Center',
            'address'                   => 'Nirmol Rozario Complex, B 45/11, East Rajason, Berulia Road, Savar, Dhaka.',
            'phone_number'              => '01709-815433',
            'fax'                       => '',
            'email'                     => 'milton.penheiro@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Milton Penheiro',
            'in_charge_designation'     => 'Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Pagar Service Center',
            'address'                   => '128, Kobi Joshimuddin Road, Pagar Tongi ,Gazipur.',
            'phone_number'              => '01709-815462',
            'fax'                       => '',
            'email'                     => 'sajal.cruze@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Shajal Joseph Cruze',
            'in_charge_designation'     => 'Senior Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Shadhanpara Service Center',
            'address'                   => '8/ka, East Razabazar, SadhanPara, Sher-E-Bangla',
            'phone_number'              => '01709-815416',
            'fax'                       => '',
            'email'                     => 'jhuma.rebeiro@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Jhuma Rebeiro',
            'in_charge_designation'     => 'Manager',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Monipuripara Service Center',
            'address'                   => '88/5, MonipuriPara, Dhaka.',
            'phone_number'              => '01709-815408',
            'fax'                       => '',
            'email'                     => 'profullah.rozario@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Profullah Linus Rozario',
            'in_charge_designation'     => 'Manager',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Hasnabad Service Center',
            'address'                   => 'Jonas Rozario Bhaban, Hasnabad, Nowabganj, Dhaka.',
            'phone_number'              => '01709-815423',
            'fax'                       => '',
            'email'                     => 'james.anjous@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'James Anjous',
            'in_charge_designation'     => 'Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Tumilia Service Center',
            'address'                   => 'Tumilia, Kaliganj, Gazipur.',
            'phone_number'              => '01709-815424',
            'fax'                       => '',
            'email'                     => 'joyanti.rozario@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Jayanti Rozario',
            'in_charge_designation'     => 'Senior Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Solpur Service Center',
            'address'                   => '57, Komola Super Market,(Ground Floor), Vill: Solepur, Dist: Munshiganj.',
            'phone_number'              => '01709-815434',
            'fax'                       => 'jani.rodricks@cccul.com',
            'email'                     => '',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Jani Lew Rodricks',
            'in_charge_designation'     => 'Junior Officer',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Mohakhali Service Center',
            'address'                   => 'Ka-115/1, South Mohakhali, Gulshan, Dhaka.',
            'phone_number'              => '01553-388210',
            'fax'                       => '',
            'email'                     => 'muriel.corraya@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Muriel Corraya',
            'in_charge_designation'     => 'Senior Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Nagori Service Center',
            'address'                   => 'Tripti Super Market, Nagori, Kaligonj, Gazipur.',
            'phone_number'              => '01709-815452',
            'fax'                       => '',
            'email'                     => 'shishir.bairagi@cccul.com',
            'work_days'                 => '',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => 'Shishir Bairagi',
            'in_charge_designation'     => 'Assistant Officer-Incharge',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 2,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        // Collection Booths
        DB::table('service_centers')->insert([
            'service_center_name'       => 'Mohammadpur',
            'address'                   => 'Oblet Delegation House, 24/A, Asad Avenue, Mohammadpur, Dhaka',
            'phone_number'              => '01709815412',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Saturday, Sunday & Last day of Month',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Vatara',
            'address'                   => 'Gramp Supermarket, Dag no-1277,1278 Vatara, Dhaka',
            'phone_number'              => '01709815413',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Tuesday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Kafrul',
            'address'                   => 'St. Lawrence Church Community Center, South Kafrul, Dhaka-1206.',
            'phone_number'              => '01709815412',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Monday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Uttara',
            'address'                   => 'Believers Church, Road & House-02, Sector-06, Uttara, Dhaka',
            'phone_number'              => '01709815413',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Sunday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Moghbazar',
            'address'                   => 'Dhaka Christian Bohumukhi Samabay Samity, (2nd Floor) 370, Dilu Road, Moghbazar, Dhaka.',
            'phone_number'              => '01709815412',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Thursday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Motijheel',
            'address'                   => 'Notre Dame College Motijheel, Dhaka.',
            'phone_number'              => '01709815412',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Last 2 days of the Month',
            'opening_time'              => '10 : 00 am',

            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Kakrail',
            'address'                   => 'Soroniketon, MG House, Karkrail, Dhaka',
            'phone_number'              => '01709815412',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => '2nd Saturday of the Month',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Dholpur',
            'address'                   => 'Telego Community school, 14,Outfazz, Dholpur, Dhaka.',
            'phone_number'              => '01709815409',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => '2nd Saturday of Month',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Narayanganj',
            'address'                   => 'St. Pauls Catholic Church, BB Road, Narayanganj.',
            'phone_number'              => '01709815409',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Friday & Saturday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Modonpur',
            'address'                   => 'Peter Bhaban, Muradpur, Modonpur, Bondor, Narayanganj',
            'phone_number'              => '01709815448',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Saturday to Thursday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Jirani ',
            'address'                   => 'Jesu Kormi Kendro (Sub-Parish), Dokhin Pani Sail, Moonmoon Road, Jirani, BKSP, Joydebpur, Gazipur.',
            'phone_number'              => '01709993086',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Friday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Komlapur (Savar)',
            'address'                   => '129, Komlapur, Savar, Dhaka.',
            'phone_number'              => '01709993086',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Sunday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Mothbari',
            'address'                   => 'Mothbari Khudro Bebsayi Somobay Somiti Ltd., Kaliganj, Gazipur.',
            'phone_number'              => '',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Sunday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Bhadun',
            'address'                   => 'Bhadun Christian Co-operative Credit Union Ltd., Bhadun, Pubail, Gazipur.',
            'phone_number'              => '',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Tuesday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Tuital',
            'address'                   => 'Tuital Parish Old Girls School, Tuital, Dhaka.',
            'phone_number'              => '01709815423',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Monday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Golla',
            'address'                   => 'Golla CCCUL Office, (Ground Floor), Golla, Nobabganj, Dhaka.',
            'phone_number'              => '01709815423',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Saturday & Sunday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Rangamatia',
            'address'                   => 'Rangamatia CCCUL, Kaliganj, Gazipur.',
            'phone_number'              => '01709815424',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Tuesday & Friday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Doripara',
            'address'                   => 'Doripara CCCU Ltd. Office, Doripara, Kaliganj, Gazipur.',
            'phone_number'              => '01709815424',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Every Thursday',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Mausaid',
            'address'                   => 'Mausaid CCCUL, Uttarkhan, Dhaka.',
            'phone_number'              => '01709815462',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'First & Last Saturday of Month',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);

        DB::table('service_centers')->insert([
            'service_center_name'       => 'Harbaid',
            'address'                   => 'Harbaid CCCUL, Pubail, Gazipur.',
            'phone_number'              => '01709815462',
            'fax'                       => '',
            'email'                     => '',
            'work_days'                 => 'Second & Last Wednesday of Month.',
            'opening_time'              => '10 : 00 am',
            'closing_time'              => '01 : 00 pm',
            'acting_in_charge'          => '',
            'in_charge_designation'     => '',
            'latitude'                  => '',
            'longitude'                 => '',
            'service_center_type_id'    => 3,
            "created_at"                => \Carbon\Carbon::now(),
            "updated_at"                => \Carbon\Carbon::now(),
        ]);
    }
}
