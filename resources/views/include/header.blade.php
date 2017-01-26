<header class="header light">

<!-- <script data-cfasync='false' type='text/javascript' src='//clksite.com/adServe/banners?tid=172191_307572_5&tagid=9'></script> -->
<!-- 	<div class="header-upper">

		<div class="wrapper">
			<ul class="left ot-menu-add" rel="Top Menu">
				<li><a href="index.html"><span>Homepage</span></a>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="index-light.html">Homepage (Slider / Light)</a></li>
						<li><a href="index-noslider-dark.html">Homepage (No slider / Dark)</a></li>
						<li><a href="index-noslider-light.html">Homepage (No slider / Light)</a></li>
					</ul>
				</li>
				<li><a href="post.html"><span>Video Post</span></a>
					<ul>
						<li><a href="post.html"><span>Self Hosted (html5)</span></a>
							<ul>
								<li><a href="post.html">Video With Slider</a></li>
								<li><a href="post-noslider.html">Video Without Slider</a></li>
								<li><a href="post-no-comments.html">Video Without Comments</a></li>
								<li><a href="post-no-sidebar.html">Video Without Sidebar</a></li>
								<li><a href="post-left-sidebar.html">Video Sidebar on left side</a></li>
							</ul>
						</li>
						<li><a href="post-jw.html">Self Hosted (JW Player)</a></li>
						<li><a href="post-vine.html"><span>Video From Vine</span></a>
							<ul>
								<li><a href="post-vine.html">Video From Vine (embed)</a></li>
								<li><a href="post-vine-h5.html">Video From Vine (html5)</a></li>
							</ul>
						</li>
						<li><a href="post-youtube.html">Video From YouTube</a></li>
						<li><a href="post-vimeo.html">Video From Vimeo</a></li>
						<li><a href="post-dailymotion.html">Video From DailyMotion</a></li>
						<li><a href="post-twitch.html">Video From Twitch.tv</a></li>
					</ul>
				</li>
				<li><a href="browse.html"><span>Browse</span></a>
					<ul>
						<li><a href="browse.html">Layout #1 (1 video in row)</a></li>
						<li><a href="browse-layout-2.html">Layout #2 (1 video in row HQ)</a></li>
						<li><a href="browse-layout-3.html">Layout #3 (2 videos in row)</a></li>
						<li><a href="browse-layout-4.html">Layout #4 (3 videos in row)</a></li>
						<li><a href="browse-layout-5.html">Layout #5 (No Sidebar)</a></li>
					</ul>
				</li>
				<li><a href="sample.html">Sample Page</a></li>
				<li><a href="full-width.html">Full Width Page</a></li>
				<li><a href="error404.html">Error 404</a></li>
				<li><a href="#" target="_blank"><strong>Buy On Themeforest</strong></a></li>
			</ul>
			<ul class="right">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
			</ul>
			<div class="clear-float"></div>

		</div>
	</div> -->
	
	<!-- BEGIN .wrapper -->
	<div class="wrapper">
		
		<!-- BEGIN .header-content -->
		<div class="header-content">
			<div class="header-logo">
				<!-- <a href="index.html"><img src="/images/header-logo-light.png" width="467" height="60" alt="" /></a> -->
				<h1><a href="#">Video Embedding</a></h1>
			</div>
			<div class="header-banner">
				<a href="#" target="_blank">
					<script data-cfasync='false' type='text/javascript' src='//clksite.com/adServe/banners?tid=172191_307572_6'></script>
				</a>
			</div>
		<!-- END .header-content -->
		</div>

		<!-- BEGIN #main-menu -->
		<nav id="main-menu">
			<div class="search-head">
				<form method="GET" action="/search">
					<input type="text" class="ot-search-field" name="keyword" value="" />
					<input type="submit" class="ot-search-button" value="Search" />
				</form>
			</div>
			<ul class="top-menu ot-menu-add" rel="Main Menu">
				<li><a href="/">Home<i>Lastest videos</i></a></li>
				<li><a href="/popular">Popular<i>Most viewed</i></a></li>
				<li><a href="#"><span>Category<i>On any kind!</i></span></a>
					<ul>
						@foreach(App\Category::all() as $value)
						<li><a href="/categories/{{ $value->title }}">{{ $value->title }}</a></li>
						@endforeach
					</ul>
				</li>
				<li><a href="/auth/login">Login<i>Please here</i></a></li>

			</ul>
			<ul class="bottom-menu ot-menu-add" rel="Categories">
				@foreach(App\Category::all() as $value)
				<li><a href="/categories/{{ $value->title }}">{{ $value->title }}</a></li>
				@endforeach
			</ul>
		<!-- END #main-menu -->
		</nav>
		
	<!-- END .wrapper -->
	</div>
	
<!-- END .header -->
</header>