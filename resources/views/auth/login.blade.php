@extends('layouts.auth')
@section('container')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            @include('auth.partials.brand')

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
                    @include('partials.alert')
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" value="{{ old('email') }}" type="email" class="form-control" name="email"
                                tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                <div class="float-right">
                                    <a href="{{ route('password.request') }}" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                required>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                    id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-4 mb-3">
                        <div class="text-job text-muted">Login With Social</div>
                    </div>
                    <div class="row sm-gutters">
                        <div class="col-6">
                            <a href="/auth/facebook" class="btn btn-block btn-social btn-facebook">
                                <span class="fab fa-facebook"></span> Facebook
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-block btn-social btn-google">
                                <span class="fab fa-google"></span> Google
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="{{ route('register') }}">Create One</a>
            </div>

            @include('auth.partials.footer')
        </div>
    </div>
@endsection
