<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-12">
	 			<br>
	 			<a href=" {{route("student.create") }}" class="btn btn-primary">ADD NEW STUDENT</a>
	 			<br><br>
	 			<table class="table table-striped">
	 				<thead>
	 					<tr>
	 						<th>
	 							ID
	 						</th>
	 						<th>
	 							Name
	 						</th>
	 						<th>
	 							Email
	 						</th>
	 						<th>
	 							Address
	 						</th>
	 						<th>
	 							education
	 						</th>
	 					</tr>
	 				</thead>

	 				<tbody>
	 					<tr>
	 						<td>1</td>
	 						<td>Mg Mg</td>
	 						<td>hellowelcome@gmail.com</td>
	 						<td>yangon</td>
	 						<td>high school</td>
	 					</tr>
	 				</tbody>


	 			</table>
	 		</div>
	 	</div>
	 </div>
</body>
</html>