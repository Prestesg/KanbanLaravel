<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CardProfessor;

class Cards extends Model
{
    protected $table = 'card_kanban';
    protected $primaryKey = "id_card";
    protected $fillable = [ 'id_curso',
                            'id_disciplina',
                            'link_pdf',
                            'link_video',
                            'ano',
			    'processo'];
    public $timestamps = false;
    
    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function curso()
    {
        return $this->belongsTo('App\Cursos','id_curso');
    }

    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function disciplina()
    {
        return $this->belongsTo('App\Disciplinas', 'id_disciplina');
    }

    /**
      * Função de relação de tabelas usando métodos de Active Record
      * @return Object Retorna objeto relacional.
      */
    public function relprof()
    {
        return $this->belongsToMany('App\Professores','card_professores','id_card','id_professor');
    }
}
