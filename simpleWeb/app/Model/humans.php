<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class humans extends Model
{
    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'address'
       
    ];
    protected $hidden=[];
}
