<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable =[
        'title', 
        'excerpt', 
        'content', 
        'image',
        'author_id',
        'updated_at',
        'created_at'
    ];
}
