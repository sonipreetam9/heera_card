@extends('software.layouts.header')
@section('software')

<style>
    .id-card {
        width: 340px;
        height: 540px;
        margin: auto;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.16);
        font-family: 'Arial', sans-serif;
        overflow: hidden;
        position: relative;
    }

    .id-card-front,
    .id-card-back {
        width: 100%;
        height: 100%;
        padding: 0;
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .id-card-front {
        background: linear-gradient(to bottom, #2682d5 0px, #d2e7fa 80px, #fff 120px);
    }

    .id-card-logo {
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .profile-pic {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 6px solid #fff;
        object-fit: cover;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.08);
        margin-bottom: 16px;
    }

    .id-card h2 {
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 4px;
        margin-top: 0;
        color: #181818;
        letter-spacing: 0.5px;
    }

    .role-btn {
        background: #2682d5;
        color: #fff;
        border-radius: 22px;
        padding: 2px 28px 5px 28px;
        font-size: 16px;
        margin-bottom: 16px;
        margin-top: 6px;
        font-weight: 500;
        display: inline-block;
    }

    .id-details {
        text-align: left;
        width: 80%;
        margin: 0 auto 18px auto;
        color: #222;
        font-size: 15px;
    }

    .id-details p {
        margin: 4px 0;
        letter-spacing: 0.2px;
    }

    .field-label {
        font-weight: 600;
        width: 76px;
        display: inline-block;
    }

    .barcode-area {
        width: 100%;
        padding: 0 22px;
        margin-top: 12px;
    }

    .barcode {
        width: 100%;
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        padding: 16px 0 8px 0;
        letter-spacing: 4px;
        border: 3px solid #2682d5;
        border-radius: 12px;
        background: #e0f0ff;
        box-shadow: 0 3px 8px rgba(38, 130, 213, 0.16);
        margin-top: 5px;
        margin-bottom: 8px;
        font-family: 'Courier New', Courier, monospace;
        transition: border-color 0.3s, background 0.3s;
    }

    .barcode:hover {
        border-color: #174d8c;
        background: #d0eaff;
    }

    /* Back Style */
    .id-card-back {
        background: #f9fbfe;
        padding-top: 28px;
        justify-content: flex-start;
    }

    .id-card-back .id-card-logo {
        margin-bottom: 16px;
    }

    .terms-title {
        text-align: center;
        font-weight: bold;
        font-size: 19px;
        margin-bottom: 16px;
        letter-spacing: 1.2px;
    }

    .terms-list {
        font-size: 15px;
        margin-bottom: 22px;
        width: 90%;
        margin-left: 5%;
        color: #272727;
    }

    .terms-list li {
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .dates-block {
        text-align: left;
        width: 78%;
        margin: 0 auto 24px auto;
    }

    .dates-block p {
        font-size: 15px;
        margin: 2px 0;
    }

    .signature-block {
        text-align: center;
        margin-top: 30px;
    }

    .signature-block img {
        height: 34px;
    }

    .signature-block p {
        font-size: 16px;
        margin-top: 6px;
        letter-spacing: 1px;
    }

    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 32px;
        gap: 18px;
        flex-wrap: wrap;
    }

    .back-btn {
        display: inline-block;
        font-weight: 600;
        padding: 8px 24px;
        border-radius: 20px;
        background: #999;
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        transition: background-color 0.3s;
        border: none;
    }

    .back-btn:hover {
        background: #666;
    }

    .print-btn {
        display: inline-block;
        text-align: center;
        margin-top: 0;
    }

    @media print {
        .button-container {
            display: none;
        }

        body {
            background: #fff !important;
        }
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:30px;">
            <!-- Front Side -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="id-card">
                    <div class="id-card-front">
                        <img src="{{ asset('path-to-logo.png') }}" class="id-card-logo" width="60">
                        <img src="{{ asset($employee->image) }}" class="profile-pic">
                        <h2>{{ $employee->name }}</h2>
                        <div>
                            <span class="role-btn">{{ $employee->occupation }}</span>
                        </div>
                        <div class="id-details">
                            <p><span class="field-label">ID No:</span> {{ $employee->tag_id }}</p>
                            <p><span class="field-label">Phone:</span> {{ $employee->phone }}</p>
                            <p><span class="field-label">DOB:</span> {{
                                \Carbon\Carbon::parse($employee->dob)->format('d-m-Y') }}</p>
                            <p><span class="field-label">Gender:</span> {{ $employee->sex }}</p>
                            <p><span class="field-label">From:</span> {{ $employee->city }}</p>
                        </div>
                        <div class="barcode-area">
                            <div class="barcode">{{ $employee->tag_id }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Side -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="id-card">
                    <div class="id-card-back">
                        <img src="{{ asset('path-to-logo.png') }}" class="id-card-logo" width="60">
                        <div class="terms-title">TERMS & CONDITIONS</div>
                        <ul class="terms-list">
                            <li>Identification: Carry the ID card at all times during working hours for identification
                                purposes.</li>
                            <li>Authorized Use: The ID card is strictly for official use and should not be shared or
                                used for unauthorized purposes.</li>
                        </ul>
                        <div class="dates-block">
                            <p><span class="field-label">Join:</span> {{
                                \Carbon\Carbon::parse($employee->join_date)->format('d-m-Y') }}</p>
                            <p><span class="field-label">Expire:</span> {{
                                \Carbon\Carbon::parse($employee->expire_date)->format('d-m-Y') }}</p>
                        </div>
                        <div class="signature-block">
                            <img src="{{ asset('path-to-signature.png') }}">
                            <p>Signature</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation and Print Buttons -->
        <div class="row">
            <div class="col-12">
                <div class="button-container">
                    <a href="{{ route('employee.list') }}" class="back-btn">← Back</a>
                    <button class="btn btn-danger print-btn" onclick="window.print()">Print ID Card</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
