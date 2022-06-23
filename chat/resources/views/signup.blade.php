@extends('layouts.app')

@section('title')
Sigup
@endsection

@section('body')

    <form class="signup" action="">
        <h1>Login to your account</h1>
        <input type="email" placeholder="name.surname@ufaz.az">
        <input type="password" placeholder="password"><br>
        <a href="signup">Already have have an account?</a>
    </form>
    <h1 id="greeting">Welcome to UFAZ site!</h1>
@endsection