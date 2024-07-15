@extends('frontend.auth.layouts.master')
@section('content')


<!-- login Area Strat-->
<section class="login-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Signup From Here</h3>
                    <form action="#" method="POST">
                        @csrf
                        <label for="name">Username <span>**</span></label>
                        <input id="name" type="text" placeholder="Enter Username or Email address..." />
                        <label for="email-id">Email Address <span>**</span></label>
                        <input id="email-id" type="text" placeholder="Enter Username or Email address..." />
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" placeholder="Enter password..." />
                        <div class="mt-10"></div>
                        <button type="submit" class="btn theme-btn-2 w-100">Register Now</button>
                        <div class="or-divide"><span>or</span></div>
                        <a href="{{ route('login') }}" class="btn btn-icon-green w-100">login Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->



@endsection