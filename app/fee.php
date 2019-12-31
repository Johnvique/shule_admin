<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    protected $fillable =[
        'name',
        'class',
        'regno',
        'payable',
        'paid',
        'balance',
        'paydate',
        'transNo',
        'paymethod'
    ];
}
