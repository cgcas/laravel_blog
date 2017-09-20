<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\Model\User','usuario_id');
    }
}