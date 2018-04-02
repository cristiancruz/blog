<style type="text/css">
	/* INICIO LOGIN*/
.form-signin {
  max-width: 330px!important;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
/*FIN LOGIN*/
</style>
@extends('admin.template.main')

@section('title','Login')

@section('content')

	<div class="form-signin">
		 <h2 class="form-signin-heading text-center">Iniciar Sesión</h2>
		 		
		{!! Form::open(['route'=>'admin.auth.login', 'method' => 'POST','id'=>'login']) !!}
		{!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Correo electronico','required'])!!}
		{!! Form::password('password',['class' => 'form-control', 'placeholder' => '****','required']) !!}
		{!! Form::submit('Acceder',['class' => 'btn btn-block btn-primary']) !!}
		{!! Form::close() !!}
	</div>



@endsection