<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Create Student</h1>

				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<form action="{{ route('student.store')}}" method="post">
					{{ csrf_field() }}

					<div class ="form-group">
						<label for="Name">Name</label>
						<input type="text" name="name" class="form-control" id="title" placeholder="name here" value="{{ old("name") }}"  >
					</div>
					<div class ="form-group">
						<label for="Email">Email</label>
						<input type="Email" name="Email" class="form-control" id="title" placeholder="gmail here" value="{{ old("email") }}">
					</div>
					<div class="form-group">
						<label for="Address">Address</label>
						<textarea name="Address" class="form-control"> {{ old("address") }} </textarea>
					</div>
					<div class ="form-group">
						<label for="education">Education</label>
						<input type="text" name="education" class="form-control" id="title" placeholder="education here" value="{{ old("education") }}">
					</div>
					<br> <br>
					<button type="submit" class="btn btn-default">Submit
						</button>

					
				</form>
			</div>
		</div>
	</div>
</body>
</html>