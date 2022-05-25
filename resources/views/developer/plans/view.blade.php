@extends('theme.default')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
@endsection

@section('content')
    @if(\Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="icon-copy ion-checkmark-round"></i> {{ \Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        {{ \Session::forget('error') }}
    @endif
    @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon-copy ion-checkmark-round"></i> {{ \Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        {{ \Session::forget('success') }}
    @endif

    @if( isset($plansAndPackages))
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Current Active Plan</h4>
                            <p class="">{{ $plansAndPackages['usage_packages'] }} / {{ $plansAndPackages['total_packages'] }} processed files on current plan</p>
                        </div>
                    </div>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $plansAndPackages['percentage'] }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $plansAndPackages['percentage'] }}%</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-7 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Prepaid packages</h4>
                        <p class="mb-30">Pay as you go</p>
                    </div>
                </div>

                <div class="purchase_opt mb-30">
                    <label>How many pay stubs do you need to process?</label>
                </div>
                <div class="range_price mb-30">
                    <input id="range_01" />
                </div>
                <div class="cst_text">
                    <p>The first 250 files per month are FREE for all our API clients</p>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">My Order</h4>
                        <p class="mb-30">Purchase your order using PayPal/Credit Card</p>
                    </div>
                </div>
                <div class="cart_body">
                    <div class="row">
                        <div class="col col-md-6">
                            <span class="cart_label"><files>10</files> PDF</span>
                        </div>
                        <div class="col col-md-6">
                            <span class="cart_price pull-right">$<price>69.9</price></span>
                        </div>
                    </div>
                </div>
                <div class="cart_total">
                    <div class="row">
                        <div class="col col-md-6">
                            <span class="cart_total_label">Total</span>
                        </div>
                        <div class="col col-md-6">
                            <span class="cart_total_price pull-right">$<price>69.9</price></span>
                        </div>
                    </div>
                </div>
                <div class="cart_payout">
                    <form action="{{ route('processTransaction') }}" method="get">
                        @csrf
                        <input type="hidden" name="amount" id="package_amount" value="69.9">
                        <input type="hidden" name="name" value="Prepaid Plan">
                        <input type="hidden" name="package_quantity" id="package_quantity" value="10">
                        <input type="submit" class="btn btn-primary" name="submit" value="Pay with PayPal">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-js')

@endsection