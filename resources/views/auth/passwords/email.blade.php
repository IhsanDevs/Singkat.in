@extends('layouts.auth')

@section('container')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        @include('auth.partials.brand')

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Forgot Password</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted">We will send a link to reset your password</p>

                                @if (session('status'))
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>

                                            <script>
                                                $(".alert").alert();
                                            </script>
                                        </div>
                                    </div>
                                @endif
                                @error('email')
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <span>{{ $message }}</span>
                                            </div>

                                            <script>
                                                $(".alert").alert();
                                            </script>
                                        </div>
                                    </div>
                                @enderror
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                    </div>

                                    <script>
                                        $(".alert").alert();
                                    </script>
                                    </span>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Forgot Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @include('auth.partials.footer')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
