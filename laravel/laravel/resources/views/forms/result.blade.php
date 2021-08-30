@extends('forms.template')

@section('title', 'Ответ')

@section('content')
<p>Сумма равна {{ $result ?? '' }}</p>
@endsection