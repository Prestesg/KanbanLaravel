@extends('kanban.head')


<div class="row headers">
    <div class="col"><h3>Demanda {{$cards['demanda']->count()}}</h3>
 @foreach ($cards['demanda'] as $card)
 @if($card->id_curso == 0)
    <div>AULÃO LIVRE</div>
    @else
    <div>{{$card->relprof->professor}}</div>
    @endif
 @endforeach
 </div>
  <div class="col"><h3>Material Recebido {{$cards['material']->count()}}</h3>
  @foreach ($cards['material'] as $card)
  @if($card->id_curso == 0)
    <div>AULÃO LIVRE</div>
    @else
    <div>{{$card->curso->nome}}</div>
    @endif
 @endforeach
</div>
  <div class="col"><h3>Para Conferência {{$cards['conferencia']->count()}}</h3>
  @foreach ($cards['conferencia'] as $card)
  @if($card->id_curso == 0)
    <div>AULÃO LIVRE</div>
    @else
    <div>{{$card->curso->nome}}</div>
    @endif
 @endforeach
</div>
  <div class="col"><h3>Conferido {{$cards['conferido']->count()}}</h3>
  @foreach ($cards['conferido'] as $card)
        @if($card->id_curso == 0)
    <div>AULÃO LIVRE</div>
    @else
    <div>{{$card->curso->nome}}</div>
    @endif
 @endforeach
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Criar Card
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="radio" name="tipo" value="1">Aula Regular
                        <input type="radio" name="tipo" value="0" >Aulão Livre
                    </div>
                <hr>
                    <div class="form-group col-md-8">
                            <label >Material a ser produzido *</label><br>
                            <input type="checkbox" name="material_apostila" value="0">Apostila
                            <input type="checkbox" name="material-pdf" value="1">Vídeo
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
                                    <span class="input-group-text" >Escolher Arquivo</span>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="arquivos[]" aria-describedby="inputGroupFileAddon01">
                                  </div>
                                </div>
                        </div>
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

<script>
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
    $.ajax({
        type: "POST",
        url : "kanban/create",
        data: $("#card-form").serialize(),
        sucess:function(data){
            console.log(data);
        },
        error:function(error){

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
</script>



