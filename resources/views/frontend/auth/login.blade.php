@extends('frontend.auth.layouts.master')
@section('content')

<!-- login Area Strat-->
<section class="login-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Login From Here</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="name">Email Address <span>**</span></label>
                        <input id="name" name="email" type="email" placeholder="Enter Email address..." />
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" name="password" type="password" placeholder="Enter password..." />
                        <div class="login-action mb-20 fix">
                            <span class="log-rem f-left">
                                <input id="remember" type="checkbox" />
                                <label for="remember">Remember me!</label>
                            </span>
                            <span class="forgot-login f-right">
                                <a href="#">Lost your password?</a>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-icon-green w-100">Login Now</button>
                        <div class="or-divide"><span>or</span></div>
                        <a href="{{ route('register') }}" class="btn theme-btn w-100">Register Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->

@endsection