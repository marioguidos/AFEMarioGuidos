<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'id'=>1,
            'name'=>'Mario',
            'email'=>'Mario@gmail.com',
            //'email_verfied_at'=>now(),
            'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
