@extends('forms.template')

@section('title', 'Ответ')

@section('content')
<p>Сумма равна {{ $result ?? '' }}</p>
<p>Метод запроса {{ $method ?? '' }}</p>
@endsection