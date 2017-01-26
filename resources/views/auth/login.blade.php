@extends('welcome')

@section('title')
- Login
@endsection

@section('content')
	<style type="text/css">
		.login {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

	</style>

	<!-- BEGIN .with-sidebar-layout -->
	<div class="with-sidebar-layout left">


		<div class="content-panel">
			<div class="panel-title">
				<h2>Login <small>for those premium account!</small></h2>

			</div>
			
			<div class="panel-block">
				<div class="panel-content">
					@if (count($errors) > 0)
						<strong>Errors!</strong> <br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					@endif
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<p>
							<input class="login" type="text" class="" placeholder="User" name="email"/>
						</p>
						<p>
							<input class="login" type="password" class="" placeholder="Password" name="password"/>
						</p>
						<p>
							<input type="submit" style="background-color: #373737 !important;" class="button" value="Submit" />
						</p>
					</form>
				</div>
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

		<!-- BEGIN .widget -->
		<div class="widget">
			<h3>Featured Videos</h3>
			<div class="widget-videos">
				
				@include('include.featured')
				
				

			</div>
		<!-- END .widget -->
		</div>

	<!-- END #sidebar -->
	</aside>


@endsection



<!-- 


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/manage/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->