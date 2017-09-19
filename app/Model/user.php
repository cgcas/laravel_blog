<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;

    public function post()
    {
        return $this->hasOne('App\Model\Post','idUsuario');
    }

}