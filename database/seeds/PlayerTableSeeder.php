// app/database/seeds/PlayerTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\Player;
use Carbon\Carbon;

class PlayerTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('players')->insert([
        'PName'     => 'Leo Messi',
        'image' => 'players\December2018\1.jpg',
        'Pno'    => '10',
        'nationality'  => 'Argentine',
        'ratings'  => '10',
        'team_id'  => '1',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
    
    DB::table('players')->insert([
        'PName'     => 'Sergio busquets',
        'image' => 'players\December2018\2.jpg',
        'Pno'    => '5',
        'nationality'  => 'Spanish',
        'ratings'  => '9',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
    DB::table('players')->insert([
        'PName'     => 'Luis Suarez',
        'image' => 'players\December2018\3.jpg',
        'Pno'    => '9',
        'nationality'  => 'Uruguan',
        'ratings'  => '8.8',
        'team_id'  => '1',
        'position'  => 'Striker',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Pualo Dybala',
        'image' => 'players\December2018\4.jpg',
        'Pno'    => '10',
        'nationality'  => 'Argentine',
        'ratings'  => '8.9',
        'team_id'  => '14',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Marcelo',
        'image' => 'players\December2018\5.jpg',
        'Pno'    => '12',
        'nationality'  => 'Brazilian',
        'ratings'  => '9',
        'team_id'  => '5',
        'position'  => 'Left Back',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Marc Andre Ter Stegen',
        'image' => 'players\December2018\6.jpg',
        'Pno'    => '1',
        'nationality'  => 'German',
        'ratings'  => '9.1',
        'team_id'  => '1',
        'position'  => 'Goal Keeper',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Ousmane Dembele',
        'image' => 'players\December2018\8.jpg',
        'Pno'    => '11',
        'nationality'  => 'French',
        'ratings'  => '8.8',
        'team_id'  => '1',
        'position'  => 'Winger',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Arthur Melo',
        'image' => 'players\December2018\9.jpg',
        'Pno'    => '8',
        'nationality'  => 'Brazilian',
        'ratings'  => '8.1',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Gerard Pique',
        'image' => 'players\December2018\10.jpg',
        'Pno'    => '3',
        'nationality'  => 'Spanish',
        'ratings'  => '9',
        'team_id'  => '1',
        'position'  => 'Center Back',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Phillepe Coutinho',
        'image' => 'players\December2018\11.jpg',
        'Pno'    => '7',
        'nationality'  => 'Brazilian',
        'ratings'  => '8.7',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Lenglet',
        'image' => 'players\December2018\12.jpg',
        'Pno'    => '15',
        'nationality'  => 'French',
        'ratings'  => '7.6',
        'team_id'  => '1',
        'position'  => 'Center Back',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Rakitic',
        'image' => 'players\December2018\13.jpg',
        'Pno'    => '4',
        'nationality'  => 'Croatian',
        'ratings'  => '7.7',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Jordi Alba',
        'image' => 'players\December2018\12.jpg',
        'Pno'    => '18',
        'nationality'  => 'Spanish',
        'ratings'  => '8.9',
        'team_id'  => '1',
        'position'  => 'Left Back',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Samuel Umtiti',
        'image' => 'players\December2018\15.jpg',
        'Pno'    => '23',
        'nationality'  => 'French',
        'ratings'  => '8',
        'team_id'  => '1',
        'position'  => 'Center Back',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

    DB::table('players')->insert([
        'PName'     => 'Denis Suarez',
        'image' => 'players\December2018\16.jpg',
        'Pno'    => '6',
        'nationality'  => 'Spanish',
        'ratings'  => '7.7',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Luka Modric',
        'image' => 'players\December2018\17.jpg',
        'Pno'    => '10',
        'nationality'  => 'Croatiaian',
        'ratings'  => '8.7',
        'team_id'  => '5',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Gareth Bale',
        'image' => 'players\December2018\18.jpg',
        'Pno'    => '11',
        'nationality'  => 'Welsh',
        'ratings'  => '8.9',
        'team_id'  => '5',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Sergio Ramos',
        'image' => 'players\December2018\20.jpg',
        'Pno'    => '4',
        'nationality'  => 'Spanish',
        'ratings'  => '8.5',
        'team_id'  => '5',
        'position'  => 'Defender',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Karim Benzema',
        'image' => 'players\December2018\19.jpg',
        'Pno'    => '9',
        'nationality'  => 'French',
        'ratings'  => '7.7',
        'team_id'  => '5',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Isco',
        'image' => 'players\December2018\21.jpg',
        'Pno'    => '22',
        'nationality'  => 'Spanish',
        'ratings'  => '8.7',
        'team_id'  => '1',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Cristiano Ronaldo',
        'image' => 'players\December2018\28.jpg',
        'Pno'    => '7',
        'nationality'  => 'Portuguese ',
        'ratings'  => '9.7',
        'team_id'  => '14',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Leonardo Bonucci',
        'image' => 'players\December2018\29.jpg',
        'Pno'    => '19',
        'nationality'  => 'Italian',
        'ratings'  => '7.7',
        'team_id'  => '14',
        'position'  => 'Defender',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Douglas Costa',
        'image' => 'players\December2018\30.jpg',
        'Pno'    => '7',
        'nationality'  => 'Brazilian',
        'ratings'  => '7.5',
        'team_id'  => '14',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Kevin De Bruyne',
        'image' => 'players\December2018\52.jpg',
        'Pno'    => '	17',
        'nationality'  => 'Belgian',
        'ratings'  => '8.7',
        'team_id'  => '6',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Sergio Agüero',
        'image' => 'players\December2018\50.jpg',
        'Pno'    => '15',
        'nationality'  => 'Argentine',
        'ratings'  => '9.1',
        'team_id'  => '6',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Paul Pogba',
        'image' => 'players\December2018\47.jpg',
        'Pno'    => '15',
        'nationality'  => 'French',
        'ratings'  => '9.1',
        'team_id'  => '4',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Kylian Mbappé',
        'image' => 'players\December2018\48.jpg',
        'Pno'    => '10',
        'nationality'  => 'French',
        'ratings'  => '9.3',
        'team_id'  => '11',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Mohamed Salah',
        'image' => 'players\December2018\49.jpg',
        'Pno'    => '10',
        'nationality'  => 'Egyptian',
        'ratings'  => '9.4',
        'team_id'  => '15',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Arjen Robben',
        'image' => 'players\December2018\38.jpg',
        'Pno'    => '10',
        'nationality'  => 'Dutch',
        'ratings'  => '9.2',
        'team_id'  => '9',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'James Rodríguez',
        'image' => 'players\December2018\37.jpg',
        'Pno'    => '11',
        'nationality'  => 'Colombian',
        'ratings'  => '8.1',
        'team_id'  => '9',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Robert Lewandowski',
        'image' => 'players\December2018\40.jpg',
        'Pno'    => '9',
        'nationality'  => 'Polish',
        'ratings'  => '9.1',
        'team_id'  => '9',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Mesut Özil',
        'image' => 'players\December2018\57.jpg',
        'Pno'    => '10',
        'nationality'  => 'German',
        'ratings'  => '8.5',
        'team_id'  => '20',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Héctor Bellerín',
        'image' => 'players\December2018\60.jpg',
        'Pno'    => '2',
        'nationality'  => 'Spanish',
        'ratings'  => '8.1',
        'team_id'  => '20',
        'position'  => 'Defender',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Shkodran Mustafi',
        'image' => 'players\December2018\61.jpg',
        'Pno'    => '20',
        'nationality'  => 'German',
        'ratings'  => '7.1',
        'team_id'  => '20',
        'position'  => 'Defender',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Ivan Perišic',
        'image' => 'players\December2018\64.jpg',
        'Pno'    => '4',
        'nationality'  => 'Croatian',
        'ratings'  => '8.1',
        'team_id'  => '3',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Tiémoué Bakayoko',
        'image' => 'players\December2018\67.jpg',
        'Pno'    => '14',
        'nationality'  => 'French',
        'ratings'  => '7.1',
        'team_id'  => '8',
        'position'  => 'Midfielder',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Antoine Griezmann',
        'image' => 'players\December2018\24.jpg',
        'Pno'    => '7',
        'nationality'  => 'French',
        'ratings'  => '9.3',
        'team_id'  => '12',
        'position'  => 'Forward',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Filipe Luís',
        'image' => 'players\December2018\27.jpg',
        'Pno'    => '3',
        'nationality'  => 'Brazilian',
        'ratings'  => '7.3',
        'team_id'  => '12',
        'position'  => 'Defender',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);

DB::table('players')->insert([
        'PName'     => 'Jan Oblak',
        'image' => 'players\December2018\25.jpg',
        'Pno'    => '13',
        'nationality'  => 'Slovenian',
        'ratings'  => '7.3',
        'team_id'  => '12',
        'position'  => 'Goal keeper',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

    ]);
}


}