// app/database/seeds/LeagueTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\League;
use Carbon\Carbon;

class LeagueTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('leagues')->insert([
        'LName'    => 'Laliga',
        'country' => ('spain'),
        'desc' => ("This is the 2nd best league and played in spain"),
        'image' => 'leagues\December2018\1.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('leagues')->insert([
        'LName'    => 'English Premiere League',
        'country' => ('England'),
        'image' => 'leagues\December2018\2.jpg',
        'desc' => ("This is the best league in the world and played in england"),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('leagues')->insert([
        'LName'    => 'Serie A',
        'country' => ('Italy'),
        'image' => 'leagues\December2018\3.jpg',
        'desc' => ("This is the 3rd best league in the world and played in italy"),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('leagues')->insert([
        'LName'    => 'Ligue 1',
        'country' => ('French'),
        'image' => 'leagues\December2018\4.png',
        'desc' => ("This is the 4th best league and played in france"),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('leagues')->insert([
        'LName'    => 'Uefa Champions League',
        'country' => ('Whole Europe'),
        'image' => 'leagues\December2018\5.jpg',
        'desc' => ("This is the TOP league in the footballic world and played across EUROPE"),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('leagues')->insert([
        'LName'    => 'Bundesliga',
        'country' => ('Germany'),
        'image' => 'leagues\December2018\6.png',
        'desc' => ("This is one of the best league in the world and played in Germany"),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
    
    
}

}