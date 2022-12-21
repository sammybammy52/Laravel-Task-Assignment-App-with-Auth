@extends('layouts.new_app')

@section('content')


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <h2>Sign in to your account</h2>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @if ($errors->has('email'))
                                            <li>{{ $errors->first('email') }}</li>
                                        @endif

                                        @if ($errors->has('password'))
                                            <li>{{ $errors->first('password') }}</li>
                                        @endif
                                    </ul>

                                </div>
                            @endif

                            <form class="pt-3" method="POST" action="/login">
                                @csrf
                                <div class="form-group">

                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        placeholder="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">

                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="Password" required>
                                </div>
                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>

                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="{{ route('register') }}" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
