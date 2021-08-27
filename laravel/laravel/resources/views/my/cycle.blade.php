@extends('template')

@section('title', $title)

@section('sidebar')
    @parent
	<p>{{ $aside }}</p>
@endsection

@section('content')
<ul>
    @foreach ($arr as $elem)
        <li>{{ sqrt(pow($elem, 2)) }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($aStr as $key => $elem)
        <li>{{ $key + 1 }}: {{ $elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($arr as $elem)
        @if ($elem % 2 == 0)
            <li>{{ $elem }}</li>
        @endif
    @endforeach
</ul>

@if (is_numeric($data))
    <p>{{ $data }}</p>
@else
    <ul>
        @foreach ($data as $elem)
            <li>{{ $elem }}</li>
        @endforeach
    </ul>
@endif


<table>
    @foreach ($nums as $row)
        <tr>
            @foreach ($row as $elem)
                <td>{{ $elem }}</td>
            @endforeach
        </tr>
    @endforeach
</table>


@foreach ($employees as $employee)
<ul>
    @foreach ($employee as $property)
        <li>{{ $property }}</li>
    @endforeach
</ul>
@endforeach

<table>
    @foreach ($employees as $employee)
    <tr>
        @foreach ($employee as $property)
            <td>{{ $property }}</td>
        @endforeach
    </tr>
    @endforeach
</table>

<ul>
    @foreach ($aStr as $elem)
        <li>{{ $loop->index }}: {{ $elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($aStr as $elem)
        <li>{{ $loop->iteration }}: {{ $elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($aStr as $elem)
        @if ($loop->first)
            <li class='first'>
        @elseif ($loop->last)
            <li class='last'>
        @else
            <li>
        @endif
        {{ $loop->index }}: {{ $elem }}
        </li>
    @endforeach
</ul>

<p>
    @foreach ($arr as $elem)
        @if ($loop->remaining > 2)
            <b>{{ $elem }}</b>
        @else
            <i>{{ $elem }}</i>
        @endif
    @endforeach
</p>

<p>
    @foreach ($arr as $elem)
        @if ($loop->remaining > 2)
            <b>{{ $elem }}</b>
        @else
            @break
            <i>{{ $elem }}</i>
        @endif
    @endforeach
</p>

<p>
    @foreach ($arr as $elem)
        @if ($loop->remaining > 2)
            @continue
            <b>{{ $elem }}</b>
        @else
            <i>{{ $elem }}</i>
        @endif
    @endforeach
</p>

<p>
    @forelse ($aEmpty as $elem)
        {{ $elem }}
    @empty
        В массиве нет элементов
    @endforelse
</p>


@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor
@endsection