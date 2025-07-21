@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Candidates</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Candidates</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Candidates List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>

                                        {{-- Decode base64 password from in_hash --}}
                                        <td>
                                            @php
                                            $decodedPassword = base64_decode($user->in_hash);
                                            @endphp
                                            {{ $decodedPassword }}
                                        </td>

                                        {{-- Verify status badge --}}
                                        <td>
                                            @if($user->verify == 1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ url('user/view/'.$user->id) }}"
                                                class="btn btn-sm btn-success">View</a>
                                            <a href="{{ url('user/delete/'.$user->id) }}" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
