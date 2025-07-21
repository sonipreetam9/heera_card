<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | TG - Admin & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset('software/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('software/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('software/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('software/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom Css-->
    <link href="{{ asset('software/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 d-flex justify-content-center algin-items-center">
                                        <img src="{{ asset($small_logo) }}" alt="" width="280">
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Register to continue to {{ $web_name }}.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" novalidate
                                                action="{{ route('super.post.register') }}" method="POST">
                                                @if(Session::has('error'))
                                                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                                @endif
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="useremail"
                                                        placeholder="Enter email address" required name="email"
                                                        value="{{ old('email') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                    @error('email')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password<span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control pe-5 password-input"
                                                            placeholder="Enter password" required name="password">
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                            type="button" id="password-addon">
                                                            <i class="ri-eye-fill align-middle"></i>
                                                        </button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                        @error('password')
                                                        <div class="text-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Confirm Password
                                                        <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control pe-5 password-input"
                                                            placeholder="Enter confirm password" required
                                                            name="password_confirmation">
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                            type="button" id="password-addon">
                                                            <i class="ri-eye-fill align-middle"></i>
                                                        </button>
                                                        <div class="invalid-feedback">
                                                            Please enter confirmation password
                                                        </div>
                                                        @error('password_confirmation')
                                                        <div class="text-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100"
                                                        type="submit">Register</button>
                                                </div>

                                                <div class="mt-5 text-center">
                                                    <p class="mb-0">Already have an account?
                                                        <a href="{{ route('super.login') }}"
                                                            class="fw-semibold text-primary text-decoration-underline">
                                                            Login
                                                        </a>
                                                    </p>
                                                </div>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> {{ $web_name }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                Techgeometry Pvt Ltd.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('software/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('software/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('software/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('software/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('software/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('software/assets/js/plugins.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('software/assets/js/pages/form-validation.init.js') }}"></script>

    <!-- password create init -->
    <script src="{{ asset('software/assets/js/pages/passowrd-create.init.js') }}"></script>
</body>

</html>
