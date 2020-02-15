// app/database/seeds/TeamTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\Team;
use Carbon\Carbon;

class TeamTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('teams')->insert([
        'TName'    => 'FC Barcelona',
        'country' => ('spain'),
        'desc' => 'this is fc barcelona',
        'ratings'  => '8.9',
        'image' => 'teams\December2018\1.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('teams')->insert([
        'TName'    => 'Chelsea FC',
        'country' => ('England'),
        'desc' => 'this is Chelsea',
        'ratings'  => '7.1',
        'image' => 'teams\December2018\2.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('teams')->insert([
        'TName'    => 'Inter Milan',
        'country' => ('Italy'),
        'desc' => 'this is Inter Milan',
        'ratings'  => '8.6',
        'image' => 'teams\December2018\3.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('teams')->insert([
        'TName'    => 'Manchester United',
        'country' => ('England'),
        'desc' => 'this is Manchester United',
        'ratings'  => '6.6',
        'image' => 'teams\December2018\4.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);
    

    DB::table('teams')->insert([
        'TName'    => 'Real Madrid',
        'country' => ('Spain'),
        'desc' => 'this is Real Madrid',
        'ratings'  => '7.9',
        'image' => 'teams\December2018\5.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

    DB::table('teams')->insert([
        'TName'    => 'Manchester City',
        'country' => ('England'),
        'desc' => 'this is Manchester City',
        'ratings'  => '7.7',
        'image' => 'teams\December2018\6.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]); 

    DB::table('teams')->insert([
        'TName'    => 'Crystal Palace',
        'country' => ('England'),
        'desc' => 'this is Crystal Palace',
        'ratings'  => '5.7',
        'image' => 'teams\December2018\7.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);    

DB::table('teams')->insert([
        'TName'    => 'Ac Milan',
        'country' => ('Italy'),
        'desc' => 'this is Ac Milan',
        'ratings'  => '6.7',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'image' => 'teams\December2018\8.png',

    ]);    


DB::table('teams')->insert([
        'TName'    => 'Bayern Munich',
        'country' => ('Germany'),
        'desc' => 'this is Bayern Munich',
        'image' => 'teams\December2018\9.png',
        'ratings'  => '8.7',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);    

DB::table('teams')->insert([
        'TName'    => 'Burasia Dortmund',
        'country' => ('Germany'),
        'desc' => 'this is Burasia Dortmund',
        'ratings'  => '7.5',
        'image' => 'teams\December2018\10.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);   


DB::table('teams')->insert([
        'TName'    => 'Liverpool',
        'country' => ('England'),
        'desc' => 'this is Liverpool',
        'ratings'  => '7.9',
        'image' => 'teams\December2018\11.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);   

DB::table('teams')->insert([
        'TName'    => 'Athletico Madrid',
        'country' => ('Spain'),
        'desc' => 'this is Athletico Madrid',
        'ratings'  => '6.9',
        'image' => 'teams\December2018\12.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);   

DB::table('teams')->insert([
        'TName'    => 'Valencia',
        'country' => ('Spain'),
        'desc' => 'this is Valencia',
        'ratings'  => '5.9',
        'image' => 'teams\December2018\13.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);  

DB::table('teams')->insert([
        'TName'    => 'Juventus',
        'country' => ('Italy'),
        'desc' => 'this is Juventus',
        'ratings'  => '8.9',
        'image' => 'teams\December2018\14.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);  

DB::table('teams')->insert([
        'TName'    => 'PSG',
        'country' => ('France'),
        'desc' => 'this is PSG',
        'ratings'  => '9.1',
        'image' => 'teams\December2018\15.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);  


DB::table('teams')->insert([
        'TName'    => 'Fc Schalke',
        'country' => ('Germany'),
        'desc' => 'this is Schalke',
        'ratings'  => '5.2',
        'image' => 'teams\December2018\16.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

DB::table('teams')->insert([
        'TName'    => 'Roma',
        'country' => ('Italy'),
        'desc' => 'this is Roma',
        'ratings'  => '5.9',
        'image' => 'teams\December2018\17.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

DB::table('teams')->insert([
        'TName'    => 'Napoli',
        'country' => ('Italy'),
        'desc' => 'this is Napoli',
        'ratings'  => '6.1',
        'image' => 'teams\December2018\18.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]);

DB::table('teams')->insert([
        'TName'    => 'Sevilla',
        'country' => ('Spain'),
        'desc' => 'this is Sevilla',
        'ratings'  => '7.5',
        'image' => 'teams\December2018\19.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]); 

    DB::table('teams')->insert([
        'TName'    => 'Arsenal',
        'country' => ('England'),
        'desc' => 'this is Arsenal',
        'ratings'  => '6.5',
        'image' => 'teams\December2018\20.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


    ]); 
    
}

}