<?php

namespace Database\Factories;

use App\Models\ClientAccount;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Account;

class ClientAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $client = Client::first();
        $account = Account::first();

        return [
            'client_id' => $client->id,
            'account_id' => $account->id,
        ];
    }
}
