@extends('frontend.layouts.master')
@section('content')

@extends('frontend.auth.layouts.master')
@section('content')

<!-- login Area Strat-->
<section class="login-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Logout Account Please</h3>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}" class="btn theme-btn w-100" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->

@endsection


@endsection