<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\Model\User','idPost');
    }
}