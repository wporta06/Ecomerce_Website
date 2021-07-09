<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   //! must call them by order to avoid DB errors (user first than category...)
        $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class); //to inser in DB using CategorySeeder.php and CategoryFactory.php
        $this->call(ProductSeeder::class); //to inser in DB using ProductSeeder.php and ProductFactory.php
        $this->call(OrderSeeder::class); //to inser in DB using ProductSeeder.php and ProductFactory.php
        $this->call(AdminTableSeeder::class); //to inser in DB using ProductSeeder.php and ProductFactory.php
    }
}
