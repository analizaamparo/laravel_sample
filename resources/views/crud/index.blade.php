<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<a href="{{ route('profile.create') }}">Add Student</a>
	<h1>Profile</h1>
	<table border="1">
		<thead>
			<tr>
				<td>Name</td>
				<td>Age</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($listofprofile as $value)
			<tr>
				<td>{{ $value->fname }}</td>
				<td>{{ $value->age }}</td>
				<td><a href="{{ route('profile.edit',['id'=>$value->id])}}">Edit</a>
					<br>
					<a href="{{ route('profile.delete',['id'=>$value->id])}}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@if(isset($message))
		<p>{{$message}}</p>
	@endif
</body>
</html>