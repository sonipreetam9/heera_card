@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Branch</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Branch</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Branch List</h5>
                    </div>
                    <div class="card-body">
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-hover table-striped align-middle w-100">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Branch Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $index => $branch)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $branch->branch_code }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->email }}</td>
                    <td>{{ $branch->phone }}</td>
                    <td>{{ $branch->address }}</td>
                    <td>{{ base64_decode($branch->in_hash) }}</td>
                    <td>
                        @if($branch->verify == 1)
                        <span class="badge bg-success">Verified</span>
                        @else
                        <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>{{ \Carbon\Carbon::parse($branch->created_at)->format('d-m-Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger"
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
