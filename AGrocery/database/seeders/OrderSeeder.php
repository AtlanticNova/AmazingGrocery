<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'accounts_id' => '1',
                'items_id' => '1',
                'price' => '2.000'
            ],
            [
                'accounts_id' => '1',
                'items_id' => '2',
                'price' => '19.000'
            ],
            [
                'accounts_id' => '1',
                'items_id' => '3',
                'price' => '1.000'
            ]
        ]);
    }
}
