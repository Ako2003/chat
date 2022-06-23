@extends('layouts.app')

@section('title')
Login
@endsection

@section('body')
<form class="login" action="">
    <h1>Login to your account</h1>
    <input type="email" placeholder="name.surname@ufaz.az">
    <input type="password" placeholder="password"><br>
    <a href="signup">Still do not have an account?</a>
</form>
@endsection