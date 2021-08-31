@extends('forms.template')

@section('title', '13 урок')

@section('content')
<form action="" method="POST">
    {{ csrf_field() }}
    <label for="name">Имя: </label>
    <input type="text" name="name">
    <br>
    <label for="surname">Фамилия: </label>
    <input type="text" name="surname">
    <br>
    <label for="email">e-mail: </label>
    <input type="text" name="email">
    <br>
    <label for="login">Логин: </label>
    <input type="text" name="login">
    <br>
    <label for="password">Пароль: </label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Отправить">
</form>
@endsection