@extends('base_view')

@section('main')
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <form action="{{route('auth.register.action', absolute: false)}}" method="post">
        @csrf
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <label for="passwordConfirmation">confirm password</label>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation">

        <button type="submit">register</button>
    </form>
    <a href="{{route('auth.login.page', absolute: false)}}">login</a>
@endsection
