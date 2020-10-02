<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Client.
 *
 * @package namespace App\Entities;
 */
class Client extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function token()
    {
        return $this->hasOne(Token::class,'id', 'token_id');
    }

    public function clientAccount()
    {
        return $this->hasMany(ClientAccount::class,'id', 'client_id');
    }

}
