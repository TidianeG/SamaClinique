<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'admin',
                     'email'             => 'gaye.cheikhtidiane@medilife.sn',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$iA5FZb2xb/HAPeq/WQmcxu6T4qYL8iwlbVCB1EXLQRFDSsAauo4rK', // password
                     'profil'             => 'admin',
                     'remember_token'    => Str::random(10),
                 ]
            ]
        );
    }
}
