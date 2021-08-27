<ul>
    @foreach ($links as $link)
        <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
    @endforeach
</ul>

<table>
    <tr>
        <th>id</th>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Зарплата</th>
	</tr>
    @foreach ($employees as $employee)
        <tr>
            @if ($employee['salary'] > 2000)
            <td>{{ $loop->iteration }}</td>
                @foreach ($employee as $property)
                    <td>{{ $property }}</td>
                @endforeach
            @endif
        </tr>
    @endforeach
</table>

<table>
    <tr>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Статус</th>
	</tr>
    @foreach ($users as $user)
        <tr style="color: {{ $user['banned'] ? 'red' : 'green' }}">
            @foreach ($user as $key => $property)
                @if ($key == 'banned')
                    <td>{{ $property ? 'забанен' : 'активен' }}</td>
                @else
                    <td>{{ $property }}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>


<form>
    @foreach ($aStr as $elem)
        <input name="{{ $elem }}" value="{{ $elem }}">
    @endforeach
    <select>
        @foreach ($aStr as $elem)
            <option value="{{ $elem }}" {{ $loop->index == 1 ? 'selected' : '' }}>{{ $elem }}</option>
        @endforeach
    </select>
</form>

<ul>
    @foreach ($calendar as $day)
        <li {{ $day == date('d') ? "class=active" : "" }}>{{ $day }}</li>
    @endforeach
</ul>