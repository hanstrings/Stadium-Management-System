// app/database/seeds/MatchTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Match;

class MatchTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '5',
        'dateandtime' => Carbon::parse('2018-12-25  6:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '1',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '1',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '12',
        'dateandtime' => Carbon::parse('2018-12-27  8:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '2',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '2',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '12',
        'team_2' => '13',
        'dateandtime' => Carbon::parse('2018-12-30  12:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '3',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '13',
        'match_id'    => '3',
    ]);
    
    DB::table('matches')->insert([
        'team_1'    => '5',
        'team_2' => '12',
        'dateandtime' => Carbon::parse('2018-12-30  1:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '4',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '4',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '5',
        'team_2' => '19',
        'dateandtime' => Carbon::parse('2019-1-2  16:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '5',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '19',
        'match_id'    => '5',
    ]);

DB::table('matches')->insert([
        'team_1'    => '12',
        'team_2' => '19',
        'dateandtime' => Carbon::parse('2019-1-4  19:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '19',
        'match_id'    => '6',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '6',
    ]);

DB::table('matches')->insert([
        'team_1'    => '13',
        'team_2' => '19',
        'dateandtime' => Carbon::parse('2019-1-7  1:00:00')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '13',
        'match_id'    => '7',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '19',
        'match_id'    => '7',
    ]);

DB::table('matches')->insert([
        'team_1'    => '5',
        'team_2' => '13',
        'dateandtime' => Carbon::parse('2018-12-24 22:37:17')->format('Y-m-d H:i:s'),
        'league_id' => ('1'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '8',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '13',
        'match_id'    => '8',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '4',
        'dateandtime' => Carbon::parse('2018-12-28 04:22:42')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '9',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '9',
    ]);
    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2018-12-29 12:00:18')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '10',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '10',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '4',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2019-01-12 04:46:46')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '11',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '11',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '4',
        'team_2' => '6',
        'dateandtime' => Carbon::parse('2019-01-29 14:24:28')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '12',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '6',
        'match_id'    => '12',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '6',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2019-1-9  11:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '6',
        'match_id'    => '13',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '13',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '11',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2018-12-21 11:03:09')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '14',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '14',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '11',
        'dateandtime' => Carbon::parse('2019-01-24 22:56:17')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '15',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '15',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '11',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2018-12-19 11:11:58')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '16',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '16',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '6',
        'team_2' => '11',
        'dateandtime' => Carbon::parse('2019-02-05 12:17:58')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '6',
        'match_id'    => '17',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '17',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '4',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2018-12-18 03:45:31')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '18',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '18',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '4',
        'dateandtime' => Carbon::parse('2019-02-01 08:57:12')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '19',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '19',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '7',
        'dateandtime' => Carbon::parse('2019-01-06 12:10:31')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '20',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '7',
        'match_id'    => '20',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '7',
        'team_2' => '20',
        'dateandtime' => Carbon::parse('2019-02-11 17:22:54')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '7',
        'match_id'    => '21',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '20',
        'match_id'    => '21',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '7',
        'team_2' => '11',
        'dateandtime' => Carbon::parse('2018-12-17 08:02:17')->format('Y-m-d H:i:s'),
        'league_id' => ('2'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '7',
        'match_id'    => '22',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '22',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '8',
        'dateandtime' => Carbon::parse('2019-01-20 09:39:11')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '23',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '8',
        'match_id'    => '23',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '14',
        'dateandtime' => Carbon::parse('2018-12-25 09:12:31')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '24',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '24',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '8',
        'team_2' => '18',
        'dateandtime' => Carbon::parse('2019-02-14 12:27:17')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '8',
        'match_id'    => '25',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '18',
        'match_id'    => '25',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '14',
        'team_2' => '18',
        'dateandtime' => Carbon::parse('2019-1-9  11:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '26',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '18',
        'match_id'    => '26',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '14',
        'dateandtime' => Carbon::parse('2019-02-06 23:30:48')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '27',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '27',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '8',
        'team_2' => '14',
        'dateandtime' => Carbon::parse('2019-01-19 18:39:30')->format('Y-m-d H:i:s'),
        'league_id' => ('3'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '8',
        'match_id'    => '28',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '28',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '9',
        'team_2' => '10',
        'dateandtime' => Carbon::parse('2019-01-07 19:42:41')->format('Y-m-d H:i:s'),
        'league_id' => ('6'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '9',
        'match_id'    => '29',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '10',
        'match_id'    => '29',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '9',
        'team_2' => '16',
        'dateandtime' => Carbon::parse('2018-12-30 15:06:06')->format('Y-m-d H:i:s'),
        'league_id' => ('6'),

    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '9',
        'match_id'    => '30',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '16',
        'match_id'    => '30',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '10',
        'team_2' => '16',
        'dateandtime' => Carbon::parse('2019-1-9  11:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('6'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '10',
        'match_id'    => '31',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '16',
        'match_id'    => '31',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '15',
        'team_2' => '18',
        'dateandtime' => Carbon::parse('2019-01-17 21:32:02')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '15',
        'match_id'    => '32',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '18',
        'match_id'    => '32',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '14',
        'dateandtime' => Carbon::parse('2019-1-9  11:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '33',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '33',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '5',
        'team_2' => '18',
        'dateandtime' => Carbon::parse('2019-01-18 19:24:44')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '34',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '18',
        'match_id'    => '34',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '8',
        'dateandtime' => Carbon::parse('2019-02-03 23:39:00')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '35',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '8',
        'match_id'    => '35',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '9',
        'dateandtime' => Carbon::parse('2019-01-13 15:19:12')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '36',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '9',
        'match_id'    => '36',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '4',
        'team_2' => '5',
        'dateandtime' => Carbon::parse('2019-01-07 13:14:46')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '37',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '37',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '7',
        'team_2' => '12',
        'dateandtime' => Carbon::parse('2019-02-15 04:13:48')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '7',
        'match_id'    => '38',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '38',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '10',
        'dateandtime' => Carbon::parse('2019-02-06 01:58:10')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '39',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '10',
        'match_id'    => '39',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '11',
        'dateandtime' => Carbon::parse('2019-01-20 20:53:45')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '40',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '11',
        'match_id'    => '40',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '12',
        'dateandtime' => Carbon::parse('2019-01-08 10:22:35')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '41',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '41',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '3',
        'team_2' => '13',
        'dateandtime' => Carbon::parse('2018-12-25 23:11:23')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '3',
        'match_id'    => '42',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '13',
        'match_id'    => '42',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '4',
        'team_2' => '14',
        'dateandtime' => Carbon::parse('2019-01-18 14:20:32')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);


    DB::table('match_team')->insert([
        'team_id' => '14',
        'match_id'    => '43',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '4',
        'match_id'    => '43',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '5',
        'team_2' => '15',
        'dateandtime' => Carbon::parse('2019-01-16 23:55:27')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '44',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '15',
        'match_id'    => '44',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '15',
        'team_2' => '18',
        'dateandtime' => Carbon::parse('2018-12-22 04:30:27')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '5',
        'match_id'    => '45',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '18',
        'match_id'    => '45',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '9',
        'dateandtime' => Carbon::parse('2019-2-8  7:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '46',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '9',
        'match_id'    => '46',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '2',
        'team_2' => '9',
        'dateandtime' => Carbon::parse('2019-2-10  1:30:00')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '2',
        'match_id'    => '47',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '9',
        'match_id'    => '47',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '12',
        'team_2' => '13',
        'dateandtime' => Carbon::parse('2019-01-04 18:39:44')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '48',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '13',
        'match_id'    => '48',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '12',
        'team_2' => '17',
        'dateandtime' => Carbon::parse('2019-01-04 18:39:44')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '12',
        'match_id'    => '49',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '17',
        'match_id'    => '49',
    ]);

    DB::table('matches')->insert([
        'team_1'    => '1',
        'team_2' => '17',
        'dateandtime' => Carbon::parse('2019-02-04 13:40:00')->format('Y-m-d H:i:s'),
        'league_id' => ('5'),

    ]);

    DB::table('match_team')->insert([
        'team_id' => '1',
        'match_id'    => '50',
    ]);
    
    DB::table('match_team')->insert([
        'team_id' => '17',
        'match_id'    => '50',
    ]);

    
}

}