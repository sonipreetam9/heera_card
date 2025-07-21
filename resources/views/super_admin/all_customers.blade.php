@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All customers</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Customers</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">All Customers List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="display table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tag ID</th>
                                        <th>Name</th>
                                        <th>Business</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $index=> $customer)

                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $customer->tag_id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->business_name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        @if($customer->status==1)
                                        <td><span class="badge bg-success">Active</span></td>

                                        @else
                                        <td><span class="badge bg-danger">Inactive</span></td>

                                        @endif
                                        <td><span class="badge bg-danger">View</span></td>

                                    </tr>
                                    @endforeach

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
