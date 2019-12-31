<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bog extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_no',
        'location',
        'role',
        'gender',
        'image'

    ];
}
