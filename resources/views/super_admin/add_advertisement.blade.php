@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Advertisement</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Advertisement</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Advertisement Deatils</h4>

                    </div><!-- end card header -->
                    <form action="{{ route('super.add.vacancy.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(Session::has('success'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-success">{{ Session::get('success') }} !
                            </p>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">

                                    {{-- Post Name --}}
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="post" name="post"
                                                placeholder="e.g. Web Developer" value="{{ old('post') }}" required>
                                            <label for="post">Advertisement Number</label>
                                            <small class="form-text text-muted">Make this month advertisement number.</small>
                                            @error('post') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>





                                    <div class="col-md-4 mt-3 text-center">
                                        <button type="submit" class="btn btn-success w-100">Submit </button>
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
    // Numbers only
    $('#application_fee_gen, #application_fee_oth').on('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });

    // PDF file only
    $('#file').on('change', function () {
        var file = this.files[0];
        if (file && file.type !== 'application/pdf') {
            alert("Only PDF files are allowed.");
            $(this).val(''); // Clear the input
        }
    });

    // Post date must not be greater than last date
    $('#post_date, #last_date').on('change', function () {
        let postDate = new Date($('#post_date').val());
        let lastDate = new Date($('#last_date').val());

        if (postDate >= lastDate) {
            alert("Post Date cannot be later than Last Date.");
            $('#last_date').val('');
        }
    });
});
</script>


@endsection
