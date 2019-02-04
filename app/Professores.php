<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CardProfessor;

class Professores extends Model
{
    protected $table = 'professores';
    protected $primaryKey = "id";
    protected $fillable = ['nome'];
    public $timestamps = false;

    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function relprof()
    {
        return $this->hasMany(CardProfessor::class, 'id');
    }
}
