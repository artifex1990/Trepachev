<!DOCTYPE html>
<html>
	<head>
		<title>Employee</title>
	</head>
	<body>
        @if ($numberMonth > 0 && $numberMonth < 3 || $numberMonth == 12)
            <p>Зима</p>
        @elseif ($numberMonth > 2 && $numberMonth < 6)
            <p>Весна</p>
        @elseif ($numberMonth > 5 && $numberMonth < 9)
            <p>Лето</p>
        @elseif ($numberMonth > 8 && $numberMonth < 12)
            <p>Осень</p>
        @else
            <p>Время года не распозано!</p>
        @endif
	</body>
</html>