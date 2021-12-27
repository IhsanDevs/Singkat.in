@extends('layouts.auth')
@section('container')
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            @include('auth.partials.brand')

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Register</h4>
                </div>

                <div class="card-body">
                    @include('partials.alert')

                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="username" class="form-control" value="{{ old('name') }}"
                                name="name">
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" value="{{ old('email') }}" name="email">
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" class="form-control pwstrength"
                                    data-indicator="pwindicator" name="password">
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="password2" class="d-block">Repeat Password</label>
                                <input id="password2" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="true" {{ !old('terms') ?: 'checked' }} name="terms"
                                    class="custom-control-input" id="agree">
                                <label class="custom-control-label" for="agree">I agree with the <a href="#">terms and
                                        conditions</a></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                        </div>
                </div>
                </form>
            </div>

            @include('auth.partials.footer')
        </div>
    </div>
@endsection
