<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<table class="table table-bordered shadow text-center table-striped">  <!-- inbuilt bootstrap table -->
		<tr>
			<th>post id</th>
			<th>Employee name</th>
			<th>Employee position</th>
			<th> delete</th>
			<th> edit</th>
		</tr>
		@foreach($emp as $employee)  <!-- for loop to fetch data --> <!-- for each emp data which is stored as value -->
		<tr>
			<td>{{$employee->id}}</td>
			<td>{{$employee->emp_name}}</td>
			<td>{{$employee->emp_pos}}</td>
			<td><a href="/delete/{{$employee->id}}" class="btn btn-danger">delete</a></td>
			<td><a href="/edit/{{$employee->id}}" class="btn btn-success">edit</a></td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>
