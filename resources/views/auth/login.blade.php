@extends('base_view')

@section('main')
    <form action="{{route('auth.login.action', absolute: false)}}" method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <button type="submit">login</button>
    </form>
    <a href="{{route('auth.register.page', absolute: false)}}">register</a>
@endsection
