<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TokenTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Token::factory(1)->create();
    }
}
