<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professores;

class CardProfessor extends Model
{
    protected $table = 'card_professores';
    protected $primaryKey = "id";
    protected $fillable = ['id_card',
                            'id_professor'];
    public $timestamps = false;

    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function professor()
    {
        return $this->belongsTo('App\Professores', 'id_professor');
    }
}
