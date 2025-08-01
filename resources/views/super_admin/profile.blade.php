@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    {{-- <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img"
                                class="img-thumbnail rounded-circle" />
                        </div>
                    </div> --}}
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">Super Admin</h3>
                            {{-- <p class="text-white text-opacity-75">Owner & Founder</p> --}}
                            {{-- <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i
                                        class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>
                                </div>
                                <div>
                                    <i
                                        class="ri-building-4-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $comp->comp_name }}
                                </div>
                            </div> --}}
                        </div>
                    </div>


                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex profile-wrapper">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">

                            </ul>
                            <div class="flex-shrink-0">
                                <a href="{{ route('super.edit.profile', $comp->id) }}" class="btn btn-success"><i
                                        class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-12">

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Personal Information</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Email:</th>
                                                                <td class="text-muted">{{ $comp->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Password :</th>
                                                                <td class="text-muted">{{ base64_decode($comp->in_hash) }}</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->



                                    </div>


                                    {{-- <div class="col-xxl-12">


                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Personal Information</h5>
                                                <div class="table-responsive">
                                                    {{-- <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                <td class="text-muted">{{ Auth::user()->name }}
                                                                    {{ Auth::user()->nickname }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Mobile :</th>
                                                                <td class="text-muted">+(91) {{ Auth::user()->phone }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">E-mail :</th>
                                                                <td class="text-muted">{{ Auth::user()->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Location :</th>
                                                                <td class="text-muted">{{ Auth::user()->address }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Joining Date</th>
                                                                <td class="text-muted">
                                                                    {{ Auth::user()->created_at->format('d-M-Y') }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> 
                                            </div><!-- end card body -->
                                        </div><!-- end card -->



                                    </div> --}}
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
@endsection
