// app/database/seeds/LeagueTeamTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LeagueTeamTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('league_team')->insert([
        'league_id'    => '1',
        'team_id' => '1'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '1',
        'team_id' => '5'
    ]);
    
    DB::table('league_team')->insert([
        'league_id'    => '1',
        'team_id' => '12'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '1',
        'team_id' => '13'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '1',
        'team_id' => '19'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '2',
        'team_id' => '2'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '2',
        'team_id' => '4'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '2',
        'team_id' => '6'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '2',
        'team_id' => '7'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '2',
        'team_id' => '11'
    ]);
    

    DB::table('league_team')->insert([
        'league_id'    => '3',
        'team_id' => '3'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '3',
        'team_id' => '8'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '3',
        'team_id' => '14'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '3',
        'team_id' => '17'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '3',
        'team_id' => '18'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '4',
        'team_id' => '15'
    ]);
    DB::table('league_team')->insert([
        'league_id'    => '6',
        'team_id' => '9'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '6',
        'team_id' => '10'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '6',
        'team_id' => '16'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '1'
    ]);
    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '2'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '3'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '4'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '5'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '6'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '7'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '8'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '9'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '10'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '11'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '12'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '13'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '14'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '15'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '16'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '17'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '18'
    ]);

    DB::table('league_team')->insert([
        'league_id'    => '5',
        'team_id' => '19'
    ]);
}

}