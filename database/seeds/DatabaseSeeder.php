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
        $this->call(PersonTableSeeder::class);
        $this->call(EstateTableSeeder::class);
        $this->call(CupProfileTableSeeder::class);
        $this->call(YieldFactorTableSeeder::class);
        $this->call(InputLotTableSeeder::class);
        $this->call(OutputLotTableSeeder::class);
    }
}
