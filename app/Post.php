<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'url_picture',
        'active',
        'post_type_id'
    ];


    protected $hidden = [
        'user_id', 
    ];

}
