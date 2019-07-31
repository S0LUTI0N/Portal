@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('razao') ? ' has-error' : '' }}">
                            <label for="razao" class="col-md-4 control-label">Razão Social</label>

                            <div class="col-md-6">
                                <input id="razao" type="text" class="form-control" name="razao" value="{{ old('razao') }}" required autofocus>

                                @if ($errors->has('razao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('razao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cnpj') ? ' has-error' : '' }}">
                            <label for="cnpj" class="col-md-4 control-label">CNPJ</label>

                            <div class="col-md-6">
                                <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}" required autofocus>

                                @if ($errors->has('cnpj'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnpj') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Área de atuação</label>

                            <div class="col-md-6">
                                <input id="area" type="text" class="form-control" name="area" value="{{ old('area') }}" required autofocus>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('municipios') ? ' has-error' : '' }}">
                            <label for="municipios" class="col-md-4 control-label">Município(s) de abrangência</label>

                            <div class="col-md-6">
                                <input id="municipios" type="text" class="form-control" name="municipios" value="{{ old('municipios') }}" required autofocus>

                                @if ($errors->has('municipios'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipios') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('porte') ? ' has-error' : '' }}" align="center">
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="porte">Porte</label>
                          </div>
                          <select class="custom-select" id="porte" name="porte" required autofocus>
                            <option selected>Escolher...</option>
                            <option value="Até 9 empregados">Até 9 empregados</option>
                            <option value="De 10 a 49 empregados">De 10 a 49 empregados</option>
                            <option value="De 50 a 99 empregados">De 50 a 99 empregados</option>
                            <option value="100 ou mais empregados">100 ou mais empregados</option>
                          </select>
                      </div>

                      <div class="form-group" align="center">
                          <label for="password-confirm">Responsável pelo Recrutamento (RH)</label>
                      </div>

                      <div class="form-group{{ $errors->has('rhNome') ? ' has-error' : '' }}">
                          <label for="rhNome" class="col-md-4 control-label">Nome</label>

                          <div class="col-md-6">
                              <input id="rhNome" type="text" class="form-control" name="rhNome" value="{{ old('rhNome') }}" required autofocus>

                              @if ($errors->has('rhNome'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('rhNome') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('rhEmail') ? ' has-error' : '' }}">
                          <label for="rhEmail" class="col-md-4 control-label">E-mail</label>

                          <div class="col-md-6">
                              <input id="rhEmail" type="text" class="form-control" name="rhEmail" value="{{ old('rhEmail') }}" required autofocus>

                              @if ($errors->has('rhEmail'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('rhEmail') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('rhTelefone') ? ' has-error' : '' }}">
                          <label for="rhTelefone" class="col-md-4 control-label">Telefone</label>

                          <div class="col-md-6">
                              <input id="rhTelefone" type="text" class="form-control" name="rhTelefone" value="{{ old('rhTelefone') }}" required autofocus>

                              @if ($errors->has('rhTelefone'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('rhTelefone') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
