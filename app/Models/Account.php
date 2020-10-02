<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasOne(Agency::class,'id', 'agency_id');
    }
}
