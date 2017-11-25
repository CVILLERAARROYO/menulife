@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="panel">
            <div class="panel-heading"><strong>Registrarse</strong></div>
            <div class="panel-body" id="ventana">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label"></label>
                    <div class="input-group col-sm-8">
                    <span class="input-group-addon"><i class="material-icons md-18">perm_identity</i></span>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label"></label>
                    <div class="input-group col-sm-8">
                    <span class="input-group-addon"><i class="material-icons md-18">mail_outline</i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label"></label>
                    <div class="input-group col-sm-8">
                    <span class="input-group-addon"><i class="material-icons md-18">lock_outline</i></span>
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label"></label>
                    <div class="input-group col-sm-8">
                    <span class="input-group-addon"><i class="material-icons md-18">lock_outline</i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="form-group" >
                    <div class="btn-login">
                    <button id="entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" type="submit" name="entrar"><span class="glyphicon glyphicon-log-in"></span>
                     Registrarse
                    </button>
                    <button id="entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" type="reset" name="entrar"><span class="glyphicon glyphicon-trash"></span>
                     Reset
                    </button>
                    </div>
                </div>
            </form>
            </div>
            <div class="panel-footer" id="footer-register">
                <div  id="register" >
                    <h4><strong>Registrarse con:</strong></h4>
                    <a href="redirect/facebook" id="btn-fcb" class="btn  btn-responsive" role="button" aria-disabled="true"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="redirect/twitter" id="btn-twt" class="btn  btn-responsive" role="button" aria-disabled="true"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="redirect/google"  id="btn-goog" class="btn  btn-responsive" role="button" aria-disabled="true"><i class="fa fa-google-plus"></i> Google</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection



