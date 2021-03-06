<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Ecaps - Responsive Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="/admin/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader" class="d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content-area h-100vh">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <!-- Middle Box -->
                    <div class="middle-box my-5 text-center bg-white p-4 p-sm-5 ">
                        <h4 class="mb-30">Login</h4>

                        <!-- Form -->
                        <form class="login-form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Form Group -->
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Alamat Email" required="">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <!-- Form Group -->
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>

                            <div class="d-flex justify-content-between mt-15">
                                <label class="ckbox">
                                    <input class="form-check-input d-none" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span></span><small class="text-color-gray">Keep me signed in </small>
                                </label>
                                <a class="forgot_pass text-color-gray mb-10" href="#"></a>
                                <a class="forgot_pass text-color-gray mb-10" href="#"><small>Forgot
                                        password?</small></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/ecaps.bundle.js"></script>

    <!-- Active JS -->
    <script src="/admin/js/default-assets/active.js"></script>
</body>

</html>
