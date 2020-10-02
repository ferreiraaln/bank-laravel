<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgencyTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Agency::factory(1)->create();
    }
}
