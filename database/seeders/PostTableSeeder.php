<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //Khoi tao doi tuong Faker
        $faker = Faker::create();
        //Chay vong lap xac dinh So ban ghi va Kieu du lieu tu Faker
        for($i=0;$i<50;$i++){
            DB::table('posts')->insert([
                'title' => $faker->sentence(6,true),
                'body' => $faker->paragraph(3,true)
            ]);
        }
    }
}
