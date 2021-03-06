@extends('posts.template')

@section('title', 'Список страниц')

@section('content')
    @foreach ($posts as $key => $post)
        <div class="post">
            <h2>{{ $post['title'] }}</h2>
            <div class="info">
                <span class="date">{{ $post['date'] }}</span>
                <span class="author">{{ $post['author'] }}</span>
            </div>
            <div class="text">
                {{ $post['teaser'] }}
            </div>
            <div class="more">
                <a href="/post/{{ $key }}">подробнее...</a>
            </div>
        </div>
    @endforeach
@endsection