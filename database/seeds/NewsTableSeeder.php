// app/database/seeds/NewsTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\News;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2019-01-16 23:55:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\1.jpg',
        'headline' =>  'Thomas lemar wins it for France'    ,
        'desc'     =>     'When france was in the world cup this year thomas lemar plasy important role in the world cup glory year for france.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-9 23:00:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\2.jpg',
        'headline' =>  'SD Huesca 0-1 Real Madrid: Gareth Bale volley sends Los Blancos fourth in La Liga'    ,
        'desc'     =>     'The Wales international netted the only goal after just eight minutes - his first La Liga strike in 802 minutes of action - driving home from Alvaro Odriozolas right-wing cross.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-10 3:30:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\3.jpg',
        'headline' =>  'Raheem Sterling: Manchester City forward says newspapers fuel racism in football'    ,
        'desc'     =>     'Sterlings comments came the day after police in Scotland arrested two fans for allegedly directing racial abuse at Motherwell substitute Christian Mbulu during his sides defeat at Hearts.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-1 4:00:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\4.jpg',
        'headline' =>  'Paul Pogba: Jose Mourinho says Man Utd midfielder will show how good he is'  ,
        'desc'     =>     'World Cup-winning midfielder Pogba, who rejoined United for £89m in 2016, was an unused substitute in Saturdays 4-1 defeat of Fulham, the second successive game he has started on the bench.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-2 1:30:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\5.jpg',
        'headline' =>  'New Southampton manager Ralph Hasenhuttl took the positives from his first game in charge'  ,
        'desc'     =>     'I was not disappointed with what my team showed me, but thats the basics, said the Austrian, who has replaced the sacked Mark Hughes. The rest will come in the next weeks.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-3 14:20:40')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\6.jpg',
        'headline' =>  'Lionel Messi scored two direct free-kicks in a single La Liga game for the first time as Barcelona beat Espanyol to move three points clear at the top.' ,
        'desc'     =>     'Another sensational Messi set-piece.Sevilla had missed the chance to leapfrog Ernesto Valverdes side earlier on Saturday as they were held to a 1-1 draw by Valencia.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-4 4:44:44')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\7.jpg',
        'headline' =>  'Manchester City were "fantastic" despite suffering a first Premier League defeat of the season at Chelsea, said manager Pep Guardiola.' ,
        'desc'     =>     'Chelsea bounced back from the disappointment of losing at Wolves in midweek to end Citys 21-game unbeaten league run stretching back to April, and a sequence of 14 unbeaten games away from.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-5 16:12:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\8.jpg',
        'headline' =>  'Champions League: Which other Brazilians join Neymar in the top 10?' ,
        'desc'     =>     'When he swept the ball past compatriot Alisson to send Paris St-Germain on their way to a 2-1 win at the Parc des Princes, the number 10 registered his 31st goal in the competition.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-6 19:00:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\9.jpg',
        'headline' =>  'Kevin Mirallas scored a 96th-minute equaliser for Fiorentina in a 3-3 draw at Sassuolo to cap a remarkable weekend of late goals in Serie A.' ,
        'desc'     =>     'The Everton loanee struck at the end of a pulsating final 30 minutes that saw six goals and a red card for each side.On Saturday, Sampdoria scored in the 99th minute .' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
    
    DB::table('news')->insert([
        'dateandtime' => Carbon::parse('2018-12-8 21:30:00')->format('Y-m-d H:i:s'),
        'image' => 'news\December2018\10.jpg',
        'headline' =>  'Ten-man Dundee moved off the bottom of the Scottish Premiership after holding out for a draw against Rangers.' ,
        'desc'     =>     'Dundee took the lead through former Rangers striker Kenny Miller, who didnt celebrate.Andy Halliday equalised direct from a free-kick awarded after Nathan Ralph was sent off.' ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
    
}

}