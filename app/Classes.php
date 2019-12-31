<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable =[
        'name',
        'size',
        'class_rep',
        'teacher'
    ];
}
