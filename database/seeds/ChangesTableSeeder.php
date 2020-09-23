<?php

use Illuminate\Database\Seeder;

class ChangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('changes')->insert([
            'name_change' => '1 смена',
        ]);
        DB::table('changes')->insert([
            'name_change' => '2 смена',
        ]);
        DB::table('changes')->insert([
            'name_change' => 'ночь',
        ]);
    }
}
