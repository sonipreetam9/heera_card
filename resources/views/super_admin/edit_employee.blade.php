@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Client</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Client</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Client Details</h4>
                        </div>

                        <form action="{{ route('super.edit.register.employee', $employee->tag_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @if (Session::has('success'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        {{-- Name --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Full Name" value="{{ $employee->name }}" required>
                                                <label for="name">Full Name</label>
                                            </div>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Phone --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="Phone Number" value="{{ $employee->phone }}" required>
                                                <label for="phone">Phone</label>
                                            </div>
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Address --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="address" id="address" placeholder="Address" required>{{ $employee->address }}</textarea>
                                                <label for="address">Address</label>
                                            </div>
                                            @error('address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- City --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="city" id="city"
                                                    placeholder="City" value="{{ $employee->city }}" required>
                                                <label for="city">City</label>
                                            </div>
                                            @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Age --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" name="age" id="age"
                                                    placeholder="Age" value="{{ $employee->age }}" required>
                                                <label for="age">Age</label>
                                            </div>
                                            @error('age')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Occupation --}}
                                        {{-- <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="fees" id="fees"
                                                    placeholder="Fees" value="{{ $employee->fees }}" readonly required>
                                                <label for="fees">Card Fee</label>
                                            </div>
                                            @error('fees')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div> --}}

                                        {{-- Gender --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select" name="sex" id="sex" required>
                                                    <option disabled selected value="">Select Gender</option>
                                                    <option value="Male"
                                                        {{ $employee->sex == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female"
                                                        {{ $employee->sex == 'Female' ? 'selected' : '' }}>Female</option>
                                                    <option value="Other"
                                                        {{ $employee->sex == 'Other' ? 'selected' : '' }}>Other</option>
                                                </select>

                                                <label for="sex">Gender</label>
                                            </div>
                                            @error('sex')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- DOB --}}
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" name="dob" id="dob"
                                                    value="{{ $employee->dob }}" required>
                                                <label for="dob">Date of Birth</label>
                                            </div>
                                            @error('dob')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-md-12">
                                            <label for="image" class="form-label">Profile Image</label>
                                            <input type="file" class="form-control" name="image" id="image"
                                                accept="image/jpeg, image/jpg, image/png, image/webp">
                                            @if ($employee->image)
                                                <img src="{{ asset($employee->image) }}" alt="Profile Image"
                                                    class="img-thumbnail mt-2" style="max-width: 150px;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                            {{-- Error Message --}}
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Submit --}}
                                        <div class="col-md-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-success w-100">Edit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#phone').on('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 10);
            });

            $('#city').on('input', function() {
                this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            });

            $('#age').on('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 3);
            });

            $('#tag_id').on('input', function() {
                this.value = this.value.replace(/[^a-zA-Z0-9\-]/g, '');
            });

            $('#image').on('change', function() {
                const file = this.files[0];
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
                if (file && !allowedTypes.includes(file.type)) {
                    alert('Only JPEG, JPG, PNG, and WEBP images are allowed.');
                    $(this).val('');
                }
            });

            $('#dob, #join_date').on('change', function() {
                const dob = new Date($('#dob').val());
                const join = new Date($('#join_date').val());
                if (join <= dob) {
                    alert("Join date must be after date of birth.");
                    $('#join_date').val('');
                }
            });

            $('#join_date, #expire_date').on('change', function() {
                const join = new Date($('#join_date').val());
                const expire = new Date($('#expire_date').val());
                if (expire <= join) {
                    alert("Expire date must be after join date.");
                    $('#expire_date').val('');
                }
            });
        });
    </script>
@endsection
