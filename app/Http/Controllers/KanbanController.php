<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use App\Disciplinas;
use App\Professores;
use App\Cards;
use App\CardProfessor;

class KanbanController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all();
        $disciplinas = Disciplinas::all();
        $professores = Professores::all();
        $cards['demanda'] = Cards::where('processo', 1)->get();
        $cards['material'] = Cards::where('processo', 2)->get();
        $cards['conferencia'] = Cards::where('processo', 3)->get();
        $cards['conferido'] = Cards::where('processo', 4)->get();
        
        
        return view('kanban.index', compact('destaques', 'cursos', 'disciplinas', 'professores', 'cards'));
    }

    public function create(Request $request)
    {
	if($request->id){
	$novo_card = Cards::where('id_card', $request->id)->first();
	}else{
        $novo_card = new Cards;
	}
        $novo_card->id_curso = ($request->tipo == 1)?$request->curso:0;
        $novo_card->id_disciplina = $request->disciplina;
        $novo_card->ano = $request->ano;
        $novo_card->processo = 1;
        $novo_card->link_pdf = (isset($request->material_apostila))?'teste.mp4':'';
        $novo_card->link_video = (isset($request->material_video))?'teste.pdf':'';
        $novo_card->save();
        
        foreach ($request->professor as $key => $professor) {
            $nova_rel_prof = new CardProfessor;
            $nova_rel_prof->id_card = $novo_card->id_card;
            $nova_rel_prof->id_professor = (int) $professor;
            $nova_rel_prof->save();
        }
	return response()->json(['ok' => 'ok']);
        //return ['success' => true, 'message' => 'New user created !!'];
    }

    public function mover (Request  $request)
    {
	$card_mover = Cards::where('id_card', $request->id)
               ->first();
	if($card_mover->processo == 1){
		if(empty($card_mover->link_pdf) and empty($card_mover->link_video)){
			return $card_mover;
		}
	}else{
	                if(empty($card_mover->link_pdf) or empty($card_mover->link_video)){
			return $card_mover;
                }
	}
	$card_mover->processo += 1;
	$card_mover->save();
	return $card_mover;
    }
    public function voltar(Request $request){
	        $card_voltar = Cards::where('id_card', $request->id)
               ->first();
	$card_voltar->processo -= 1;
	$card_voltar->save();
    }

    public function editar(Request $request){
        $card_edit = Cards::where('id_card', $request->id)->first();
	$card_edit->id_curso = ($request->tipo == 1)?$request->curso:0;
        $card_edit->id_disciplina = $request->disciplina;
        $card_edit->ano = $request->ano;
        $card_edit->processo = 1;
        $card_edit->link_pdf = (isset($request->material_apostila))?'teste.mp4':'';
        $card_edit->link_video = (isset($request->material_video))?'teste.pdf':'';
        $card_edit->save();	
    }    
}
