<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('categories')->insert([
        ['category' => 'Novel'],
        ['category' => 'Komik'],
        ['category' => 'Pendidikan'],
        ['category' => 'Teknologi'],
    ]);
}
}//test save
