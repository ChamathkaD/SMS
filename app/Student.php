<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'index', 'firstname', 'lastname', 'gender', 'birthday', 'mobile', 'address'
    ];



}
