<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title','Default') | Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/main.css') }}">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@include('admin.template.partials.nav')
			<section>
				@include('admin.template.partials.errors')
				@yield('content')
			</section>

		</div>
	</div>
	<hr>
	<footer>
			<div class="row">
				<div class="col-md-12 text-center" ><h4>{{ trans('app.title_date')}}</h4></div>
				<div class="col-md-12 text-center" >Cristian Alejandro Quijda Cruz</div>
			</div>
	</footer>
</div>




	<script type="text/javascript" src="{{asset('public/plugins/jquery/js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/chosen/chosen.jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/trumbowyg/trumbowyg.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/plugins/main.js')}}"></script>
	@yield('js')
</body>
</html>