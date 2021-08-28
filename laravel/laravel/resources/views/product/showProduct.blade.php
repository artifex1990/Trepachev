@extends('product.template')

@section('title', $product['name'])

@section('content')
<div class="info">
	<p><a href="/product/{{ $categoryInfo['id'] }}">{{ $categoryInfo['name'] }}</a></p>
	<p>Название продукта: <b>{{ $product['name'] }}</b></p>
	<p>Стоимость продукта: <b>{{ $product['cost'] }}</b></p>
	<p>Описание продукта: <b>{{ $product['desc'] }}</b></p>
	<p><b style="color: {{ $product['inStock'] ? 'green' : 'red' }}">{{ $product['inStock']  ? 'Есть в наличии' : 'Нет в наличии' }}</b></p>
</div>
@endsection