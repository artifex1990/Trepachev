@extends('template');

@section('title', 'sessions')

@section('content')
{{ $sessionElement ?? ''}}
{{ $datas ?? ''}}
@endsection