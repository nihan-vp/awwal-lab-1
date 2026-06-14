<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Report</title>
    <style>
        @page {
            margin: 125px 45px 105px 45px;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #334155;
            background-color: #ffffff;
            line-height: 1.4;
        }

        .page-header {
            position: fixed;
            top: -105px;
            left: 0;
            right: 0;
            height: 95px;
            border-bottom: 2px solid #8a277d;
        }

        .page-header img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .letterhead-fallback {
            padding: 10px 0;
            height: 80px;
            box-sizing: border-box;
        }

        .fallback-brand {
            float: left;
            width: 55%;
        }

        .fallback-tagline {
            font-size: 9px;
            font-style: italic;
            color: #64748b;
            margin-bottom: 2px;
        }

        .fallback-name {
            font-size: 28px;
            font-weight: bold;
            color: #8a277d;
            letter-spacing: 2px;
            text-transform: uppercase;
            line-height: 1;
        }

        .fallback-sub {
            color: #149447;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-top: 2px;
        }

        .fallback-site {
            color: #8a277d;
            font-size: 10px;
            font-weight: bold;
            margin-top: 2px;
        }

        .fallback-address {
            float: right;
            width: 42%;
            text-align: right;
            font-size: 10px;
            line-height: 1.4;
            color: #475569;
        }

        .page-footer {
            position: fixed;
            bottom: -85px;
            left: 0;
            right: 0;
            height: 80px;
            border-top: 2px solid #149447;
        }

        .page-footer img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer-fallback {
            width: 100%;
            height: 60px;
            color: #ffffff;
            font-size: 10px;
            font-weight: bold;
        }

        .footer-fallback-left,
        .footer-fallback-right {
            float: left;
            width: 50%;
            height: 60px;
            padding-top: 15px;
            box-sizing: border-box;
        }

        .footer-fallback-left {
            background-color: #149447;
            text-align: left;
            padding-left: 15px;
        }

        .footer-fallback-right {
            background-color: #8a277d;
            text-align: right;
            padding-right: 15px;
        }

        .report-body {
            margin-top: 10px;
        }

        /* Patient Info Styling */
        .patient-info {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        .patient-info td {
            padding: 6px 12px;
            font-size: 11px;
            vertical-align: middle;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
        }

        .patient-info td.label {
            font-weight: bold;
            color: #64748b;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 0.5px;
            width: 100px;
        }

        .patient-info td.sep {
            width: 5px;
            color: #94a3b8;
            padding: 0;
            font-weight: bold;
        }

        .patient-info td.value {
            font-weight: bold;
            color: #1e293b;
        }

        /* Category Header */
        .category-title {
            font-size: 12px;
            font-weight: bold;
            color: #8a277d;
            margin: 22px 0 6px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #8a277d;
            padding-bottom: 3px;
            page-break-after: avoid;
        }

        /* Results Table Styling */
        .results-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .results-table th {
            background-color: #f1f5f9;
            color: #475569;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 0.5px;
            padding: 6px 10px;
            border-bottom: 2px solid #cbd5e1;
            text-align: left;
        }

        .results-table td {
            padding: 7px 10px;
            font-size: 11px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
            vertical-align: middle;
        }

        .results-table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .param-col { width: 38%; }
        .value-col { width: 22%; }
        .ref-col { width: 30%; }
        .flag-col { width: 10%; text-align: center; }

        .observed-number {
            font-weight: bold;
            color: #1e293b;
        }

        .section-row td {
            background-color: #f1f5f9;
            font-weight: bold;
            color: #1e293b;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 5px 10px;
            border-bottom: 1px solid #cbd5e1;
        }

        /* Flags styling */
        .flag-cell {
            text-align: center;
            font-weight: bold;
            color: #475569;
        }

        .flag-cell.flag-critical {
            color: #ef4444;
        }

        .flag-cell.flag-high {
            color: #f97316;
        }

        .flag-cell.flag-low {
            color: #3b82f6;
        }

        /* Report closing note and signature */
        .report-closing {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
            page-break-inside: avoid;
        }

        .report-note {
            width: 60%;
            vertical-align: top;
            padding: 10px 15px;
            background-color: #f8fafc;
            border-left: 3px solid #8a277d;
            font-size: 11px;
            color: #475569;
            line-height: 1.5;
        }

        .report-note-label {
            font-weight: bold;
            color: #1e293b;
            margin-bottom: 4px;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 0.5px;
        }

        .signature {
            width: 40%;
            text-align: right;
            vertical-align: bottom;
            padding-bottom: 5px;
        }

        .signature img {
            max-height: 48px;
            display: inline-block;
            margin-bottom: 4px;
        }

        .signature-name {
            font-weight: bold;
            color: #1e293b;
            font-size: 11px;
        }

        .signature-title {
            font-size: 9px;
            color: #64748b;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="page-header">
        @if (extension_loaded('gd'))
            <img src="{{ public_path('images/report-header-awwal.png') }}" alt="AWWAL LAB">
        @else
            <div class="letterhead-fallback">
                <div class="fallback-brand">
                    <div class="fallback-tagline">"Accurate Diagnosis for Effective Treatment"</div>
                    <div class="fallback-name">awwal</div>
                    <div class="fallback-sub">QUALITY DIAGNOSTIC LABS</div>
                    <div class="fallback-site">www.awwallabs.in</div>
                </div>
                <div class="fallback-address">
                    A Muhammed's Complex<br>
                    Chenaykunnu Road Jn.<br>
                    <strong>PATHAPPIRIYAM</strong>, Vayanasala<br>
                    Ph : 7034 250 209, 7559 049 948<br>
                    Email : awwallabppm@gmail.com
                </div>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <div class="page-footer">
        @if (extension_loaded('gd'))
            <img src="{{ public_path('images/report-footer-awwal.png') }}" alt="Working Hours">
        @else
            <div class="footer-fallback">
                <div class="footer-fallback-left">
                    QUALITY OF OUR LABORATORY IS CONTROLLED BY CMC VELLORE
                </div>
                <div class="footer-fallback-right">
                    Working Hours : 6.30 am To 9.00 pm<br>Sunday 7.00 am To 12.00 pm
                </div>
            </div>
        @endif
    </div>

    <!-- Main Content -->
    <div class="report-body">
        @php
            $patientName = trim(strtoupper($patient->first_name . ' ' . $patient->last_name));
            $referenceNo = str_replace(['#P-', '#'], '', $patient->patient_id);
            $sex = strtoupper($patient->gender ?? '');
            $reportDate = optional($report->sample_received_on)->format('d-M-Y - h:i:s A');
            $printedDate = now()->format('d-M-Y - h:i:s A');
        @endphp

        <!-- Patient Info Card -->
        <table class="patient-info">
            <tr>
                <td class="label">Patient Name</td>
                <td class="sep">:</td>
                <td class="value" style="width: 35%;">{{ $patientName }}</td>
                <td class="label" style="width: 105px;">Age / Sex</td>
                <td class="sep">:</td>
                <td class="value">{{ $patient->age }} &nbsp;/&nbsp; {{ $sex }}</td>
            </tr>
            <tr>
                <td class="label">Reference No</td>
                <td class="sep">:</td>
                <td class="value">{{ $referenceNo }}</td>
                <td class="label">Specimen</td>
                <td class="sep">:</td>
                <td class="value">Blood / Serum</td>
            </tr>
            <tr>
                <td class="label">Referred By</td>
                <td class="sep">:</td>
                <td class="value">{{ $report->doctor_name }}</td>
                <td class="label">Received Date</td>
                <td class="sep">:</td>
                <td class="value">{{ $reportDate }}</td>
            </tr>
            <tr>
                <td class="label">Printed Date</td>
                <td class="sep">:</td>
                <td class="value" colspan="4">{{ $printedDate }}</td>
            </tr>
        </table>

        <!-- Results Section -->
        @foreach ($groupedResults as $category => $results)
            <div class="category-title">{{ $category }}</div>
            <table class="results-table">
                <thead>
                    <tr>
                        <th class="param-col">Parameter</th>
                        <th class="value-col">Observed Value</th>
                        <th class="ref-col">Reference Value</th>
                        <th class="flag-col">Flag</th>
                    </tr>
                </thead>
                <tbody>
                    @php $lastSubheading = null; @endphp
                    @foreach ($results as $r)
                        @php
                            $subheading = trim($r['subcategory'] ?? '');
                            $value = trim((string)($r['observed_value'] ?? ''));
                            $unit = trim((string)($r['unit'] ?? ''));
                            $flag = trim((string)($r['flag'] ?? ''));
                            $flagClass = '';
                            if ($flag === 'C') {
                                $flagClass = 'flag-critical';
                            } elseif ($flag === 'H') {
                                $flagClass = 'flag-high';
                            } elseif ($flag === 'L') {
                                $flagClass = 'flag-low';
                            }
                        @endphp

                        @if ($subheading !== '' && $subheading !== $lastSubheading)
                            <tr class="section-row">
                                <td colspan="4">{{ strtoupper($subheading) }}</td>
                            </tr>
                            @php $lastSubheading = $subheading; @endphp
                        @endif

                        <tr>
                            <td>{{ $r['name'] ?? '' }}</td>
                            <td>
                                <span class="observed-number">{{ $value }}</span>
                                @if ($unit !== '')
                                    <span style="color: #64748b; font-size: 10px;">&nbsp;{{ $unit }}</span>
                                @endif
                            </td>
                            <td>{!! nl2br(e($r['normal_value'] ?? $r['biological_reference'] ?? '')) !!}</td>
                            <td class="flag-cell {{ $flagClass }}">{{ $flag ?: '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

        <!-- Report Footer Note & Signature -->
        <table class="report-closing">
            <tr>
                <td class="report-note">
                    <div class="report-note-label">Notes / Interpretation</div>
                    @if($report->notes)
                        <div>{!! nl2br(e($report->notes)) !!}</div>
                    @else
                        <div style="color: #94a3b8; font-style: italic;">No notes provided.</div>
                    @endif
                </td>
                <td class="signature">
                    @if($report->signature && is_file($report->signature->imageAbsolutePath()))
                        <img src="{{ $report->signature->imageAbsolutePath() }}" alt="{{ $report->signature->name }}">
                        <div class="signature-name">{{ $report->signature->name }}</div>
                        <div class="signature-title">Authorized Signatory</div>
                    @else
                        <div class="signature-name">Medi Technician</div>
                        <div class="signature-title">Lab In-Charge</div>
                    @endif
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
