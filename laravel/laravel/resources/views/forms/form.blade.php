@extends('forms.template')

@section('title', 'Формы')

@section('content')
    <p>Сумма равна {{ $result ?? '' }}</p>
    @if (!isset($result))
    <form action="">
        <input type="text" name='num1'>
        <input type="text" name='num2'>
        <input type="submit" value='Отправить'>
    </form>
    @endif
@endsection

