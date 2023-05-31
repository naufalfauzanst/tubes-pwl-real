<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akuns extends Model
{
    
    use HasFactory;

    protected $table = 'akuns';

    protected $fillable =[
        'username',
        'password',
        'email',
        'nama',
        'level',
    ];

    // protected $hidden = [];
}

