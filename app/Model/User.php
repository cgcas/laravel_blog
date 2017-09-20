<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class User extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    public function post()
    {
        return $this->hasOne('App\Model\Post','post_id');
    }
}