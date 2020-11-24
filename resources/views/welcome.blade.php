<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seleksi Bersama</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('datepicker/css/bootstrap-datepicker.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        body {
            font-family: 'Roboto', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        i {
            margin-right: 10px;
        }

        /*------------------------*/
        input:focus,
        button:focus,
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #fff;
        }

        /*----------step-wizard------------*/
        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        /*---------signup-step-------------*/
        .bg-color {
            background-color: #333;
        }

        .signup-step-container {
            padding: 80px 0px;
            padding-bottom: 60px;
        }

        .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }

        .wizard>div.wizard-inner {
            position: relative;
            margin-bottom: 50px;
            text-align: center;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 75%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 15px;
            z-index: 1;
        }

        .wizard .nav-tabs>li.active>a,
        .wizard .nav-tabs>li.active>a:hover,
        .wizard .nav-tabs>li.active>a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            border-radius: 50%;
            background: #fff;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 16px;
            color: #0e214b;
            font-weight: 500;
            border: 1px solid #ddd;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #0db02b;
            color: #fff;
            border-color: #0db02b;
        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        .wizard .nav-tabs>li.active>a i {
            color: #0db02b;
        }

        .wizard .nav-tabs>li {
            width: 32%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: red;
            transition: 0.1s ease-in-out;
        }



        .wizard .nav-tabs>li a {
            width: 30px;
            height: 30px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
            background-color: transparent;
            position: relative;
            top: 0;
        }

        .wizard .nav-tabs>li a i {
            position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }

        .wizard .nav-tabs>li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 20px;
        }


        .wizard h3 {
            margin-top: 0;
        }

        .prev-step,
        .next-step {
            font-size: 13px;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
        }

        .next-step {
            background-color: #0db02b;
        }

        .skip-btn {
            background-color: #cec12d;
        }

        .step-head {
            font-size: 20px;
            text-align: center;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .term-check {
            font-size: 14px;
            font-weight: 400;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 40px;
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 40px;
            margin: 0;
            opacity: 0;
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: 40px;
            padding: .375rem .75rem;
            font-weight: 400;
            line-height: 2;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: 38px;
            padding: .375rem .75rem;
            line-height: 2;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 .25rem .25rem 0;
        }

        .footer-link {
            margin-top: 30px;
        }

        .all-info-container {}

        .list-content {
            margin-bottom: 10px;
        }

        .list-content a {
            padding: 10px 15px;
            width: 100%;
            display: inline-block;
            background-color: #f5f5f5;
            position: relative;
            color: #565656;
            font-weight: 400;
            border-radius: 4px;
        }

        .list-content a[aria-expanded="true"] i {
            transform: rotate(180deg);
        }

        .list-content a i {
            text-align: right;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: 0.5s;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #fdfdfd;
        }

        .list-box {
            padding: 10px;
        }

        .signup-logo-header .logo_area {
            width: 200px;
        }

        .signup-logo-header .nav>li {
            padding: 0;
        }

        .signup-logo-header .header-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list-inline li {
            display: inline-block;
        }

        .pull-right {
            float: right;
        }

        /*-----------custom-checkbox-----------*/
        /*----------Custom-Checkbox---------*/
        input[type="checkbox"] {
            position: relative;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="checkbox"]::before,
        input[type="checkbox"]::after {
            position: absolute;
            content: "";
            display: inline-block;
        }

        input[type="checkbox"]::before {
            height: 16px;
            width: 16px;
            border: 1px solid #999;
            left: 0px;
            top: 0px;
            background-color: #fff;
            border-radius: 2px;
        }

        input[type="checkbox"]::after {
            height: 5px;
            width: 9px;
            left: 4px;
            top: 4px;
        }

        input[type="checkbox"]:checked::after {
            content: "";
            border-left: 1px solid #fff;
            border-bottom: 1px solid #fff;
            transform: rotate(-45deg);
        }

        input[type="checkbox"]:checked::before {
            background-color: #18ba60;
            border-color: #18ba60;
        }


        @media (max-width: 767px) {
            .sign-content h3 {
                font-size: 40px;
            }

            .wizard .nav-tabs>li a i {
                display: none;
            }

            .signup-logo-header .navbar-toggle {
                margin: 0;
                margin-top: 8px;
            }

            .signup-logo-header .logo_area {
                margin-top: 0;
            }

            .signup-logo-header .header-flex {
                display: block;
            }
        }

    </style>
</head>

<body class="antialiased">
    <div>
        <div class="text-center mt-4 mb-2" style="padding-top:50px">
            <h1><strong>Seleksi Bersama</strong></h1>
        </div>
        <section class="signup-step-container">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                            aria-expanded="true"><span class="round-tab">1 </span>
                                            <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biodata Diri</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                            aria-expanded="false"><span class="round-tab">2</span>
                                            <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkas</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                                class="round-tab">3</span>
                                            <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preview</i></a>
                                    </li>
                                </ul>
                            </div>

                            <form role="form" action="index.html" class="login-box">
                                <div class="tab-content" id="main_form">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <h4 class="text-center">Biodata Diri</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIP</label>
                                                    <input class="form-control" maxlength="18" id="nip"
                                                        placeholder="199912334519990001" type="text" name="nip"
                                                        placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="nama" name="nama"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat <span class="text-danger">*</span></label>
                                                    <textarea name="alamat" id="alamat" class="form-control"
                                                        rows="2" placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tanggal Lahir <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control datepicker" type="text" id="ttl" name="ttl"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agama <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="agama" name="agama"
                                                        placeholder="Agama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pendidikan <span class="text-danger">*</span></label>
                                                    <select name="pendidikan" id="pendidikan"
                                                        class="select2 form-control">
                                                        <br>
                                                        <option selected disabled>Pilih Pendidikan</option>
                                                        @foreach($pendidikan as $pend)
                                                        <option value="{{ $pend['njur'] }}">{{ $pend['njur'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jurusan <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="jurusan" name="jurusan"
                                                        placeholder="Jurusan">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Jabatan <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="jabatan" name="jabatan"
                                                        placeholder="Jabatan">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Unit Kerja <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="unit_kerja"
                                                        name="unit_kerja" placeholder="Unit Kerja">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn next-step">Continue to next
                                                    step</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <h4 class="text-center">Step 2</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address 1 *</label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City / Town *</label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country *</label>
                                                    <select name="country" class="form-control" id="country">
                                                        <option value="NG" selected="selected">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Registration No.</label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step">Continue</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <h4 class="text-center">Step 4</h4>
                                        <div class="all-info-container">
                                            <div class="list-content">
                                                <a href="#listone" data-toggle="collapse" aria-expanded="false"
                                                    aria-controls="listone">Collapse 1 <i
                                                        class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listone">
                                                    <div class="list-box">
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>First and Last Name *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone Number *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listtwo" data-toggle="collapse" aria-expanded="false"
                                                    aria-controls="listtwo">Collapse 2 <i
                                                        class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listtwo">
                                                    <div class="list-box">
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address 1 *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City / Town *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country *</label>
                                                                    <select name="country2" class="form-control"
                                                                        id="country2" disabled="disabled">
                                                                        <option value="NG" selected="selected">Nigeria
                                                                        </option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="KP">North Korea</option>
                                                                        <option value="MP">Northern Mariana Islands
                                                                        </option>
                                                                        <option value="NO">Norway</option>
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Legal Form</label>
                                                                    <select name="legalform2" class="form-control"
                                                                        id="legalform2" disabled="disabled">
                                                                        <option value="" selected="selected">-Select an
                                                                            Answer-</option>
                                                                        <option value="AG">Limited liability company
                                                                        </option>
                                                                        <option value="GmbH">Public Company</option>
                                                                        <option value="GbR">No minimum capital,
                                                                            unlimited liability of partners, non-busines
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Business Registration No.</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Registered</label>
                                                                    <select name="vat2" class="form-control" id="vat2"
                                                                        disabled="disabled">
                                                                        <option value="" selected="selected">-Select an
                                                                            Answer-</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Seller</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Company Name *</label>
                                                                    <input class="form-control" type="password"
                                                                        name="name" placeholder="" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <a href="#listthree" data-toggle="collapse" aria-expanded="false"
                                                    aria-controls="listthree">Collapse 3 <i
                                                        class="fa fa-chevron-down"></i></a>
                                                <div class="collapse" id="listthree">
                                                    <div class="list-box">
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Number *</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                                            <li><button type="button" class="default-btn next-step">Finish</button></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script>
        // ------------step-wizard-------------
        $(document).ready(function () {
            $('.select2').select2();

            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });

            $('#nip').change(function (data) {
                let val = $(this).val();

                if (val != undefined) {
                    $.ajax({
                        url: '/cekNip',
                        method: 'GET',
                        data: {
                            nip: val
                        },
                        success: function (data) {
                            if (data.status == true) {

                            } else {

                            }
                        }
                    })
                }
            })

            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

                var target = $(e.target);

                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }


        $('.nav-tabs').on('click', 'li', function () {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });

    </script>
</body>

</html>
