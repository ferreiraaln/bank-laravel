<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Account.
 *
 * @package namespace App\Entities;
 */
class Account extends Model
{
    use HasFactory;


    protected $fillable = [
        'number',
        'saldo',
        'agency_id'
    ];


    public function agency()
    {
        return $this->hasOne(Agency::class, 'id', 'agency_id');
    }

    public function client()
    {
        return $this->belongsTo(ClientAccount::class, 'account_id', 'id');
    }
}
