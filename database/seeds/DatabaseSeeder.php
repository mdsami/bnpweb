<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',

            'password' => bcrypt('admin'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);



        DB::table('police_division')->insert([



               [
                    'police_division_name' => 'উত্তর বিভাগ',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ],

                [
                    'police_division_name' => 'দক্ষিন বিভাগ',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            
                ]

        ]);




        DB::table('police_district')->insert([



                [
                    'division_id' => '1',
                    'area_id' => '1',
                    'division_id' => '1',
                    'zone_id' => '1',
                    'police_district_name' => 'ঢাকা',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ],
                [
                    'division_id' => '1',
                    'area_id' => '1',
                    'division_id' => '1',
                    'zone_id' => '1',
                    'police_district_name' => 'গাজীপুর',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ],
                [
                    'division_id' => '1',
                    'area_id' => '1',
                    'division_id' => '1',
                    'zone_id' => '1',
                    'police_district_name' => 'নারায়ণগঞ্জ',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ],
                [
                    'division_id' => '1',
                    'area_id' => '1',
                    'division_id' => '1',
                    'zone_id' => '1',
                    'police_district_name' => 'মুন্সিগঞ্জ',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ],
                [
                    'division_id' => '1',
                    'area_id' => '1',
                    'division_id' => '1',
                    'zone_id' => '1',
                    'police_district_name' => 'নরসিংদী',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                   
                ]




        ]);
    }
}
