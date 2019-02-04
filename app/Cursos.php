<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome'];
    public $timestamps = false;
    
    /**
     * Função de relação de tabelas usando métodos de Active Record
     * @return Object Retorna objeto relacional.
     */
    public function cards()
    {
        return $this->hasMany(Cards::class, 'id_curso');
    }
}
