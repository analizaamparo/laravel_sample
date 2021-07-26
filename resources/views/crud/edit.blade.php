<!DOCTYPE html>
<html>
<head>
	<title>Edit/Update</title>
</head>
<body>
	<h1>Edit student name {{ $profile->fname }}</h1>
	<form action="{{ route('profile.update') }}" method="POST">
		@csrf

		<div>
			<input type="hidden" name="id" value="{{ $profile->id }}">
			<label>Full name</label>
			<input type="text" name="fullname" value="{{$profile->fname }}">
		</div>
		<div>
			<label>Age</label>
			<input type="number" name="age" value="{{ $profile->age}}">
		</div>
		<button type="submit">Update</button>
	</form>
	@if(isset($message))
		<p>{{$message}}</p>
	@endif
</body>
</html>