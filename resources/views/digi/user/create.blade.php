@extends('layouts.digi.default')

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
            <h4 class="mg-b-0 tx-spacing--1">Buat User baru</h4>
        </div>
    </div>

    <div class="row row-xs">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="mg-b-0">Create User</h6>
                </div>

                <div class="card-body pd-lg-25">
                    <form action="{{ route('digi.user.store') }}" method="post">
                        @csrf

                    @if ($errors->any())
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Error</h5>
                            <p class="lh-6">Ditemukan kesalahan dalam input data yang Anda masukkan. Silahkan cek dan ulangi lagi isian form.</p>
                        </div>
                        <div class="col-md-8">
                            <h5>Informasi Error</h5>
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>
                    <hr class="mg-y-40">
                    @endif

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="name" placeholder="Fullname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" value="{{ old('phone') }}" type="text" class="form-control" id="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordConfirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                            <div class="col-sm-10">
                                <input name="password_confirmation" type="password" class="form-control" id="passwordConfirmation" placeholder="Password Confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 pt-0">Aktifkan User?</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="is_active" name="is_active" value="1"
                                        class="custom-control-input" checked>
                                    <label class="custom-control-label" for="is_active">Ya</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="is_not_active" name="is_active" value="0"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="is_not_active">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mg-b-0">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- row -->
</div>
@endsection
