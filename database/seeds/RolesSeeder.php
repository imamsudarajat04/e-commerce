<?php

use Carbon;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Admin',
            'created_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'role' => 'Pelanggan',
            'created_at' => Carbon::now(),
        ]);

    }
}
