@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Invoice</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Invoice</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">All Invoice List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="display table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Invoice_Number</th>
                                        <th>Customer_Name</th>
                                        <th>Sub_total</th>
                                        <th>Grand_total</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $index=> $invoice)

                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $invoice->invoice_number }}</td>
                                        <td>{{ $invoice->customer->name }}</td>
                                        <td>₹ {{ $invoice->sub_total }}</td>
                                        <td>₹ {{ $invoice->grand_total }}</td>
                                        <td>{{ $invoice->date }}</td>
                                        <td><a href="{{ route('view.invoice',['invoice_id'=>$invoice->id]) }}" class="btn btn-success">View</a>  <a href="#view" class="btn btn-danger">Delete</a></td>
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
