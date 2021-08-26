<!DOCTYPE html>
<html>
	<head>
		<title>Employee</title>
	</head>
	<body>
        @if ($numberDay == 6) 
            <p>Суббота</p>
        @endif
        @if ($numberDay == 7) 
            <p>Воскресенье</p>
        @endif

        @if ($numberDay > 5)
            <p>Номер дня, соответствует выходному</p>
        @else
            <p>Передан номер дня, рабочей недели</p>
        @endif
	</body>
</html>