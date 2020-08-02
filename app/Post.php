<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = "posts";
    // Primary key input
    public $primaryKey = "id";
    //Timestamp
    public $timestamps = true;
}
