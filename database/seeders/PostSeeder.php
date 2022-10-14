<?php

namespace Database\Seeders;

use App\Models\Post;
use Exception;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        try{
            Post::factory(250)->create();
        }catch (Exception $ex){

        }
        
    }
}
