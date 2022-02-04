@extends('layouts.main-layout')
@section('content')

<h1>login</h1>

<form action="route{{'login'}}" method="POST">

    @method('POST')
    @csrf

    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" value="login">
</form>
    
@endsection