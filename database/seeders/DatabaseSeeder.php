<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call( [
            TokenTableSedeer::class,
            ClientTableSedeer::class,
            AgencyTableSedder::class,
            AccountTableSedder::class,
            ClientAccountTableSedder::class,
            
        ]);
    }
}
