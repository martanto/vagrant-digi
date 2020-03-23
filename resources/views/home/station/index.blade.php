@extends('layouts.home.default')

@section('add-vendor-css')
<link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">{{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stations</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Data Station Terdaftar</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-12">
                <div class="card card-body">
                    <div class="d-md-flex align-items-center justify-content-between">
                        <div class="media align-sm-items-center">
                            <div class="tx-40 tx-lg-60 lh-0 tx-primary"><i class="fas fa-file-archive"></i></div>
                            <div class="media-body mg-l-15">
                                <h6 class="tx-12 tx-lg-14 tx-semibold tx-uppercase tx-spacing-1 mg-b-5">Jumlah Station</h6>
                                <div class="d-flex align-items-baseline">
                                    <h2 class="tx-20 tx-lg-28 tx-normal tx-rubik tx-spacing--2 lh-2 mg-b-0">{{ $stations->count() }}</h2>
                                    <h6 class="tx-11 tx-lg-16 tx-normal tx-rubik tx-danger mg-l-5 lh-2 mg-b-0"> alat</h6>
                                  </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row mg-t-20 mg-md-t-0">
                            <button class="btn btn-sm btn-white btn-uppercase pd-x-15"><i data-feather="download" class="mg-r-5"></i> Export CSV</button>
                            <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5"><i data-feather="share-2" class="mg-r-5"></i> Share</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mg-t-10">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mg-b-0">Tabel Station</h6>
                    </div><!-- card-header -->
                    <div class="card-body pd-lg-25">
                        <table id="example2" class="table">
                            <thead>
                                <tr>
                                    <th class="wd-20p">Station</th>
                                    <th class="wd-25p">SCNL</th>
                                    <th class="wd-20p">Status</th>
                                    <th class="wd-15p">Jumlah Data</th>
                                    <th class="wd-20p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stations as $station)
                                <tr>
                                    <td>{{ $station->station }}</td>
                                    <td>{{ $station->scnl }}</td>
                                    <td>{{ $station->status ? 'Aktif' : 'Tidak Aktif' }}</td>
                                    <td>{{ $station->data_count }}</td>
                                    <td><a href="{{ route('data.show', $station->scnl) }}" type="button" class="btn btn-xs btn-outline-primary">View</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- card-body -->
                </div>
            </div>

            <div class="col-lg-12 mg-t-10">
                <div class="card">
                    <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                        <div>
                            <h6 class="mg-b-5">Statistik</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Jumlah data yang tersedia per station</p>
                        </div>
                        <div class="btn-group mg-t-20 mg-sm-t-0">
                            <button class="btn btn-xs btn-white btn-uppercase">Day</button>
                            <button class="btn btn-xs btn-white btn-uppercase">Week</button>
                            <button class="btn btn-xs btn-white btn-uppercase active">Month</button>
                        </div><!-- btn-group -->
                    </div><!-- card-header -->
                    <div class="card-body pd-lg-25">
                        <div class="row align-items-sm-end">
                            <div class="col-lg-12 col-xl-12">
                                <div class="chart-six"><canvas id="chartBar1"></canvas></div>
                            </div>
                            {{-- <div class="col-lg-5 col-xl-4 mg-t-30 mg-lg-t-0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">New Users</h6>
                                            <span class="tx-10 tx-color-04">65% goal reached</span>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mg-b-5">
                                            <h5 class="tx-normal tx-rubik lh-2 mg-b-0">13,596</h5>
                                            <h6 class="tx-normal tx-rubik tx-color-03 lh-2 mg-b-0">20,000</h6>
                                        </div>
                                        <div class="progress ht-4 mg-b-0 op-5">
                                            <div class="progress-bar bg-teal wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-12 mg-t-30 mg-sm-t-0 mg-lg-t-30">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Views</h6>
                                            <span class="tx-10 tx-color-04">45% goal reached</span>
                                        </div>
                                        <div class="d-flex justify-content-between mg-b-5">
                                            <h5 class="tx-normal tx-rubik mg-b-0">83,123</h5>
                                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>250,000</small></h5>
                                        </div>
                                        <div class="progress ht-4 mg-b-0 op-5">
                                            <div class="progress-bar bg-orange wd-45p" role="progressbar" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-12 mg-t-30">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Sessions</h6>
                                            <span class="tx-10 tx-color-04">20% goal reached</span>
                                        </div>
                                        <div class="d-flex justify-content-between mg-b-5">
                                            <h5 class="tx-normal tx-rubik mg-b-0">16,869</h5>
                                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>85,000</small></h5>
                                        </div>
                                        <div class="progress ht-4 mg-b-0 op-5">
                                            <div class="progress-bar bg-pink wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-12 mg-t-30">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Bounce Rate</h6>
                                            <span class="tx-10 tx-color-04">85% goal reached</span>
                                        </div>
                                        <div class="d-flex justify-content-between mg-b-5">
                                            <h5 class="tx-normal tx-rubik mg-b-0">28.50%</h5>
                                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>30.50%</small></h5>
                                        </div>
                                        <div class="progress ht-4 mg-b-0 op-5">
                                            <div class="progress-bar bg-primary wd-85p" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!-- row -->

                            </div> --}}
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>

            <div class="col-lg-6 mg-t-10">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mg-b-0">Sessions By Channel</h6>
                    </div><!-- card-header -->
                    <div class="card-body pd-lg-25">
                        <div class="chart-seven"><canvas id="chartDonut"></canvas></div>
                    </div><!-- card-body -->
                    <div class="card-footer pd-20">
                        <div class="row">
                            <div class="col-6">
                                <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-5">Organic Search</p>
                                <div class="d-flex align-items-center">
                                    <div class="wd-10 ht-10 rounded-circle bg-pink mg-r-5"></div>
                                    <h5 class="tx-normal tx-rubik mg-b-0">1,320 <small class="tx-color-04">25%</small></h5>
                                </div>
                            </div><!-- col -->
                            <div class="col-6">
                                <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Email</p>
                                <div class="d-flex align-items-center">
                                    <div class="wd-10 ht-10 rounded-circle bg-primary mg-r-5"></div>
                                    <h5 class="tx-normal tx-rubik mg-b-0">987 <small class="tx-color-04">20%</small></h5>
                                </div>
                            </div><!-- col -->
                            <div class="col-6 mg-t-20">
                                <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Referrral</p>
                                <div class="d-flex align-items-center">
                                    <div class="wd-10 ht-10 rounded-circle bg-teal mg-r-5"></div>
                                    <h5 class="tx-normal tx-rubik mg-b-0">2,010 <small class="tx-color-04">30%</small></h5>
                                </div>
                            </div><!-- col -->
                            <div class="col-6 mg-t-20">
                                <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Social Media</p>
                                <div class="d-flex align-items-center">
                                    <div class="wd-10 ht-10 rounded-circle bg-orange mg-r-5"></div>
                                    <h5 class="tx-normal tx-rubik mg-b-0">1,054 <small class="tx-color-04">25%</small></h5>
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- card-footer -->
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('add-vendor-script')
<script src="{{ asset('vendors/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
@endsection

@section('add-script')
<script>
    $(document).ready(function(){
        var ctx1 = $('#chartBar1');

        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: {!! $bar_label !!},
                datasets: [{
                    data: {{ $bar_dataset }},
                    backgroundColor: '#66a4fb'
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: false,
                        barPercentage: 0.5
                    }],
                    yAxes: [{
                        gridLines: {
                            color: '#ebeef3'
                        },
                        ticks: {
                            fontColor: '#8392a5',
                            fontSize: 10,
                        }
                    }]
                }
            }
        });

        var datapie = {
            labels: ['Organic Search', 'Email', 'Referral', 'Social Media'],
            datasets: [{
                data: [20, 20, 30, 25],
                backgroundColor: ['#f77eb9', '#7ebcff', '#7ee5e5', '#fdbd88']
            }]
        };

        var optionpie = {
            maintainAspectRatio: false,
                responsive: true,
                legend: {
                display: false,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        var ctx2 = $('#chartDonut');
        var myDonutChart = new Chart(ctx2, {
            type: 'doughnut',
            data: datapie,
            options: optionpie
        });

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
