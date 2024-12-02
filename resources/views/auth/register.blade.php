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
            <div class="col col-md-6 mx-auto">
                <h1 class="text-center">Register</h1>
                <form action="{{route('auth.register.action', absolute: false)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
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
                    <div class="form-group">
                        <label for="passwordConfirmation">Confirm Password</label>
                        <input class="form-control" type="password" name="passwordConfirmation" id="passwordConfirmation">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                    </div>
                </form>
                <div class="dropdown-divider"></div>
                <div class="text-right">
                    <a href="{{route('auth.login.page', absolute: false)}}">Login</a>
                </div>

            </div>
        </div>
        <div class="row fixed-bottom">
            <span class="m-auto">{{ config('app.name').' v'.config('app.version') }}</span>
        </div>
    </div>
@endsection
