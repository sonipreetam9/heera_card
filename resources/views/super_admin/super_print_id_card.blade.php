@extends('super_admin.layouts.header')
@section('super')
    <style>
        .id-card {
            width: 420px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        /* Watermark background */
        .id-card::before {
            content: "";
            position: absolute;
            top: 60%;
            left: 65%;
            width: 80%;
            height: 80%;
            background-image: url('{{ asset($small_logo) }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.09;
            transform: translate(-50%, -50%);
            z-index: 0;
            pointer-events: none;
        }

        .abha-header,
        .abha-body,
        .info-section,
        .back-info {
            position: relative;
            z-index: 1;
            background: transparent;
        }

        .abha-header {
            background-color: #00347a;
            color: white;
            padding: 10px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .abha-header img.left-logo,
        .abha-header img.right-logo {
            height: 48px;
        }

        .abha-header .header-text {
            text-align: center;
            font-size: 14px;
            flex-grow: 1;
            font-weight: 800;
        }

        .abha-body {
            display: flex;
            padding: 20px 16px;
        }

        .left-section,
        .right-section {
            text-align: center;
        }

        .profile-photo {
            width: 120px;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
            border: 2px solid #ccc;
        }

        .qr-code {
            width: 100px;
            height: 100px;
        }

        .info-section {
            padding: 0px 20px;
            font-size: 14px;
            color: #111;
        }

        .info-section p {
            margin: 6px 0;
            line-height: 1.4;
        }

        .abha-back .back-info {
            padding: 20px;
            font-size: 13px;
        }

        .abha-back .back-info ol {
            margin-left: 18px;
            margin-bottom: 12px;
        }

        .signature-block {
            text-align: center;
            margin-top: 20px;
        }

        .signature-block p {
            font-size: 14px;
            margin-top: 4px;
            letter-spacing: 0.8px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a,
        .button-container button {
            display: inline-block;
            padding: 8px 20px;
            margin: 5px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            color: white;
            background-color: #1d4f91;
            cursor: pointer;
            text-decoration: none;
        }

        .button-container button.print-btn {
            background-color: #dc3545;
        }

        @media print {
            .button-container {
                display: none;
            }

            body {
                background: #fff;
            }
        }
    </style>

    <div class="page-content">
        <div class="container-fluid">

            <!-- FRONT SIDE -->
            <div class="id-card abha-front">
                <div class="abha-header">
                    <img src="{{ asset($small_logo) }}" class="left-logo">
                    <div class="header-text">
                        <h4 class="text-white strong">SWASTH MUSKAN ID CARD</h4>
                    </div>
                    <img src="{{ asset($small_logo) }}" class="right-logo">
                </div>

                <div class="abha-body">
                    <div class="left-section">
                        <img src="{{ asset($employee->image) }}" class="profile-photo">
                    </div>
                    <div class="info-section">
                        <p><strong>Name:</strong> {{ $employee->name }}</p>
                        <p><strong>ID No:</strong> {{ $employee->tag_id }}</p>
                        <p><strong>City:</strong> {{ $employee->city }}</p>
                        <p><strong>Gender:</strong> {{ $employee->sex }}</p>
                        <p><strong>DOB:</strong> {{ \Carbon\Carbon::parse($employee->dob)->format('d-m-Y') }}</p>
                        <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                        <p><strong>Join Date:</strong> {{ \Carbon\Carbon::parse($employee->join_date)->format('d-m-Y') }}
                        </p>
                        <p><strong>Expire Date:</strong>
                            {{ \Carbon\Carbon::parse($employee->expire_date)->format('d-m-Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- BACK SIDE -->
            <div class="id-card abha-back">
                <div class="abha-header">
                    <img src="{{ asset($small_logo) }}" class="left-logo">
                    <div class="header-text">
                        <h4 class="text-white strong">SWASTH MUSKAN ID CARD</h4>
                    </div>
                    <img src="{{ asset($small_logo) }}" class="right-logo">
                </div>

                <div class="back-info">
                    <p><strong>Instructions:</strong></p>
                    <ol>
                        <li>Identification: Carry the ID card at all times during working hours for identification purposes.
                        </li>
                        <li>Authorized Use: The ID card is strictly for official use and should not be shared or used for
                            unauthorized purposes.</li>
                        <li>Coverage Upto 1.5 lakh.</li>
                    </ol>

                    <div class="signature-block">
                        <img src="{{ asset($signature) }}" height="50">
                        <p>Signature</p>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="button-container">
                <a href="{{ route('employee.list') }}">← Back</a>
                <button class="print-btn" onclick="window.print()">Print ID Card</button>
            </div>

        </div>
    </div>
@endsection
