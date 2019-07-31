@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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

                        <div class="form-group{{ $errors->has('curso') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Curso</label>

                            <div class="col-md-6">
                                <input id="curso" type="text" class="form-control" name="curso" value="{{ old('curso') }}" required autofocus>

                                @if ($errors->has('curso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('curso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('turma') ? ' has-error' : '' }}">
                            <label for="turma" class="col-md-4 control-label">Turma</label>

                            <div class="col-md-6">
                                <input id="turma" type="text" class="form-control" name="turma" value="{{ old('turma') }}" required autofocus>

                                @if ($errors->has('turma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('turma') }}</strong>
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

                        <div class="form-group{{ $errors->has('pergunta') ? ' has-error' : '' }}">
                            <label for="pergunta" class="col-md-4 control-label">Pergunta Secreta</label>

                            <div class="col-md-6">
                                <input id="pergunta" type="text" class="form-control" name="pergunta" value="{{ old('pergunta') }}" required autofocus>

                                @if ($errors->has('pergunta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pergunta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('resposta') ? ' has-error' : '' }}">
                            <label for="resposta" class="col-md-4 control-label">Resposta</label>

                            <div class="col-md-6">
                                <input id="resposta" type="text" class="form-control" name="resposta" value="{{ old('resposta') }}" required autofocus>

                                @if ($errors->has('resposta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resposta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="campus" class="col-md-4 control-label">Câmpus</label>
                        <div class="col-md-6">
                          <select class="custom-select" id="campus" name="campus" required autofocus>
                            <option selected>Escolher...</option>
                            <option value="IFSC">IFSC</option>
                            <option value="IFC">IFC</option>
                          </select>
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
