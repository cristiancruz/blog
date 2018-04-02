@if(Auth::user()== false)
<div class="header-login text-right">
	<a href="{{route('admin.auth.login')}}" class="btn btn-warning btn-login ">{{trans('app.log_in')}}</a>
</div>
@else
	<div class=" col-md-12 col-xs-12 header-login text-right">
		<a href="{{route('admin.index')}}" class="btn btn-warning btn-login ">Admin</a>
		<a href="{{route('admin.auth.logout')}}" class="btn btn-warning btn-login ">{{trans('app.log_out')}}</a>
	</div>
@endif

<div class="text-center" id="header-autor">
	<a href="{{ route('normal.index') }}">
		<img src="{{asset('public/images/autor.jpg')}}" alt="foto del autor del sitio" class="img-responsive img-circle zoom" id="img-autor">
	</a>
	<h1>Blog <span class="title-web-page">ViuryCode</span></h1>
	<h5>cristian.quijadacruz@gmail.com</h5>
</div>
<div class="content-slider">
	<div class="slider">
		<div class="mask">
			<ul>
				<li class="anim1">
					<div class="quote"><span class="a-left">[</span>Hola!<span class="a-right">]</span></div>
				</li>
				<li class="anim2">
					<div class="quote"><span class="a-left">[</span>Bienvenido!<span class="a-right">]</span></div>
				</li>
				<li class="anim3">
					<div class="quote"><span class="a-left">[</span>Aprende!<span class="a-right">]</span></div>
				</li>
				<li class="anim4">
					<div class="quote"><span class="a-left">[</span>Disfruta!<span class="a-right">]</span></div>

				</li>
				<li class="anim5">
					<div class="quote"><span class="a-left">[</span>Comparte!<span class="a-right">]</span></div>
				</li>
			</ul>
		</div>
	</div>
</div>