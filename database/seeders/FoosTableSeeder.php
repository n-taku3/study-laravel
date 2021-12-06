<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('foos')->insert([
        ['name' => 'Hello'],
        ['name' => 'I am'],
        ['name' => 'pen'],
      ]);
    }
}
