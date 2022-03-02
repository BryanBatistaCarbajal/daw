<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //$this->tuncateTables([
            //'users'
        //]);
        //php artisan make:seeder UsersSeeder
        //php artisan make:seeder CategoriesSeeder
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
    }
}
