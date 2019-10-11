<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Include Table Name
    protected $table = 'posts';
    
    // Include Primary Key
    public $primaryKey = 'id';
    
    // Include Timestamps
    public $timestamps = true;
}