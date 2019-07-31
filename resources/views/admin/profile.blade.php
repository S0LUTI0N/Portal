@extends('layouts.app2')

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
      <form action="{{ url('admin\conta\atualizar')}}" method="post">
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
            <label for="razao">Razão Social</label>
            <input type="text" class="form-control" name="razao" value="{{auth()->user()->razao}}">
          </div>

          <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" value="{{auth()->user()->cnpj}}">
          </div>

          <div class="form-group">
            <label for="area">Área de atuação</label>
            <input type="text" class="form-control" name="area" value="{{auth()->user()->area}}">
          </div>

          <div class="form-group">
            <label for="municipios">Municipio(s) de abrangência</label>
            <input type="text" class="form-control" name="municipios" value="{{auth()->user()->municipios}}">
          </div>

          <div class="form-group">
            <label for="password">Nova Senha</label>
            <input type="password" class="form-control" name="password">
            <label>Campo não obrigatório!</label>
          </div>

          <div class="form-group">
            <label for="porte">Porte</label>
            <select class="custom-select" id="porte" name="porte">
              <option selected>{{auth()->user()->porte}}</option>
              <option value="Até 9 empregados">Até 9 empregados</option>
              <option value="De 10 a 49 empregados">De 10 a 49 empregados</option>
              <option value="De 50 a 99 empregados">De 50 a 99 empregados</option>
              <option value="100 ou mais empregados">100 ou mais empregados</option>
            </select>
          </div>

          <div class="form-group" align="center">
              <h3>Dados do Responsável pelo Recrutamento (RH)</h3>
          </div>

          <div class="form-group">
            <label for="rhNome">Nome</label>
            <input type="text" class="form-control" name="rhNome" value="{{auth()->user()->rhNome}}">
          </div>

          <div class="form-group">
            <label for="rhEmail">E-mail</label>
            <input type="text" class="form-control" name="rhEmail" value="{{auth()->user()->rhEmail}}">
          </div>

          <div class="form-group">
            <label for="rhTelefone">Telefone</label>
            <input type="text" class="form-control" name="rhTelefone" value="{{auth()->user()->rhTelefone}}">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-info" >Atualizar Perfil</button>
          </div>
        </form>
    </div>
</div>
@endsection
