@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Branch Code : {{ $branch->branch_code }}</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">All Client</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Employee Table --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title mb-0 text-white">All Client List</h5>
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
                                            <th>Verify</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidates as $index => $candidate)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $candidate->tag_id }}</td>
                                                <td>
                                                    @if ($candidate->image)
                                                        <img src="{{ asset($candidate->image) }}" alt="Profile" width="40"
                                                            height="40" class="rounded-circle">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->phone }}</td>

                                                <td>{{ $candidate->city }}</td>
                                                <td>{{ $candidate->fees }}</td>
                                                <td>{{ \Carbon\Carbon::parse($candidate->join_date)->format('d-m-Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($candidate->expire_date)->format('d-m-Y') }}</td>
                                                <td>
                                                    @if ($candidate->verify == 1)
                                                        <span class="badge bg-success">Verified</span>
                                                    @else
                                                        <span class="badge bg-danger">Not Verified</span>
                                                    @endif
                                                </td>

                                                <td>
                                                
                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('super.print.employee.id.card', ['empTag' => $candidate->tag_id]) }}">Card</a>

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
