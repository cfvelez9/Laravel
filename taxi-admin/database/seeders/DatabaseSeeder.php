<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        DB::table('types')->insert([
            'id' => 1,
            'name' => 'income',
            'operation' => 1
        ]);
        DB::table('types')->insert([
            'id' => 2,
            'name' => 'expense',
            'operation' => 0
        ]);
        //User::factory(5)->create();

        /*User::factory()->create([
            'name' => 'Carlos Velez',
            'email' => 'cfvelez9@gmail.com',
        ]);*/
    }
}
