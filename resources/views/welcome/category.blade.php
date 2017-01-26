@extends('welcome')

@section('title')
- Category:{{ $category->title }}
@endsection

@section('content')



				<!-- BEGIN .with-sidebar-layout -->
			<div class="without-sidebar-layout ">


			<!-- BEGIN .content-panel -->
		<div class="content-panel">
							

 
	<div class="panel-title" style="background-color: #373737;">
		<h2>Category : {{ $category->title }}</h2>
					<div class="right video-set-layout">
				<a href="#v-set-layout" rel="grid" class="active"><i class="fa fa-th"></i></a>
				<a href="#v-set-layout" rel="hdgrid"><i class="fa fa-th-large"></i></a>
				<a href="#v-set-layout" rel="list"><i class="fa fa-th-list"></i></a>
				<a href="#v-set-layout" rel="hdlist"><i class="fa fa-bars"></i></a>
			</div>
			</div>

					<!-- START .blog-lis-->
	<div class="panel-block video-list grid">							



@foreach($embed as $value)

											<!-- BEGIN .item -->
	<div class="item post-51 post type-post status-publish format-standard has-post-thumbnail hentry category-experimental category-hd-videos tag-expetendis tag-fierent tag-pertinax">
					<div class="item-header">
					<a href="/{{ $value->title }}" class="img-hover-effect loadingvideo">
		<img src="/images/aspect-px.png" width="16" height="9" class="aspect-px" rel="{{ $value->img }}" alt="Tammy Trailer 2" />
	</a>
			</div>
				<div class="item-content">
			<h3><a href="{{ $value->title }}">{{ $value->title }}</a><span class="marker"> {{ $value->category->title }}</span></h3>
			<span class="video-meta">
									<!-- <a href="http://videomag.orange-themes.com/tammy-trailer-2/#comments">
						<i class="fa fa-comment"></i> 0					</a> -->
													<a href="#"><i class="fa fa-eye"></i>{{ $value->views->count() }}</a>
													<!-- <a href="http://videomag.orange-themes.com/tammy-trailer-2/"><i class="fa fa-heart"></i>16</a> -->
							</span>
			<p>{{ $value->description }}</p>
		</div>
	<!-- END .item -->
	</div>

@endforeach

		@include('include.pagination')

									<!-- END .video-lis-->
		</div>				


	
	<!-- END .content-panel -->
	</div>			<!-- END .with-sidebar-layout -->
			</div>
				
@endsection