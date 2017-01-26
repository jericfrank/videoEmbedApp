@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Category</div>

				<div class="panel-body">

					<div class="row">
						<div class="col-md-7">
							
							@foreach(App\Category::where('user_id', '=', Auth::user()->id)->get() as $value)

								<li><strong>{{ $value->title }}</strong> {{ $value->description }} <a href="{{ route('category.edit', $value->id) }}">edit</a></li>
							@endforeach

						</div>
						<div class="col-md-5">
							
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Errors!</strong> <br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							<form method="POST" action="{{ route('category.store') }}" accept-charset="UTF-8">
		    					<input name="_token" type="hidden" value="{{ csrf_token() }}">
							  	<div class="form-group">
							    	<label>Title</label>
							    	<input type="text" name="title" class="form-control">
							  	</div>
							  	<div class="form-group">
							    	<label>Description</label>
							    	<textarea class="form-control" name="description"></textarea>
							  	</div>
							  
							  	<button type="submit" class="btn btn-default">Submit</button>
							</form>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
