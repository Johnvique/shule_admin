<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =[
        'name',
        'email',
        'phone',
        'id_no',
        'location',
        'tsc_no',
        'gender',
        'image',
    ];
}
