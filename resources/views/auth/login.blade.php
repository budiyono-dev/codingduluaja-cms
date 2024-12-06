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
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-cda-primary">
        <a class="navbar-brand cda-brand" href="#">Codingduluaja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <div class="custom-control custom-switch toggle-dark-mode">
                <input type="checkbox" class="custom-control-input" id="toggleDarkMode">
                <label class="custom-control-label" for="toggleDarkMode">Dark Mode</label>
            </div>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
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
                                <button class="btn btn-outline-dark" type="button" id="btnShowPassword">Show</button>
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

    </div>
    <div class="row bg-cda-primary">
        <span class="m-auto">{{ config('app.name').' v'.config('app.version') }}</span>
    </div>
@endsection
