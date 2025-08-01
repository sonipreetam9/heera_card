@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Today New Clients</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Today New Clients</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title mb-0 text-white">Today Client</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable"
                                    class="table table-bordered table-hover table-striped align-middle w-100">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Tag ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>Card Fee</th>
                                            <th>Join Date</th>
                                            <th>Expire Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $index => $emp)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $emp->tag_id }}</td>
                                                <td>
                                                    @if ($emp->image)
                                                        <img src="{{ asset($emp->image) }}" alt="Profile" width="40"
                                                            height="40" class="rounded-circle">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $emp->name }}</td>
                                                <td>{{ $emp->phone }}</td>

                                                <td>{{ $emp->city }}</td>
                                                <td>{{ $emp->fees }}</td>
                                                <td>{{ \Carbon\Carbon::parse($emp->join_date)->format('d-m-Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($emp->expire_date)->format('d-m-Y') }}</td>
                                                {{-- <td>
                                                    @if ($emp->verify == 1)
                                                        <span class="badge bg-success">Verified</span>
                                                    @else
                                                        <span class="badge bg-danger">Not Verified</span>
                                                    @endif
                                                </td> --}}

                                                <td>
                                                    {{-- <a class="btn btn-warning btn-sm"
                                                        href="{{ route('super.edit.employee', ['empTag' => $emp->tag_id]) }}">Edit</a> --}}
                                                    <a class="btn btn-success btn-sm"
                                                        href="{{ route('super.print.employee.id.card', ['empTag' => $emp->tag_id]) }}">Card</a>
                                                    {{-- <a href="javascript:void(0);" class="btn btn-danger btn-sm delete-btn"
                                                        data-url="{{ route('super.delete.register.employee', ['empTag' => $emp->tag_id]) }}">
                                                        Delete
                                                    </a> --}}

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end table -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.delete-btn').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = this.getAttribute('data-url');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This Client Delete Permanently!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>
@endsection
