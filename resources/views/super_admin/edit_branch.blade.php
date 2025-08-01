@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Branch</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Branch</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Branch Details</h4>
                        </div>

                        <form action="{{ route('super.post.edit.branch', $branch->branch_code) }}" method="POST">
                            @csrf

                            @if (Session::has('success'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-success">{{ Session::get('success') }}!</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        {{-- Branch Name --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter branch name" value="{{ $branch->name }}">
                                                <label for="name">Branch Name</label>

                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="e.g. branch@example.com" value="{{ $branch->email }}">
                                                <label for="email">Email Address</label>

                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Phone --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Enter phone number" value="{{ $branch->phone }}" maxlength="10">
                                                <label for="phone">Phone Number</label>

                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- City --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="city" name="city"
                                                    placeholder="e.g. New Delhi" value="{{ $branch->city }}">
                                                <label for="city">City</label>
                                                @error('city')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Address --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="address" name="address" placeholder="Enter full address">{{ $branch->address }}</textarea>
                                                <label for="address">Full Address</label>
                                                @error('address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Password --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="Enter password"
                                                    value="{{ base64_decode($branch->in_hash) }}">

                                                <label for="password">Password</label>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Submit Button --}}
                                        <div class="col-md-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-primary w-100">Update Branch</button>
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
