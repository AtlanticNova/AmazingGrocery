<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'roles_id' => '1',
                'genders_id' => '1',
                'first_name' => 'Martinus',
                'last_name' => 'Novanawa',
                'email' => 'idiotcolony97@gmail.com',
                'display_picture_link' => 'PP_DIKA.jpg',
                'password' => bcrypt('dika1234'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
