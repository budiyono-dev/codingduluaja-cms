@extends('base_view')

@section('main')
    <form action="{{route('auth.logout.action')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm">logout</button>
    </form>
@endsection
