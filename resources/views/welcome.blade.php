<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
	<!-- BEGIN head -->
	<head>
		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>EmbedVideoApp @yield('title')</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="/css/reset.css" />
		<link type='text/css' rel='stylesheet' href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' />
		<link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/ot-menu.css" />
		<link type="text/css" rel="stylesheet" href="/css/main-stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="/css/shortcodes.css" />
		<link type="text/css" rel="stylesheet" href="/css/responsive.css" />
		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="/css/ie-ancient.css" />
		<![endif]-->
		<!-- Latest compiled and minified CSS -->
		
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<body>


		<div class="boxed">
			
			@include('include.header')
			
			<!-- BEGIN .content -->
			<section class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					@yield('content')
					
					
				</div>
				
			<!-- BEGIN .content -->
			</section>
			
			@include('include.footer')
			

		</div>




		
		<!-- Scripts -->
		<script type="text/javascript" src="/jscript/jquery-latest.min.js"></script>
		<script type="text/javascript" src="/jscript/ot-menu.js"></script>
		<script type="text/javascript" src="/jscript/theme-scripts.js"></script>
		<script type="text/javascript" src="/jscript/jwplayer.js"></script>


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-85875901-1', 'auto');
		  ga('send', 'pageview');

		</script>

	<!-- END body -->
	</body>
<!-- END html -->
</html>