<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                ['name' => 'title', 'value' => 'SEEKERET - A Navigator Website.'],
                ['name' => 'keywords', 'value' => 'SEEKERET'],
                ['name' => 'description', 'value' => 'SEEKERET, A Navigator Website.']
            ]
        );
    }
}
