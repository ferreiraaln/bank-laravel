<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientAccountTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ClientAccount::factory(1)->create();
    }
}
