@extends('welcome')

@section('title')
- {{ $embedShow->title }}
@endsection

@section('content')

				<!-- BEGIN .video-slider -->
				<div class="video-slider">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<div class="slider-controls">

							<div class="video-slider-inline">

								<div class="otplayer-wrapper">

									<div class="video-embed">
										<iframe width="853" height="480" src="{{ $embedShow->src }}" frameborder="0" allowfullscreen></iframe>
									</div>

								</div>

							</div>
						</div>
						<div class="video-slider-meta">
							<div class="video-slider-info right">
								<!-- <a href="post.html" class="meta-click"><i class="fa fa-comments"></i> <strong>283</strong> comments</a> -->
								<a href="#" class="meta-click"><i class="fa fa-eye"></i> <strong>{{ $embedShow->views->count() }}</strong> views</a>
								<!-- <a href="#" class="ot-like-button"><i class="fa fa-heart"></i> Like This Video</a> -->
							</div>
							<h3><a href="#">{{ $embedShow->title }}</a></h3>
						</div>
					<!-- END .wrapper -->
					</div>
					<!-- <div class="video-slider-slides">

						<div class="video-slides-inner">

							@foreach($category->embed as $value)
							<div class="item">
								<span class="slider-image left loadingvideo"><img src="images/aspect-px.png" width="16" height="9" class="aspect-px" rel="{{ $value->img }}" alt="" /></span>
								<span class="slider-content">
									<strong><a href="{{ $value->title }}">{{ $value->title }}</a></strong>
									<span>{{ $value->description }}</span>
									<span class="video-meta">
										<span><i class="fa fa-comment"></i>283</span>
										<span><i class="fa fa-eye"></i>829</span>
										<span><i class="fa fa-heart"></i>95</span>
									</span>
								</span>
							</div>
							@endforeach


						</div>

					</div> -->
				<!-- END .video-slider -->
				</div>













				<!-- BEGIN .with-sidebar-layout -->
			<div class="without-sidebar-layout ">


			<!-- BEGIN .content-panel -->
		<div class="content-panel">
							

 
	<div class="panel-title" style="background-color: #373737;">
		<h2>More Videos</h2>
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
	@if( $embedShow->id != $value->id )
											<!-- BEGIN .item -->
	<div class="item post-51 post type-post status-publish format-standard has-post-thumbnail hentry category-experimental category-hd-videos tag-expetendis tag-fierent tag-pertinax">
					<div class="item-header">
					<a href="{{ $value->title }}" class="img-hover-effect loadingvideo">
		<img src="/images/aspect-px.png" width="16" height="9" class="aspect-px" rel="{{ $value->img }}" alt="Tammy Trailer 2" />
	</a>
			</div>
				<div class="item-content">
			<h3><a href="{{ $value->title }}">{{ $value->title }}</a></h3>
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
	@endif
@endforeach

@include('include.pagination')

									<!-- END .video-lis-->
		</div>				
	<div class="pagination">
					</div>
	
	<!-- END .content-panel -->
	</div>			<!-- END .with-sidebar-layout -->
			</div>
				
@endsection