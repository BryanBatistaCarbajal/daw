<?php

namespace Database\Seeders;
use Illuminate\Database\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Administrador 1',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
            'name'=>'Administrador 1',
            'phone'=>'6365364961',
            'alias'=>'admin',
            'image'=>'default.jpg'
        ]);
        DB::table('users')->insert([
            'email'=>'gatitatragona@gmail.com',
            'password'=>Hash::make('123'),
            'name'=>'Elvis Tec',
            'phone'=>'6365364962',
            'alias'=>'papu',
            'image'=>'default.jpg'
        ]);
    }
}
