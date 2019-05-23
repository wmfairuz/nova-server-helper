<?php

use Illuminate\Database\Seeder;

class ServerGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('server_groups')->delete();

        DB::table('server_groups')->insert([
            'name' => 'Default'
        ]);
    }
}
