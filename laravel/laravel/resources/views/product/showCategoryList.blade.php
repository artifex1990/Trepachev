@extends('posts.template')

@section('title', $title)

@section('content')
    <table>
        <tr>
            <th>Название категорий</th>
            <th>Количество продуктов в категории</th>    
        </tr>
        @foreach ($categories as $key => $category)
            <tr>
                <td><a href="/product/{{ $key }}/">{{ $category['name'] }}</a></td>
                <td>{{ count($category['products']) }}</td>
            </tr>
        @endforeach
    </table>
@endsection