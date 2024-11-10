@extends('base_view')

@section('main')
    <form action="{{route('auth.logout.action')}}" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>
@endsection
