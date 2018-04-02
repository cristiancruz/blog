<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title','ViuryCode')</title>
	<meta name="author" content="viurycode, ViuryCode, Cristian Alejandro Quijada Cruz">
	<meta name="description" content="ViuryCode es un blog sobre temas relacionados a programación y tecnologías de la información. ">
	<meta name="keywords" content="viurycode, ViuryCode, Laravel, laravel, Angular4, angular 4, sails, Sails, Node"/>
	<meta name="robots" content="Index, Follow">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/awesome/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="icon" href="{{asset('public/favicon.png')}}" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="header-log">
			@include('normal.template.partials.nav')
		</div>
			<div class="col-md-8">
				<section>
					@yield('content')
				</section>
			</div>
			<div class="col-md-4 height-aside" id="aside">
				{!! Form::open(['route'=>'normal.index', 'method'=>'GET', 'class'=>'navbar-form pull-right','id'=>'form-search']) !!}
					<div class="input-group">
						{!! Form::text('name',null,['class'=>'form-control bg-white','placeholder'=>'Buscar articulos']) !!}
						<span class="input-group-addon bg-white" id="search" style="cursor:pointer;"><span class="glyphicon glyphicon-search" aria-hidden=true></span></span>
					</div>
				{!! Form::close() !!}
				<div class="clearfix"></div>
				@include('normal.template.partials.aside')
			</div>
	</div>
	<footer>
			<div class="row">
				<div class="col-md-12 text-center" ><h4>{{ trans('app.title_date')}}</h4></div>
				<div class="col-md-12 text-center" >Cristian Alejandro Quijda Cruz</div>
			</div>
	</footer>
</div>
	<script type="text/javascript" src="{{asset('public/plugins/jquery/js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/main.js')}}"></script>
</body>
</html>