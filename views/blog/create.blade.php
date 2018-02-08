<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<link rel="stylesheet" href=" {{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Create Post</h1>

				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form action="{{ route('blog.store')}}" method="post">
					{{ csrf_field() }}

					<div class ="form-group">
						<label for="title">Blog Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="title here" value="{{ old("title") }}">
					</div>

					<div class="form-group">
						<label for="body">Blog body</label>
						<textarea name="body" class="form-control"> {{ old("body") }}</textarea>
						<button type="submit" class="btn btn-default">Submit
						</button>
					</div> 
				</form>
			</div> 
		</div>
	</div>
</body>
</html>