@extends('layouts.digi.default')

@section('add-vendor-css')
<link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content-body')
<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Selamat datang di Digi</h4>
        </div>
        <div class="d-none d-md-block">
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer"
                    class="wd-10 mg-r-5"></i> Print</button>
            <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file"
                    class="wd-10 mg-r-5"></i> Generate Report</button>
        </div>
    </div>

    <div class="row row-xs">
        <div class="col-12">
            <div class="card card-body">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="media align-sm-items-center">
                        <div class="tx-40 tx-lg-60 lh-0 tx-primary"><i class="fas fa-file-archive"></i></div>
                        <div class="media-body mg-l-15">
                            <h6 class="tx-12 tx-lg-14 tx-semibold tx-uppercase tx-spacing-1 mg-b-5">Jumlah User(s)</h6>
                            <div class="d-flex align-items-baseline">
                                <h2 class="tx-20 tx-lg-28 tx-normal tx-rubik tx-spacing--2 lh-2 mg-b-0">{{ $users->count() }}</h2>
                                <h6 class="tx-11 tx-lg-16 tx-normal tx-rubik tx-danger mg-l-5 lh-2 mg-b-0"> user(s)</h6>
                                </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row mg-t-20 mg-md-t-0">
                        <button class="btn btn-sm btn-white btn-uppercase pd-x-15"><i data-feather="download" class="mg-r-5"></i> Export CSV</button>
                        <button onclick="window.location.href='{{ route('digi.user.create') }}';" class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5"><i data-feather="plus" class="mg-r-5"></i> Add User</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mg-t-20">
        @if (session('message'))
        <div class="alert alert-success d-flex align-items-center" role="alert"><i data-feather="alert-circle" class="mg-r-10"></i> {{ session('message') }}</div>
        @endif
            <div class="card">
                <div class="card-header">
                    <h6 class="mg-b-0">Tabel User</h6>
                </div><!-- card-header -->
                <div class="card-body pd-lg-25">
                    <table id="example2" class="table">
                        <thead>
                            <tr>
                                <th class="wd-20p">Name</th>
                                <th class="wd-25p">Phone</th>
                                <th class="wd-20p">Email</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td><a href="{{ route('digi.user.show', $user->id) }}" type="button"
                                        class="btn btn-xs btn-outline-primary">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- card-body -->
            </div>
        </div>
    </div><!-- row -->
</div>
@endsection

@section('add-vendor-script')
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
@endsection

@section('add-script')
<script>
    $(document).ready(function(){
        $('#example2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
    });
</script>
@endsection
