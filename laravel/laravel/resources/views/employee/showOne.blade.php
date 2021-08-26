<!DOCTYPE html>
<html>
	<head>
		<title>Employee</title>
	</head>
	<body>
        <p class="{{ $class }}">Имя пользователя: <b>{{ $user['name'] }}</b></p>
        <p style="{{ $style }}">Фамилия пользователя: <b>{{ $user['surname'] }}</b></p>
        <p>Зарплата пользователя: <b>{{ $user['salary'] }}</b></p>
		<p>Страна пользователя: {{ $user['location']['country'] ?? 'Россия' }}</p>
		<p>Города пользователя: {{ $user['location']['city'] ?? 'Москва' }}</p>
		<p>Количество полей у пользователя {{ count($user) }}</p>
		<p><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></p>

		<p>Переданный год: {{ $year ?? date('Y') }}</p>
		<p>Переданный месяц: {{ $month ?? date('m') }}</p>
		<p>Переданный день: {{ $day ?? date('d') }}</p>

		{{-- <p>Неэкранированные данные: {!! $str !!}</p> --}}

		@php
			echo 'Это очень не логичное использование php прямо тут!=)<br>';
		@endphp

		<input type="text" value="{{ $user['name'] }}">
		<input type="text" value="{{ $user['surname'] }}">
		<input type="text" value="{{ $user['salary'] }}">
	</body>
</html>