@extends('front.master')

@section('title')
    Login
    @endsection

@section('body')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-90 p-b-30">
                <form class="login100-form validate-form" method="POST" action="{{ url('/login-verify') }}">
                    @csrf
					<span class="login100-form-title p-b-40">
						Login
					</span>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div>
                        <a href="second_step.html" class="btn-login-with bg1 m-b-10">
                            <i class="fa fa-facebook-official"></i>
                            Login with Facebook
                        </a>

                        <a href="second_step.html" class="btn-login-with bg2">
                            <i class="fa fa-google"></i>
                            Login with Google
                        </a>
                    </div>

                    <div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Login with Email
						</span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
                        <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="text" placeholder="Email">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="btn login100-form-btn">Login</button>
                    </div>

                    <div class="container-register-form-btn">
                        <a href="{{ url('/register') }}" class="register-form-btn">Register</a>
                    </div>
                    <div class="forget-pass">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
