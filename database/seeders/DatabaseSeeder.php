<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'fullname'=>'Abraham Ketema',
            'username' => 'abmira',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('abmira'),
            'level' => 4,
            'remember_token' => Str::random(60),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'fullname'=>'Abraham Seyoum',
            'username' => 'abraham',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('abraham'),
            'level' => 3,
            'remember_token' => Str::random(60),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'fullname'=>'Lammessa Welfana',
            'username' => 'lemwell',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('lemwell'),
            'level' => 2,
            'remember_token' => Str::random(60),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'fullname'=>'Bukayo Saka',
            'username' => 'saka',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('saka'),
            'level' => 1,
            'remember_token' => Str::random(60),
            'created_at' => now()
        ]);
    }
}
