@extends('layouts.new_app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <h2>Register New Account</h2>
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>



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


                            <form class="pt-3" method="POST" action="/register">
                                @csrf
                                <div class="form-group">

                                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                                        placeholder="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">

                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        placeholder="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">

                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="Password" value="{{ old('password') }}" required>
                                </div>

                                <div class="form-group">

                                    <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password"
                                        value="{{ old('password_confirmation') }}" required>


                                </div>
                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="{{ route('login') }}" class="text-primary">Login</a>
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
