@extends('kanban.head')


<div class="row headers">
    <div class="col"><h3 class="p-3 mb-2 bg-primary text-white">Demanda <span class="badge badge-warning">{{$cards['demanda']->count()}}</span></h3>
 @foreach ($cards['demanda'] as $card)
<div class="card">
<div class="card-body">
 @if($card->id_curso == 0)
  <ul style="list-style-type:disc;font-size: 2rem;color: #009800;"><li>  <h5 class="card-title">AULÃO LIVRE</h5></li></ul>
    @else
    <h5 class="card-title">{{$card->curso->nome}}</h5>
    @endif
<h6 class="card-subtitle mb-2 text-muted">{{$card->disciplina->nome}}</h6>
<div class="row">
	<div class="col-md-10">
    @foreach($card->relprof as $key=>$professor)
	<a class=" btn-primary btn-sm">{{$professor->nome}}</a>
    @endforeach
	</div>
	<div class="cold-md-2">
	<a class=" btn-success btn-sm pull-right">{{$card->ano}}</a>
	</div>
</div>
   <div class="row">
	<div class="col-md-8">
	@if(!empty($card->link_pdf))
	<svg id="i-file" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M6 2 L6 30 26 30 26 10 18 2 Z M18 2 L18 10 26 10" />
</svg>
	@endif
	@if(!empty($card->link_video))
	<svg id="i-video" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M22 13 L30 8 30 24 22 19 Z M2 8 L2 24 22 24 22 8 Z" />
</svg>
	@endif
	</div>
	<div class="col-md-4">
	<a class="btnMover" href="javascript:void(0)" data-id="{{$card->id_card}}" 
        data-href="{{ route('page.kanban.mover') }}">Mover</a>
	<a class="btnEditar" href="javascript:void(0)" data-id="{{$card->id_card}}" data-toggle="modal" data-target="#modal"
	data-href="{{ route('page.kanban.editar') }}">Editar</a>
	</div>	
   </div>
</div>
</div>
 @endforeach
 </div>
  <div class="col"><h3 class="p-3 mb-2 bg-info text-white">Material Recebido <span class="badge badge-warning">{{$cards['material']->count()}}</span></h3>
  @foreach ($cards['material'] as $card)
<div class="card">
<div class="card-body">
 @if($card->id_curso == 0)
  <ul style="list-style-type:disc;font-size: 2rem;color: #009800;"><li>  <h5 class="card-title">AULÃO LIVRE</h5></li></ul>
    @else
    <h5 class="card-title">{{$card->curso->nome}}</h5>
    @endif
<h6 class="card-subtitle mb-2 text-muted">{{$card->disciplina->nome}}</h6>
<div class="row">
        <div class="col-md-10">
    @foreach($card->relprof as $key=>$professor)
        <a class=" btn-primary btn-sm">{{$professor->nome}}</a>
    @endforeach
        </div>
        <div class="cold-md-2">
        <a class=" btn-success btn-sm pull-right">{{$card->ano}}</a>
        </div>
</div>
   <div class="row">
        <div class="col-md-8">
        @if(!empty($card->link_pdf))
        <svg id="i-file" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M6 2 L6 30 26 30 26 10 18 2 Z M18 2 L18 10 26 10" />
</svg>
        @endif
        @if(!empty($card->link_video))
        <svg id="i-video" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M22 13 L30 8 30 24 22 19 Z M2 8 L2 24 22 24 22 8 Z" />
</svg>
        @endif
        </div>
        <div class="col-md-4">
        <a class="btnMover" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.mover') }}">Mover</a>
        <a class="btnEditar" href="javascript:void(0)" data-id="{{$card->id_card}}" data-toggle="modal" data-target="#modal"
        data-href="{{ route('page.kanban.editar') }}">Editar</a>
	<a class="btnVoltar" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.voltar') }}">Voltar</a>
        </div>
   </div>
</div>
</div>
  @endforeach
</div>
  <div class="col"><h3 class="p-3 mb-2 bg-danger text-white">Para Conferência <span class="badge badge-warning">{{$cards['conferencia']->count()}}</span></h3>
  @foreach ($cards['conferencia'] as $card)
  <div class="card">
<div class="card-body">
 @if($card->id_curso == 0)
  <ul style="list-style-type:disc;font-size: 2rem;color: #009800;"><li>  <h5 class="card-title">AULÃO LIVRE</h5></li></ul>
    @else
    <h5 class="card-title">{{$card->curso->nome}}</h5>
    @endif
<h6 class="card-subtitle mb-2 text-muted">{{$card->disciplina->nome}}</h6>
<div class="row">
        <div class="col-md-10">
    @foreach($card->relprof as $key=>$professor)
        <a class=" btn-primary btn-sm">{{$professor->nome}}</a>
    @endforeach
        </div>
        <div class="cold-md-2">
        <a class=" btn-success btn-sm pull-right">{{$card->ano}}</a>
        </div>
</div>
   <div class="row">
        <div class="col-md-8">
        @if(!empty($card->link_pdf))
        <svg id="i-file" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M6 2 L6 30 26 30 26 10 18 2 Z M18 2 L18 10 26 10" />
</svg>
        @endif
        @if(!empty($card->link_video))
        <svg id="i-video" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M22 13 L30 8 30 24 22 19 Z M2 8 L2 24 22 24 22 8 Z" />
</svg>
        @endif
        </div>
        <div class="col-md-4">
        <a class="btnMover" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.mover') }}">Mover</a>
        <a class="btnEditar" href="javascript:void(0)" data-id="{{$card->id_card}}" data-toggle="modal" data-target="#modal"
        data-href="{{ route('page.kanban.editar') }}">Editar</a>
        <a class="btnVoltar" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.voltar') }}">Voltar</a>
        </div>
   </div>
</div>
</div>
  @endforeach
</div>
  <div class="col"><h3 class="p-3 mb-2 bg-dark text-white" >Conferido <span class="badge badge-warning">{{$cards['conferido']->count()}}</span></h3>
  @foreach ($cards['conferido'] as $card)
  <div class="card">
<div class="card-body">
 @if($card->id_curso == 0)
  <ul style="list-style-type:disc;font-size: 2rem;color: #009800;"><li>  <h5 class="card-title">AULÃO LIVRE</h5></li></ul>
    @else
    <h5 class="card-title">{{$card->curso->nome}}</h5>
    @endif
<h6 class="card-subtitle mb-2 text-muted">{{$card->disciplina->nome}}</h6>
<div class="row">
        <div class="col-md-10">
    @foreach($card->relprof as $key=>$professor)
        <a class=" btn-primary btn-sm">{{$professor->nome}}</a>
    @endforeach
        </div>
        <div class="cold-md-2">
        <a class=" btn-success btn-sm pull-right">{{$card->ano}}</a>
        </div>
</div>
   <div class="row">
        <div class="col-md-8">
        @if(!empty($card->link_pdf))
        <svg id="i-file" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M6 2 L6 30 26 30 26 10 18 2 Z M18 2 L18 10 26 10" />
</svg>
        @endif
        @if(!empty($card->link_video))
        <svg id="i-video" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M22 13 L30 8 30 24 22 19 Z M2 8 L2 24 22 24 22 8 Z" />
</svg>
        @endif
        </div>
        <div class="col-md-4">
        <a class="btnMover" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.mover') }}">Mover</a>
        <a class="btnEditar" href="javascript:void(0)" data-id="{{$card->id_card}}" data-toggle="modal" data-target="#modal"
        data-href="{{ route('page.kanban.editar') }}">Editar</a>
        <a class="btnVoltar" href="javascript:void(0)" data-id="{{$card->id_card}}"
        data-href="{{ route('page.kanban.voltar') }}">Voltar</a>
        </div>
   </div>
</div>
</div>
  @endforeach
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
    Criar Card
</button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar Novo Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="w3-container w3-padding-24" action="{{ route('page.kanban.create') }}" method="POST" enctype="multipart/form-data" id="card-form">
		{{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="radio" name="tipo" value="1" required>Aula Regular
                        <input type="radio" name="tipo" value="0" >Aulão Livre
                    </div>
                <hr>
                    <div class="form-group col-md-8">
                            <label >Material a ser produzido *</label><br>
                            <input type="checkbox" name="material_apostila" value="0">Apostila
                            <input type="checkbox" name="material_video" value="1">Vídeo
                        </div>
                        <div class="form-group col-md-4">
                              <label for="inputAno">Ano*</label>
                              <select id="inputAno" name="ano" class="form-control">
                                <option selected value="2019"> 2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                              </select>
                        </div>
                        <div class="form-group col-md-12">
                              <label for="inputCurso">Curso </label>
                              <select id="inputCurso" name="curso" class="form-control">
                              <option selected="selected" value="0">Selecione um curso</option>
                                  @foreach($cursos as $curso)
                                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                                  @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md-12">
                              <label for="inputDisciplina">Disciplina *</label>
                              <select id="inputDisciplina" name="disciplina" class="form-control">
                              <option selected="selected">Selecione uma Disciplina</option>
                                  @foreach($disciplinas as $disciplina)
                                <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                                  @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-primary" id="addProf">Adicionar Professor </button>
                              <select id="inputProfessores" name="professor[]"class="form-control">
                              <option selected="selected">Selecione um Professor</option>
                                  @foreach($professores as $professor)
                                <option value="{{$professor->id}}">{{$professor->nome}}</option>
                                  @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md-12">
			<button type="button" class="btn btn-primary" id="addArquivo">Adicionar Arquivo </button>
<div class="input-group" id="inputArquivos">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Escolher Arquivos</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Escolha um arquivo</label>
  </div>
</div>          	</div>                  
                </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="addCard" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
$(document).ready(function() {
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$('#addProf').on('click',function(){
    var inputField = $('#inputProfessores').clone();
    $('#inputProfessores').after(inputField);
});
$('#addArquivo').on('click',function(){
    var inputField = $('#inputArquivos').clone();
    $('#inputArquivos').after(inputField);
});
$('#addCard').on('click',function(){
	$('input[name="id"]').remove();
    $.ajax({
        type: "POST",
        url : "kanban/create",
        data: $("#card-form").serialize(),
        success:function(data){
	$('#modal').modal('toggle');
	Swal.fire({
  		position: 'top-end',
  		type: 'success',
  		title: 'Um novo card foi adicionado',
  		showConfirmButton: false,
 	 	timer: 1500
		});
	location.reload();
	},
        error:function(error){
        $('#modal').modal('toggle');
	Swal.fire({
		  type: 'error',
  		  title: 'Oops...',
  		 text: 'Algo deu errado no envio de dados',
	});
        }
    })
});
$('.btnMover').on('click',function(){
 var data = $(this).data();
 var token = $('input[name="_token"]').val();
console.log(token);
    $.ajax({
        type: "POST",
        url : data.href,
        data: { _token:token,
	       id:data.id},
        success:function(data){
        location.reload();
	},
        error:function(error){
        Swal.fire({
                  type: 'error',
                  title: 'Oops...',
                 text: 'Algo deu errado no envio de dados',
        });
        }
    })
});
$('.btnEditar').on('click',function(){
	var data = $(this).data();
	$('form').data('action',data.href);
	$('input[name="_token"]').after('<input type="hidden" name="id" value="'+data.id+'">')
});

$('.btnVoltar').on('click',function(){
 var data = $(this).data();
 var token = $('input[name="_token"]').val();
console.log(token);
    $.ajax({
        type: "POST",
        url : data.href,
        data: { _token:token,
               id:data.id},
        success:function(data){
           location.reload();
        },
        error:function(error){
        Swal.fire({
                  type: 'error',
                  title: 'Oops...',
                 text: 'Algo deu errado no envio de dados',
        });
        }
    })
});

$("input[name='tipo']").click(function(){
    var radioValue = $("input[name='tipo']:checked").val();
    if(radioValue == 0){
        $('#inputCurso').prop("disabled",true);
    }else {
        $('#inputCurso').prop("disabled",false);
    }
});
});
</script>


