@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Profile Details</h4>
                        </div>

                        <form action="{{ route('super.edit.setting.post', $setting->id) }}" method="POST">
                            @csrf

                            @if (Session::has('success'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        {{-- Value --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="value" id="value"
                                                    placeholder="setting" value="{{ $setting->value }}" required>
                                                <label for="value">Setting</label>
                                            </div>
                                            @error('value')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Submit --}}
                                        <div class="col-md-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-success w-100">Edit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
