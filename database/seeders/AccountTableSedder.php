<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Account::factory(1)->create();
    }
}
