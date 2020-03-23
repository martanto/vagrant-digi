@extends('layouts.home.default')

@section('content')
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">{{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Ketersediaan Data</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div class="media align-sm-items-center">
                                <div class="tx-40 tx-lg-60 lh-0 tx-primary"><i class="fas fa-file-archive"></i></div>
                                <div class="media-body mg-l-35">
                                    <h6 class="tx-12 tx-lg-14 tx-semibold tx-uppercase tx-spacing-1 mg-b-5">Table Data</h6>
                                    <div class="d-flex align-items-baseline">
                                        <h2 class="tx-20 tx-lg-28 tx-normal tx-rubik tx-spacing--2 lh-2 mg-b-0">{{ $sdses->total() }}</h2>
                                        <h6 class="tx-11 tx-lg-16 tx-normal tx-rubik tx-danger mg-l-5 lh-2 mg-b-0"> data</h6>
                                      </div>
                                </div>
                                <div class="media-body mg-l-30">
                                    <h6 class="tx-12 tx-lg-14 tx-semibold tx-uppercase tx-spacing-1 mg-b-5">Total Size</h6>
                                    <div class="d-flex align-items-baseline">
                                        <h2 class="tx-20 tx-lg-28 tx-normal tx-rubik tx-spacing--2 lh-2 mg-b-0">{{ $sdses->getCollection()->sum('filesize') }}</h2>
                                        <h6 class="tx-11 tx-lg-16 tx-normal tx-rubik tx-danger mg-l-5 lh-2 mg-b-0"> MB</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pd-lg-25">
                        {{ $sdses->links() }}
                        <table id="example2" class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="wd-20p">SCNL</th>
                                    <th class="wd-25p">Date</th>
                                    <th class="wd-20p">Sampling Rate (Hz)</th>
                                    <th class="wd-15p">Availability</th>
                                    <th class="wd-20p">File Size (KB)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sdses as $sds)
                                <tr>
                                    <td><a href="{{ route('data.show', $sds->scnl) }}">{{ $sds->scnl }}</a></td>
                                    <td>{{ $sds->date->format('Y-m-d') }}</td>
                                    <td>{{ $sds->sampling_rate }}</td>
                                    <td>{{ $sds->availability }}%</td>
                                    <td>{{ $sds->filesize }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sdses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
