<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::factory(1)->create();
    }
}
