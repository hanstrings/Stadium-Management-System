<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Eloquent::unguard();
        $this->call(TeamTableSeeder::class);
        $this->call(LeagueTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(MatchTableSeeder::class);
        $this->call(LeagueTeamTableSeeder::class);
        $this->call(TeamMatchTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
    }
}
