<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonteaching extends Model
{
    protected $fillable =[
        'name',
        'email;',
        'phone',
        'id_no',
        'location',
        'role',
        'gender',
        'image',
    ];
}
