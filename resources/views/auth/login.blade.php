@extends('base_view')

@section('main')
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <form action="{{route('auth.login.action', absolute: false)}}" method="post">
        @csrf
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <label for="rememberMe">remember me</label>
        <input type="checkbox" name="rememberMe" id="rememberMe" value="true">

        <button type="submit">login</button>
    </form>
    <a href="{{route('auth.register.page', absolute: false)}}">register</a>
@endsection
