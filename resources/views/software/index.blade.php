@extends('software.layouts.header')
@section('software')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">{{ $greeting }}, {{ Auth::user()->name }} !</h4>
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
                                                Invoices</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> + 11
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">#<span class="counter-value"
                                                    data-target="11">0</span></h4>
                                            <a href="#" class="text-decoration-underline">View
                                                Invocies</a>
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
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Orders
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-danger fs-14 mb-0">
                                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                    data-target="36894">0</span></h4>
                                            <a href="#" class="text-decoration-underline">View all orders</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded fs-3">
                                                <i class="bx bx-shopping-bag"></i>
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
                                               Total Customers</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> + 11
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">#<span class="counter-value"
                                                    data-target="11">0</span></h4>
                                            <a href="#" class="text-decoration-underline">View Customers</a>
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
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My
                                                Balance</p>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">₹<span class="counter-value"
                                                    data-target="11">11</span> </h4>
                                            <a href="#" class="text-decoration-underline">Wallet</a>
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
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                </div><!-- end card header -->



                                {{-- <div class="card-body p-0 pb-2">
                                    <div class="w-100">
                                        <div id="customer_impression_charts"
                                            data-colors='["--vz-success", "--vz-primary", "--vz-danger"]'
                                            class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div> --}}
                                <!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->


                        <!-- end col -->
                    </div>



                    <div class="row">


                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recent Invoices</h4>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                            <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                        </button>
                                    </div>
                                </div><!-- end card header -->


                                    <div class="card-body p-4">
                                        <div class="table-responsive table-card">
                                            <table
                                                class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="table-light text-center text-muted">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Invoice Number</th>
                                                        <th>Customer Name</th>
                                                        <th>Sub Total</th>
                                                        <th>Grand Total</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                        <style>
                                                            th{
                                                                font-weight: 900;
                                                                color: black !important;
                                                            }
                                                            .price-tag{
                                                                font-size: 14px;
                                                            }
                                                        </style>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-middle text-center">
                                                    {{-- @foreach ($invoices as $index => $invoice)
                                                    <tr class="bg-light">
                                                        <td>{{ $index + 1 }}</td>
                                                        <td><strong>{{ $invoice->invoice_number }}</strong></td>
                                                        <td>{{ $invoice->customer->name }}</td>
                                                        <td>
                                                            <span class="badge bg-warning text-dark px-3 py-2 price-tag">
                                                                ₹ {{ number_format($invoice->sub_total, 2) }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success text-white px-3 py-2 price-tag">
                                                                ₹ {{ number_format($invoice->grand_total, 2) }}
                                                            </span>
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($invoice->date)->format('d M, Y')
                                                            }}</td>
                                                        <td>
                                                            <a href="{{ route('view.invoice', ['invoice_id' => $invoice->id]) }}"
                                                                class="btn btn-md btn-outline-success me-1">
                                                                <i class="mdi mdi-eye"></i>
                                                            </a>
                                                            <a href="#delete" class="btn btn-md btn-outline-danger">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table><!-- end table -->
                                        </div>
                                </div>

                            </div> <!-- .card-->
                        </div> <!-- .col-->
                    </div> <!-- end row-->
                    <div class="row">


                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recent Customers</h4>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                            <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                        </button>
                                    </div>
                                </div><!-- end card header -->


                                    <div class="card-body p-4">
                                        <div class="table-responsive table-card">
                                            <table
                                                class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="table-light text-center text-muted">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tag ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Bussiness</th>
                                                        <th>Phone</th>
                                                        <th>Join Date</th>
                                                        <th>Action</th>
                                                        <style>
                                                            th{
                                                                font-weight: 900;
                                                                color: black !important;
                                                            }
                                                            .price-tag{
                                                                font-size: 14px;
                                                            }
                                                        </style>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-middle text-center">
                                                    {{-- @foreach ($customers as $index => $customer)
                                                    <tr class="bg-light">
                                                        <td>{{ $index + 1 }}</td>
                                                        <td><strong>{{ $customer->tag_id }}</strong></td>
                                                        <td>{{ $customer->name }}</td>
                                                        <td>{{ $customer->business_name }}</td>
                                                        <td>{{ $customer->phone }}</td>


                                                        <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('d M, Y')
                                                            }}</td>
                                                        <td>
                                                            <a href="{{ route('view.invoice', ['invoice_id' => $customer->id]) }}"
                                                                class="btn btn-md btn-outline-success me-1">
                                                                <i class="mdi mdi-eye"></i>
                                                            </a>
                                                            <a href="#delete" class="btn btn-md btn-outline-danger">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach --}}
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
