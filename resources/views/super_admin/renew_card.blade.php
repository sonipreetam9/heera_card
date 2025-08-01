@extends('super_admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Renew Card</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Renew Card</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Renew Card</h4>
                        </div>



                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    {{-- Card Search --}}
                                    <div class="col-md-12">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="search"
                                                placeholder="Enter Tag ID">
                                            <div id="search-results" class="list-group position-absolute w-100"
                                                style="z-index: 1000;"></div>
                                            <p class="text-danger mt-1" id="error-msg"></p>
                                        </div>

                                        <p class="text-danger mt-1" id="error-msg"></p>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>
            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const printCardUrlTemplate = @json(route('print.employee.id.card', ['empTag' => '__EMP_TAG__']));
    </script>

<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();

            if (query.length >= 1) {
                $.ajax({
                    url: "{{ route('super.card.liveSearch') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        search: query
                    },
                    success: function(response) {
                        if (response.status) {
                            let html = '';
                            response.data.forEach(emp => {
                                html += `
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>${emp.tag_id}</span>
                                        <a href="/super_admin/show-employee-detail/${emp.tag_id}" 
                                           class="btn btn-sm btn-primary">
                                           Renew Card
                                        </a>
                                    </div>`;
                            });
                            $('#search-results').html(html).show();
                            $('#error-msg').text('');
                        } else {
                            $('#search-results').html('').hide();
                            $('#error-msg').text(response.message);
                        }
                    },
                    error: function() {
                        $('#search-results').html('').hide();
                        $('#error-msg').text('Server error. Try again.');
                    }
                });
            } else {
                $('#search-results').html('').hide();
                $('#error-msg').text('');
            }
        });

        // Hide dropdown if clicked outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#search').length) {
                $('#search-results').fadeOut();
            }
        });
    });
</script>

@endsection
