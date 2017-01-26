@extends('welcome')

@section('title')
- Seach Result for {{ $keyword }}
@endsection

@section('content')

	<!-- BEGIN .with-sidebar-layout -->
	<div class="with-sidebar-layout left">


		<div class="content-panel">
			<div class="panel-title">

				@if($embed->count() != 0)
					<h2>Search Result for <strong>{{ $keyword }}</strong></h2>
				@else
					<h2>No found result for <strong>{{ $keyword }}</strong></h2>
				@endif
				<div class="right video-set-layout">
					<a href="#v-set-layout" rel="grid" class="active"><i class="fa fa-th"></i></a>
					<a href="#v-set-layout" rel="hdgrid"><i class="fa fa-th-large"></i></a>
					<a href="#v-set-layout" rel="list"><i class="fa fa-th-list"></i></a>
					<a href="#v-set-layout" rel="hdlist"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<div class="panel-block video-list list">
				

				@foreach($embed as $value)
				<!-- BEGIN .item -->
				<div class="item">
					<div class="item-header">
						<a href="{{ $value->title }}" class="img-hover-effect loadingvideo"><img src="images/aspect-px.png" width="16" height="9" class="aspect-px" rel="{{ $value->img }}" alt="" /></a>
					</div>
					<div class="item-content">
						<h3><a href="{{ $value->title }}">{{ $value->title }}</a><span class="marker"> {{ $value->category->title }}</span></h3>
						<span class="video-meta">
							<a href="{{ $value->title }}"><i class="fa fa-eye"></i>{{ $value->views->count() }}</a>
							<!-- <a href="#"><i class="fa fa-heart"></i>95</a> -->
						</span>
						<p>{{ $value->description }}</p>
					</div>
				<!-- END .item -->
				</div>
				@endforeach

				

			</div>
		</div>

	<!-- END .with-sidebar-layout -->
	</div>

	<!-- BEGIN #sidebar -->
	<aside id="sidebar" class="right">

		<!-- BEGIN .widget -->
		<div class="widget">
			<div class="banner-widget no-border">
				@include('include.ads')
			</div>
		<!-- END .widget -->
		</div>

<!-- 
		<div class="widget">
			<h3>Featured Videos</h3>
			<div class="widget-videos">
				
				@include('include.featured')
				
				

			</div>

		</div>

	<!-- END #sidebar -->
	</aside>










@endsection