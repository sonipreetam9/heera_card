@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
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
        </div>
        <div class="row">
            <div class="col-lg-12">
               <div class="card">
    <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Add Branch Details</h4>
    </div>

    <form action="{{ route('super.post.register.branch') }}" method="POST">
        @csrf

        @if(Session::has('success'))
        <div style="padding: 10px 15px 0px 15px;">
            <p class="alert alert-success">{{ Session::get('success') }}!</p>
        </div>
        @endif

        <div class="card-body">
            <div class="live-preview">
                <div class="row gy-4">

                    {{-- Branch Name --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter branch name" value="{{ old('name') }}" required>
                            <label for="name">Branch Name</label>
                            <small class="form-text text-muted">Enter the full name of the branch.</small>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="e.g. branch@example.com" value="{{ old('email') }}" required>
                            <label for="email">Email Address</label>
                            <small class="form-text text-muted">Enter branch email (will be used for login).</small>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter phone number" value="{{ old('phone') }}" required>
                            <label for="phone">Phone Number</label>
                            <small class="form-text text-muted">Enter branch contact number.</small>
                            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- City --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="city" name="city"
                                placeholder="e.g. New Delhi" value="{{ old('city') }}" required>
                            <label for="city">City</label>
                            <small class="form-text text-muted">Enter city name.</small>
                            @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="address" name="address"
                                placeholder="Enter full address" required>{{ old('address') }}</textarea>
                            <label for="address">Full Address</label>
                            <small class="form-text text-muted">Branch location full address.</small>
                            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter password" required>
                            <label for="password">Password</label>
                            <small class="form-text text-muted">Minimum 6 characters.</small>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm password" required>
                            <label for="password_confirmation">Confirm Password</label>
                            <small class="form-text text-muted">Re-enter the password.</small>
                            @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary w-100">Register Branch</button>
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
$(document).ready(function () {
    // Allow only numbers for application fees
    $('#application_fee_gen, #application_fee_oth').on('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });

    // PDF file only validation
    $('#file').on('change', function () {
        var file = this.files[0];
        if (file && file.type !== 'application/pdf') {
            alert("Only PDF files are allowed.");
            $(this).val('');
        }
    });

    // Validate post date is before last date
    $('#post_date, #last_date').on('change', function () {
        let postDate = new Date($('#post_date').val());
        let lastDate = new Date($('#last_date').val());

        if (postDate >= lastDate) {
            alert("Post Date cannot be later than or equal to Last Date.");
            $('#last_date').val('');
        }
    });

    // Phone number: exactly 10 digits
    $('#phone').on('input', function () {
        this.value = this.value.replace(/\D/g, '').substring(0, 10);
    });

    // City: only letters and spaces
    $('#city').on('input', function () {
        this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    });

    // Password: only alphanumeric (letters + numbers), no special characters
    $('#password, #password_confirmation').on('input', function () {
        this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
    });

    // Password match validation on submit
    $('form').on('submit', function (e) {
        let pass = $('#password').val();
        let confirmPass = $('#password_confirmation').val();

        if (pass !== confirmPass) {
            alert("Password and Confirm Password do not match.");
            e.preventDefault();
        }
    });
});
</script>


@endsection
