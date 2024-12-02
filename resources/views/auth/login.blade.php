@extends('base_view')

@section('main')
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <div class="container min-vh-100">
        <div class="row mt-3">
            <div class="col d-none d-sm-block">
                <h1>This is Banner</h1>
            </div>
            <div class="col-md px-3">
                <h1 class="text-center">Login</h1>
                <form action="{{route('auth.login.action', absolute: false)}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                        <input type="password" name="password" id="txtLoginPwd" class="form-control">
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
            <span class="m-auto">codingduluaja-cms v20241202</span>
        </div>
    </div>
@endsection
