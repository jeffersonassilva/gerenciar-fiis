<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class FiisTableSeeder
 */
class FiisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiis')->insert([
            [
                'sigla' => 'HFOF11'
            ],
            [
                'sigla' => 'TFOF11'
            ],
            [
                'sigla' => 'RBRF11'
            ]
        ]);
    }
}
