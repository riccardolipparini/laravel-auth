@extends('layouts.main-layout')
@section('content')

<h1>login</h1>

<form action="{{ route('login') }}" method="POST">

    @method('POST')
    @csrf

    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
</form>
<hr>

<h1>register</h1>
<form action="{{ route('register') }}" method="POST">

    @method('POST')
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="password_confirmation" placeholder="password-confirm">
    <input type="submit" value="login">
</form>
    
@endsection