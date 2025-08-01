@extends('super_admin.layouts.header')
@section('super')
    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-overlay:target {
            display: flex;
        }

        .modal-box {
            background: white;
            padding: 20px;
            max-width: 90%;
            width: 500px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .modal-box h2 {
            margin-top: 0;
        }

        .modal-actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            flex-wrap: wrap;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 22px;
            text-decoration: none;
            color: #333;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-primary {
            background: #0d6efd;
            color: white;
        }

        .btn-success {
            background: #198754;
            color: white;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }
    </style>

    <div class="page-content">
        <div class="container-fluid">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Branch</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Branch</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div> --}}
            <div class="page-content">
                <div class="container-fluid">

                    {{-- <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                            <div class="overlay-content">
                                <div class="text-end p-3">
                                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                        <input id="profile-foreground-img-file-input" type="file"
                                            class="profile-foreground-img-file-input">
                                        <label for="profile-foreground-img-file-input"
                                            class="profile-photo-edit btn btn-light">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="{{ asset($employee->image) }}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow"
                                                alt="user-profile-image">
                                        </div>
                                        <h5 class="fs-16 mb-1">{{ $employee->name }}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                                <i class="far fa-envelope"></i>Client Profile Details
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <!--end tab-pane-->
                                        <div class="tab-pane active" id="privacy" role="tabpanel">
                                            <div class="mb-4 pb-2">
                                                <h5 class="card-title text-decoration-underline mb-3">Tag ID:
                                                    {{ $employee->tag_id }}</h5>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Branch Name: {{ $branch->name ?? 'N/A' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Name: {{ $employee->name }}</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Phone No: {{ $employee->phone }}</h6>
                                                    </div>

                                                </div>

                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client DOB: {{ $employee->dob }}</h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Fees: {{ $employee->fees }}</h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Age: {{ $employee->age }}</h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Sex: {{ $employee->sex }}</h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client City: {{ $employee->city }}</h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Address: {{ $employee->address }}
                                                        </h6>
                                                    </div>

                                                </div>

                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Join Date: {{ $employee->join_date }}
                                                        </h6>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Client Expire Date:
                                                            {{ $employee->expire_date }}</h6>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Renew Card Button -->
                                            <div>
                                                <div class="hstack gap-2 mt-3">
                                                    <a href="#renewCardModal" class="btn btn-primary">Renew Card</a>
                                                    <a href="{{ route('super.print.employee.id.card', $employee->tag_id) }}" class="btn btn-danger">Print Card</a>
                                                </div>
                                            </div>

                                            <!-- Popup Modal -->
                                            <div id="renewCardModal" class="modal-overlay">
                                                <div class="modal-box">
                                                    <a href="#" class="close-btn">&times;</a>
                                                    <h2>Next Year Renew Card</h2>
                                                    <p>Are you sure you want to renew this membership card for the next
                                                        year?</p>

                                                    <div class="modal-actions">
                                                        <form action="{{ route('super.renew.card.post', $employee->tag_id) }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Confirm</button>
                                                        </form>
                                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content
@endsection
