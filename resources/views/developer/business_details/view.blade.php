@extends('theme.default')

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
                <h4 class="text-blue h4">Business Details</h4>
                <p class="mb-30">For your identity</p>
            </div>
        </div>
        <form method="post" action="{{ route('update-business-details', $businessDetails->id) }}">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Company Name') }}</label>
                        @if( !empty($businessDetails->company_name) )
                            <input class="form-control" type="text" name="company_name" id="company_name" value="{{ $businessDetails->company_name }}" >
                        @else
                            <input class="form-control" type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" >
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Website URL') }}</label>
                        @if( !empty($businessDetails->website_url) )
                            <input class="form-control" type="text" name="website_url" id="website_url" value="{{ $businessDetails->website_url }}" >
                        @else
                            <input class="form-control" type="text" name="website_url" id="website_url" value="{{ old('website_url') }}" >
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Company Address') }}</label>
                        @if( !empty($businessDetails->address) )
                            <input class="form-control" type="text" name="address" id="address" value="{{ $businessDetails->address }}" >
                        @else
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address') }}" >
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('City') }}</label>
                        @if( !empty($businessDetails->city) )
                            <input class="form-control" type="text" name="city" id="city" value="{{ $businessDetails->city }}">
                        @else
                            <input class="form-control" type="text" name="city" id="city" value="{{ old('city') }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('State') }}</label>
                        @if( !empty($businessDetails->state) )
                            <input class="form-control" type="text" name="state" id="state" value="{{ $businessDetails->state }}">
                        @else
                            <input class="form-control" type="text" name="state" id="state" value="{{ old('state') }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Country') }}</label>
                        <select class="custom-select2 form-control" id="country" name="country">
                            <option value="India" {{$businessDetails->country == 'India'  ? 'selected' : ''}}>India</option>
                            <option value="United States of America" {{$businessDetails->country == 'United States of America'  ? 'selected' : ''}}>United States of America</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Postal Code') }}</label>
                        @if( !empty($businessDetails->postal_code) )
                            <input class="form-control" type="text" name="postal_code" id="postal_code" value="{{ $businessDetails->postal_code }}">
                        @else
                            <input class="form-control" type="text" name="postal_code" id="postal_code" value="{{ old('postal_code') }}">
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="input-group mb-0">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection