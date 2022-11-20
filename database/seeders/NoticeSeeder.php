<?php

namespace Database\Seeders;

use Exception;
use App\Models\Notice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoticeSeeder extends Seeder
{
    public function run()
    {
        try {
            Notice::factory(25)->create();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
