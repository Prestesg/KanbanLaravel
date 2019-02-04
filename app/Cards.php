<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CardProfessor;

class Cards extends Model
{
    protected $table = 'card_kanban';
    protected $primaryKey = "id_card";
    protected $fillable = [ 'processo',
                            'id_curso',
                            'id_disciplina',
                            'link_pdf',
                            'link_video',
                            'ano'];
    public $timestamps = false;
    
    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function curso()
    {
        return $this->belongsTo('App\Cursos', 'id_curso', 'id');
    }

    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function relprof()
    {
        return $this->hasMany(CardProfessor::class, 'id_card');
    }
}
