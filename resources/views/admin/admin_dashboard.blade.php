@extends('theme.default')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">

                    <div class="widget-data">
                        <div class="h4 mb-0">{{ $totalUsers }}</div>
                        <div class="weight-600 font-14">Total Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">

                    <div class="widget-data">
                        <div class="h4 mb-0">{{ $payments }}</div>
                        <div class="weight-600 font-14">Total Orders</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">

                    <div class="widget-data">
                        <div class="h4 mb-0">350</div>
                        <div class="weight-600 font-14">Campaign</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">

                    <div class="widget-data">
                        <div class="h4 mb-0">$6060</div>
                        <div class="weight-600 font-14">Worth</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--<div class="col-lg-7 col-md-12 col-sm-12 mb-30">
            <div class="card-box pd-30 height-100-p">
                <h4 class="mb-30 h4">Compliance Trend</h4>
                <div id="compliance-trend" class="compliance-trend"></div>
            </div>
        </div>-->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
            <div class="card-box pd-30 height-100-p">
                <h4 class="mb-30 h4">Records</h4>

                <div id="chart" class="chart"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
            <div class="card-box pd-30 pt-10 height-100-p">
                <h2 class="mb-30 h4">Browser Visit</h2>

                <div class="browser-visits">
                    <ul>
                        <li class="d-flex flex-wrap align-items-center">
                            <div class="icon"><img src="vendors/images/chrome.png" alt=""></div>
                            <div class="browser-name">Google Chrome</div>
                            <div class="visit"><span class="badge badge-pill badge-primary">50%</span></div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center">
                            <div class="icon"><img src="vendors/images/firefox.png" alt=""></div>
                            <div class="browser-name">Mozilla Firefox</div>
                            <div class="visit"><span class="badge badge-pill badge-secondary">40%</span></div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center">
                            <div class="icon"><img src="vendors/images/safari.png" alt=""></div>
                            <div class="browser-name">Safari</div>
                            <div class="visit"><span class="badge badge-pill badge-success">40%</span></div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center">
                            <div class="icon"><img src="vendors/images/edge.png" alt=""></div>
                            <div class="browser-name">Microsoft Edge</div>
                            <div class="visit"><span class="badge badge-pill badge-warning">20%</span></div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center">
                            <div class="icon"><img src="vendors/images/opera.png" alt=""></div>
                            <div class="browser-name">Opera Mini</div>
                            <div class="visit"><span class="badge badge-pill badge-info">20%</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
            <div class="card-box pd-30 pt-10 height-100-p">
                <h2 class="mb-30 h4">World Map</h2>

                <div id="browservisit" style="width:100%!important; height:380px"></div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
    <script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
    <script src="{{ asset('src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/dashboard2.js') }}"></script>
@endsection