@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">{{ $greeting }}, {{ Auth::guard('admin')->user()->email }}
                                            !</h4>
                                    </div>

                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total
                                                    Branch</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                        data-target="11">{{ $total_branch }}</span></h4>
                                                <a href="{{ route('super.branch.list') }}"
                                                    class="text-decoration-underline">View Branches</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success rounded fs-3">
                                                    <i class="mdi mdi-file"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->


                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Total Client</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                        data-target="11">{{ $total_employees }}</span></h4>
                                                <a href="{{ route('super.all.candidates') }}"
                                                    class="text-decoration-underline">View Clients</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning rounded fs-3">
                                                    <i class="bx bx-user-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Today New Client</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                        data-target="11">{{ $today_new_clients }}</span></h4>
                                                <a href="{{ route('super.today.employee') }}"
                                                    class="text-decoration-underline">View Clients</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning rounded fs-3">
                                                    <i class="bx bx-user-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Total Fees</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                        data-target="11">{{ $total_fees }}</span></h4>
                                                {{-- <a href="{{ route('super.today.employee') }}"
                                                    class="text-decoration-underline">View Clients</a> --}}
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-danger rounded fs-3">
                                                    <i class="bx bx-wallet"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                        </div> <!-- end row-->


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Client</h4>
                                    </div><!-- end card header -->


                                    <div class="card-body p-4">
                                        <div class="table-responsive table-card">
                                            <table
                                                class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="table-light text-center text-muted">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tag ID</th>
                                                        <th>Image</th>
                                                        <th>Client Name</th>
                                                        <th>Phone</th>
                                                        <th>City</th>
                                                        <th>Card Fees</th>
                                                        <th>Join Date</th>
                                                        <th>Expire Date</th>
                                                        <th>Action</th>
                                                        <style>
                                                            th {
                                                                font-weight: 900;
                                                                color: black !important;
                                                            }

                                                            .price-tag {
                                                                font-size: 14px;
                                                            }
                                                        </style>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-middle text-center">
                                                    @foreach ($candidates as $index => $emp)
                                                        <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $emp->tag_id }}</td>
                                                            <td>
                                                                @if ($emp->image)
                                                                    <img src="{{ asset($emp->image) }}" alt="Profile"
                                                                        width="40" height="40"
                                                                        class="rounded-circle">
                                                                @else
                                                                    <span class="text-muted">No Image</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $emp->name }}</td>
                                                            <td>{{ $emp->phone }}</td>

                                                            <td>{{ $emp->city }}</td>
                                                            <td>{{ $emp->fees }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($emp->join_date)->format('d-m-Y') }}
                                                            </td>
                                                            <td>{{ \Carbon\Carbon::parse($emp->expire_date)->format('d-m-Y') }}
                                                            </td>
                                                            <td>
                                                                {{-- <a class="btn btn-warning btn-sm"
                                                                    href="{{ route('super.edit.employee', ['empTag' => $emp->tag_id]) }}">Edit</a> --}}
                                                                <a class="btn btn-success btn-sm"
                                                                    href="{{ route('super.print.employee.id.card', ['empTag' => $emp->tag_id]) }}">Card</a>
                                                                {{-- <a href="javascript:void(0);"
                                                                    class="btn btn-danger btn-sm delete-btn"
                                                                    data-url="{{ route('super.delete.register.employee', ['empTag' => $emp->tag_id]) }}">
                                                                    Delete
                                                                </a> --}}

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table><!-- end table -->
                                        </div>
                                    </div>

                                </div> <!-- .card-->
                            </div> <!-- .col-->
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
