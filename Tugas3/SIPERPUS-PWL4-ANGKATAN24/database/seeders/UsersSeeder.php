<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $faker = Faker::create('id_ID');

    // DATA (ADMIN)
    DB::table('user')->insert([
        'npm' => 5520124058,
        'username' => 'queenaira',
        'first_name' => 'Queenaira',
        'last_name' => 'Novinada',
        'email' => 'queenaira@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // DATA DUMMY
    for ($npm = 5520124059; $npm <= 5520124069; $npm++) {
        DB::table('user')->insert([
            'npm' => $npm,
            'username' => $faker->userName,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
}