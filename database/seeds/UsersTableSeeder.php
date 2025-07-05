<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');

        $data = [
            ['name'=>'Administrator','email'=>'administrator@gmail.com','password'=> $password, 'level' => 'admin'],
        ];

        User::insert($data);
    }
}
