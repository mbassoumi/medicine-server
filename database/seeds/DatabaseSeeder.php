<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MedicinesTableSeeder::class);
        $this->call(UsesTableSeeder::class);
        $this->call(SideEffectsTableSeeder::class);
        $this->call(WarningsTableSeeder::class);
    }
}
