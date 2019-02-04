<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    protected $table = 'disciplinas';
    protected $fillable = ['id', 'nome'];
}
