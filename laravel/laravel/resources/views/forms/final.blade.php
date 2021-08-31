@extends('forms.template')

@section('title', '13 урок')

@section('content')
<ul>
@foreach ($data as $elem)
    <li>{{ $elem }}</li>
@endforeach
</ul>
@endsection