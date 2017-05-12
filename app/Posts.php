<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['group_name','post','user_name','date'];
}
