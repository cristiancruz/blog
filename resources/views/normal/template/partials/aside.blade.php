
<div class="">
	<div class="panel panel-primary ">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('app.title_categories')}}</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
			@if(count($category) > 0)
				@foreach($category as $categories)
				<li class="list-group-item">
					<span class="badge">{{$categories->articles->count()}}</span>
					<a href="{{route('normal.search.category',$categories->name)}}">
						{{$categories->name}}
					</a>
				</li>
				@endforeach
			@else
				Sin categorias registradas
			@endif
		</ul>
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Tags</h3>
	</div>
	<div class="panel-body">
		@if(count($tags) > 0)
			@foreach($tags as $tag)
			<span class="label ">
			<a href="{{ route('normal.search.tag',$tag->name) }}">
					{{$tag->name}}
			</a>
			</span>
			@endforeach
			@else
			Sin tags registrados
		@endif
	</div>
</div>
</div>
