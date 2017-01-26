@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Embed</div>

				<div class="panel-body">
	
                    <div class="row">
                        <div class="col-md-7">
                            


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
                            <form method="POST" action="{{ route('embed.update', $embed->id) }}" accept-charset="UTF-8">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <div class="form-group">
                                    <label>Embed Src</label>
                                    <input type="text" name="src" value="{{ $embed->src }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{ $embed->title }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description">{{ $embed->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                            <option selected="" disabled=""></option>
                                        @foreach(App\Category::all() as $value)
                                            <option {{ ($embed->category_id == $value->id) ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Img Link</label>
                                    <input type="text" name="img" value="{{ $embed->img }}" class="form-control">
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
