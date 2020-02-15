// app/database/seeds/StadiumSectionTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\StadiumSection;
use Carbon\Carbon;

class SectionTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('sections')->insert([
        'sec_name'     => 'Gold',
        'price'    => '30',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('sections')->insert([
        'sec_name'     => 'Silver',
        'price'    => '20',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('sections')->insert([
        'sec_name'     => 'Diamond',
        'price'    => '50',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('sections')->insert([
        'sec_name'     => 'Basic',
        'price'    => '10',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);
    
    
}

}