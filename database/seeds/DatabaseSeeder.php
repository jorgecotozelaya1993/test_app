<?php

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
        // $this->call(UserSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('clientes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $this->call(ClientesSeeder::class);

    }
}
