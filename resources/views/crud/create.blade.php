<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<h1>Add student</h1>
	<form action="{{ route('profile.add') }}" method="POST">
		@csrf
		<div>
			<label>Full name</label>
			<input type="text" name="fullname">
		</div>
		<div>
			<label>Age</label>
			<input type="number" name="age">
		</div>
		
		<button type="submit">Add</button>
	</form>
	@if(isset($message))
		<p>{{$message}}</p>
	@endif
</body>
</html>