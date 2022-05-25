@extends('theme.default')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
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
    <div class="card-box mb-30">
        <div class="row pd-20">
            <div class="col-md-6 col-sm-12">
                <h4 class="text-blue h4">All Users / Business Details</h4>
                <p class="mb-0">list of users name and business details.</p>
            </div>
            <!--<div class="col-md-6 col-sm-12 text-right">
                <a class="btn btn-primary" href="{{ route('new-project') }}" role="button">
                    <i class="icon-copy ion-plus-round"></i> Add new project
                </a>
            </div>-->
        </div>

        <div class="pb-20">
            <table class="data-table table stripe hover nowrap" id="usersBusinessDetails">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email Address</th>
                    <th>Company Name</th>
                    <th>Website URL</th>
                    <th>Company address</th>
                    <th>Register Date</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($businessLists as $businessList)
                    <tr>
                        <td>{{ $businessList->user->name }}</td>
                        <td>{{ $businessList->user->email }}</td>
                        <td>{{ $businessList->company_name }}</td>
                        <td><a href="{{ $businessList->website_url }}" target="_blank">{{ $businessList->website_url }}</a></td>
                        <td>{{ $businessList->address }}</td>
                        <td class="table-plus">{{ \Carbon\Carbon::parse($businessList->created_at)->format('d M Y') }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <!--<a class="dropdown-item" href=""><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item delete-confirm" href=""><i class="dw dw-delete-3"></i> Delete</a>-->
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('extra-js')
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- buttons for Export datatable -->
    <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
@endsection