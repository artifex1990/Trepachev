<!DOCTYPE html>
<html>
	<head>
		<title>Employee</title>
	</head>
	<body>
        <p class="{{ $class }}">Имя пользователя: <b>{{ $FIO['name'] }}</b></p>
        <p style="{{ $style }}">Фамилия пользователя: <b>{{ $FIO['surname'] }}</b></p>
        <p>Зарплата пользователя: <b>{{ $FIO['salary'] }}</b></p>
		<p><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></p>

		<input type="text" value="{{ $FIO['name'] }}">
		<input type="text" value="{{ $FIO['surname'] }}">
		<input type="text" value="{{ $FIO['salary'] }}">
	</body>
</html>