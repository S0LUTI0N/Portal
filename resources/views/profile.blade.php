@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
      <h1>Meu Perfil</h1>
      <?php if (session('success')): ?>
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      <?php endif; ?>

      <?php if (session('error')): ?>
        <div class="alert alert-danger">
          {{session('error')}}
        </div>
      <?php endif; ?>
      <form action="{{ url('conta\atualizar')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label><br>
            <label>{{auth()->user()->email}}</label>
          </div>
          <div class="form-group">
            <label for="campus">Câmpus</label>
            <select class="custom-select" id="campus" name="campus">
              <option selected>{{auth()->user()->campus}}</option>
              <option value="IFSC">IFSC</option>
              <option value="IFC">IFC</option>
            </select>
          </div>
          <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" name="curso" value="{{auth()->user()->curso}}">
          </div>
          <div class="form-group">
            <label for="turma">Turma</label>
            <input type="text" class="form-control" name="turma" value="{{auth()->user()->turma}}">
          </div>
          <div class="form-group">
            <label for="pergunta">Pergunta Secreta</label>
            <input type="text" class="form-control" name="pergunta" value="{{auth()->user()->pergunta}}">
          </div>
          <div class="form-group">
            <label for="resposta">Resposta</label>
            <input type="text" class="form-control" name="resposta">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info" >Atualizar Perfil</button>
          </div>
        </form>
    </div>
</div>
@endsection
