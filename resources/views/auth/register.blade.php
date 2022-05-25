@extends('layouts.guest')

@section('content')

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('vendors/images/register-page-img.png') }}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <div class="login-title">
                                <h2 class="text-center text-primary">{{ __('Register') }}</h2>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="icon-copy ion-information-circled"></i> {{$error}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                            <form class="tab-wizard2 wizard-circle wizard" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-group custom">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-email1"></i></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                        <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                                        <div class="input-group mb-0">
                                            <a href="{{ route('login') }}">{{ __('Already have register?') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
