@extends('posts.template')

@section('title', $title)

@section('content')
    <table>
        <tr>
            <th>Название продукта</th>
            <th>Цена</th>    
        </tr>
        @foreach ($products as $key => $product)
            <tr>
                <td><a href="/product/{{ $categoryId }}/{{ $key }}">{{ $product['name'] }}</a></td>
                <td>{{ $product['cost'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection