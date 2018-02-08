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
			<div class="col-md-12"></div>
			<br> 
			<br>
			<a href="{{ route('blog.create') }}" class="btn btn-info"  > Create Blog</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>
							Id
						</th>
						<th>Title</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Blog title</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div> 
	</div>
</body>
</html>