<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('posts')->insert([
    //         'title' => 'first post title',
    //         'body' => 'first post body'
    //     ]);
        
    $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('posts')->insert([
             'title' => $faker->sentence(5),
             'body' => $faker->paragraph(4)
            ]);

    }
}
}
