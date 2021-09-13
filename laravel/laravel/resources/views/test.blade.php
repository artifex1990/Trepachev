<!DOCTYPE html>
<html>
	<head>
		<title>My view</title>
	</head>
	<body>
		<h3>{{ $error }}</h3>
        <form action="" method="POST">
			{{ csrf_field() }}
			<input type="text" name="nums">
			<input type="submit" value="submit">
		</form>
	</body>
</html>