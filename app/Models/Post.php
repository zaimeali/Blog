<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // table name
    // protected $table = 'posts';  // can change table name from here

    // primary key
    // protected $primaryKey = 'id';

    // timestamps
    // public $timestamps = false;   // if false then it will not add timestamp in a post table
}
