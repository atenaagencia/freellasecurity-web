<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@wfsecutiry.com.br',
            'password' => Hash::make('admin')
        ]);
    }
}
