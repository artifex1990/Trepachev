@extends('forms.template')

@section('title', 'Формы')

@section('content')
<h2>Only</h2>
<ul>
@foreach ($only as $elem)
    <li>{{ $elem }}</li>
@endforeach
</ul>

<h2>Except</h2>
<ul>
@foreach ($except as $elem)
    <li>{{ $elem }}</li>
@endforeach
</ul>
@endsection

