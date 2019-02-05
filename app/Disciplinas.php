<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cards;

class Disciplinas extends Model
{
    protected $table = 'disciplinas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome'];
    
    /**
     * Função de relação de tabelas usando métodos de Active Record
     * @return Object Retorna objeto relacional.
     */
    public function cards()
    {
        return $this->hasMany(Cards::class, 'id_disciplina');
    }
}
