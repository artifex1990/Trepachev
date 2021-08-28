@extends('posts.template')

@section('title', $error)

@section('content')
<div class="text">
    {{ $error }}
</div>
@endsection