@extends('normal.template.main')
@section('title',$article->title)

@section('content')
<h3 class="title-front text-left">{{ $article->title }}</h3>

{!! $article->content !!}
	<div class="text-right">
		<h4 class="title-category">Categoria {{$article->category->name}}</h4>
	</div>
<hr>

<h3>Comentarios</h3>
<hr>
	<div id="disqus_thread"></div>
	<script>
	(function() {
	var d = document, s = d.createElement('script');
	s.src = '//viury-informando.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection