@extends('theme.default')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/switchery/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}">

    @if(env('PAYPAL_MODE') == 'sandbox')
        <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
    @else
        <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_LIVE_CLIENT_ID') }}"></script>
    @endif

@endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon-copy ion-checkmark-round"></i> {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">PayPal Details</h4>
                <p class="mb-30">PayPal Sandbox or Live Details</p>
            </div>
        </div>

        <form method="post" action="{{ route('update-paypal-details', $payPalDetails->id) }}">
            @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <label class="weight-600">PayPal Mode</label>
                    <p>
                        <span class="switcher_text1">Sandbox</span><input type="checkbox" id="paypal_mode" value="1" {{ $payPalDetails->status == 1 ? 'checked' : '' }} class="switch-btn" data-color="#ffa500" data-secondary-color="#28a745"><span class="switcher_text2">Live</span>
                    </p>
                    <input type="hidden" name="paypal_mode_check" id="paypal_mode_check" value="{{ $payPalDetails->status }}">
                </div>
            </div>
            <div class="paypal_sandbox" style="display: {{ $payPalDetails->status == 1 ? 'block' : 'none' }}">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('PayPal Sandbox Client ID') }}</label>
                            <input class="form-control" type="text" name="paypal_sandbox_client_id" id="paypal_sandbox_client_id" value="{{ $payPalDetails->paypal_sandbox_client_id }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('PayPal Sandbox Client Secret') }}</label>
                            <input class="form-control" type="text" name="paypal_sandbox_client_secret" id="paypal_sandbox_client_secret" value="{{ $payPalDetails->paypal_sandbox_client_secret }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="paypal_live" style="display: {{ $payPalDetails->status == 0 ? 'block' : 'none' }}">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('PayPal Live Client ID') }}</label>
                            <input class="form-control" type="text" name="paypal_live_client_id" id="paypal_live_client_id" value="{{ $payPalDetails->paypal_live_client_id }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('PayPal Live Client Secret') }}</label>
                            <input class="form-control" type="text" name="paypal_live_client_secret" id="paypal_live_client_secret" value="{{ $payPalDetails->paypal_live_client_secret }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="input-group mb-0">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('extra-js')
    <script src="{{ asset('src/plugins/switchery/switchery.min.js') }}"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="{{ asset('src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <!-- bootstrap-touchspin js -->
    <script src="{{ asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
@endsection