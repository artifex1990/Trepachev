@extends('forms.template')

@section('title', 'Формы')

@section('content')
<form action="/forms/result/">
    <input type="text" name='num1'>
    <input type="text" name='num2'>
    <input type="text" name='num3'>
    <input type="submit" value='Отправить'>
</form>
@endsection

