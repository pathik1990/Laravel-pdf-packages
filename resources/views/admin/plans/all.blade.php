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
                <h4 class="text-blue h4">All Plans / Packages</h4>
                <p class="mb-0">list of Plans or package of users.</p>
            </div>
        </div>

        <div class="pb-20">
            <table class="data-table table stripe hover nowrap" id="plansPackagesDetails">
                <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Package Usage</th>
                    <th>Total Package</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Payment Status</th>
                    <th>Creation Date</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($plansAndPackages as $plansAndPackage)
                    <tr>
                        <td>{{ $plansAndPackage->package_name }}</td>
                        <td>{{ $plansAndPackage->usage_package }}</td>
                        <td>{{ $plansAndPackage->total_package }}</td>
                        <td>{{ $plansAndPackage->user->name }}</td>
                        <td>{{ $plansAndPackage->user->email }}</td>
                        <td>{{ $plansAndPackage->payments->payment_status }}</td>
                        <td class="table-plus">{{ \Carbon\Carbon::parse($plansAndPackage->created_at)->format('d M Y, h:m:s A') }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#" data-target-url="{{ route('plans-packages-view', $plansAndPackage->id) }}" data-toggle="modal" data-target="#plans-package-modal"><i class="dw dw-eye"></i> View</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('admin.modal.view_plans_package')
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

    <script>
        $(document).ready(function(){
            $('#plans-package-modal').on('show.bs.modal', function(e) {
                var route = $(e.relatedTarget).data('target-url');
                $.ajax({
                    url: route,
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    dataType: 'json',
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    complete: function () {
                        $("#loading").hide();
                    },
                    success: function (data) {
                        $(document).find('.package_name').html(data.plans_package[0].package_name);
                        $(document).find('.progress-bar').html(data.plans_package[0].percentage + '%');
                        $(document).find('.total_package').html(data.plans_package[0].total_packages);
                        $(document).find('.usage_package').html(data.plans_package[0].usage_packages);
                        $(document).find('.package_created_at').html(data.plans_package.created_at);
                        $(document).find('.progress-bar').css({"width": data.plans_package[0].percentage + '%'});

                        $(document).find('.user_created_at').html(data.user_details.created_at);
                        $(document).find('.user_name').html(data.user_details.user_name);
                        $(document).find('.user_email').html(data.user_details.user_email);

                        $(document).find('.payment_created_at').text(data.payment_details.created_at);
                        $(document).find('.payment_id val').text(data.payment_details.transaction_id);
                        $(document).find('.amount val').text(data.payment_details.amount);
                        $(document).find('.currency val').text(data.payment_details.currency);
                        $(document).find('.payment_status val').text(data.payment_details.payment_status);
                    }
                });
            });
        });
    </script>
@endsection