@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Vacancy</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Vacancy</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Vacancy List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Vacancy No.</th>
                                        <th>Post</th>
                                        <th>Post Date</th>
                                        <th>Last Date</th>
                                        <th>Category</th>
                                        <th>Fee (GEN)</th>
                                        <th>Fee (OTH)</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacancies as $index => $vacancy)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $vacancy->vacancy_number }}</td>
                                        <td>{{ $vacancy->post }}</td>
                                        <td>{{ \Carbon\Carbon::parse($vacancy->post_date)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($vacancy->last_date)->format('d-m-Y') }}</td>
                                        <td>{{ $vacancy->category }}</td>
                                        <td>₹{{ $vacancy->application_fee_gen }}</td>
                                        <td>₹{{ $vacancy->application_fee_oth }}</td>
                                        <td>
                                            @if($vacancy->status == 1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ asset('uploads/'.$vacancy->file) }}"
                                                class="btn btn-sm btn-success" target="_blank">View</a>
                                            <a href="{{ url('vacancy/delete/'.$vacancy->id) }}"
                                                class="btn btn-sm btn-danger"
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
