<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table dipakai model Post berdasarkan database "laravel"
    protected $table = 'posts';
    public $primaryKey = 'id';
}
