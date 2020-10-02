<?php

namespace Database\Factories;

use App\Models\Token;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TokenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Token::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg5ZTcwNjUwNTg5NjhiMDIwMjA4MmJiY2I4OWJiNWVmMWQ4MWI0ZTQ3MjUwNzQ4OGJkNDQ0ZWZlYjdhMmI3Yjg3NDY2MmYzNTIwNDUxZGVlIn0.eyJhdWQiOiIyIiwianRpIjoiODllNzA2NTA1ODk2OGIwMjAyMDgyYmJjYjg5YmI1ZWYxZDgxYjRlNDcyNTA3NDg4YmQ0NDRlZmViN2EyYjdiODc0NjYyZjM1MjA0NTFkZWUiLCJpYXQiOjE1OTczMjkxMjIsIm5iZiI6MTU5NzMyOTEyMiwiZXhwIjoxNTk3NDE1NTE5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.LYO4OnBLNQ7E6Zq7pwEWJkbD_u6wexty4F20_6OQ8Zv6ZtvG7nBUZNBXE-gKeYODk2khhjc9iTVBi3qZ5svFq4kiBJi9HDBP7dfJHHbievT94SB_qiMrML22ldtukG6V44ohzB-8woX-gUmAeZeO6WVbU5wzMj25coL--OhiQ4YEX1MPD-C3H8QP-AIxp16oMZiVGNECe15cDo6EMOmFbNQlpFtYq7BgUd-Q1Uri5XgvGCPhQ7-t4YaTyc8BxGl77NMY54eXpnZRVT1ncHOuQMTvfYIt7QAkIUqYeDwMpD-fLqlrrpqEH6E1outzQV7VNHeicbxWM0eUpw8MQvx3IG7UeSrQ6J5nTNK9b0LCjn8EGMRuyhFVtloMkT77r1-TdYD5dU4s51kmQTe-YBl-M4___P0-D-W_gqR73Hb3Jnxm59yMQkqLMbPwHLZ_ch8QGKGnZ6ZfFxwmUy0UszczevDao-KU7Sx9QESeH7GgwJCbN5zDH4euD_rj30wViNcod9Z4ThCX3Fv_u33vp9qXn7p7bcVM2hEIwlkRWsB54s5On-21eQnFPPq_OpBBeK0t8nDpA3VaUGtoEPNKXEkq_Fu8bvOE8E7ywopH_l80Zbf3EQf9oCKUfn8DVutLdcv6xl_DAqzVsDyE1CVd6y_0FVzcn6iYErkEy4YmMssZwFM',
        ];
    }
}
