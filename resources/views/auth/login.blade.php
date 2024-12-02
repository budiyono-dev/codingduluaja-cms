@extends('base_view')

@section('main')
    @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container min-vh-100 pt-3">
        <div class="row ">
            <div class="col d-none d-md-block">
                <h1>This is Banner</h1>
            </div>
            <div class="col-md">
                <h1 class="text-center">Login</h1>
                <form action="{{route('auth.login.action', absolute: false)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="txtLoginPwd" class="form-control" required>
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button" id="btnShowPassword">Show</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="rememberMe" id="rememberMe" value="true" class="form-check-input">
                        <label for="rememberMe" class="form-check-label">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-light">Login</button>
                </form>
                <div class="dropdown-divider"></div>
                <div class="text-right">
                    <a href="{{route('auth.register.page', absolute: false)}}">register</a>
                </div>
            </div>
        </div>
        <div class="row fixed-bottom">
            <span class="m-auto">{{ config('app.name').' v'.config('app.version') }}</span>
        </div>
    </div>
@endsection
