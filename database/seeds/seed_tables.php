<?php

use Illuminate\Database\Seeder;

class seed_tables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'esing10',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'country' => str_random(10).'@gmail.com',
            'province' => str_random(10),
            'name' => str_random(10),
            'is_admin' => 1,
        ]);

        DB::table('users')->insert([
            'username' => 'PressAtoJay',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'country' => str_random(10),
            'province' => str_random(10),
            'name' => str_random(10),
            'is_admin' => 0,
        ]);

        DB::table('games')->insert([
            'name' => 'Player Unknown Battlegrounds',
            'type' => 'Battleground',
        ]);

        DB::table('games')->insert([
            'name' => 'League of Legends',
            'type' => 'MOBA',
        ]);

        DB::table('leagues')->insert([
            'name' => 'Manitoba PUBG Season 1',
            'game_id' => '1',
        ]);

        DB::table('teams')->insert([
            'manager_id' => '1',
            'name' => 'Lineage',
            'game_id' => 1,
            'team_size' => 5,
        ]);

        DB::table('teams')->insert([
            'manager_id' => '2',
            'name' => 'scrubs',
            'game_id' => 2,
            'team_size' => 2,
        ]);

        DB::table('players')->insert([
            'username' => 'esing10',
            'email' => 'esing10',
            'game_id' => 1,
            'stream_id' => 2,
        ]);

        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 1,
        ]);

        DB::table('streams')->insert([
            'url' => 'esing10',
        ]);

        DB::table('league_teams')->insert([
            'league_id' => 1,
            'team_id' => 1,
        ]);

        DB::table('league_teams')->insert([
            'league_id' => 2,
            'team_id' => 2,
        ]);

        DB::table('streams')->insert([
            'url' => 'PressAtoJay',
        ]);

        DB::table('streams')->insert([
            'url' => 'esing10',
        ]);
    }
}
