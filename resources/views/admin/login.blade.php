<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Lensa Pesona Lombok &mdash; Agen Tour Wisata</title>

    <meta name="description" content="Lensa Pesona Lombok | Admin Login">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Lensa Pesona Lombok | UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Lensa Pesona Lombok | Admin Login">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('../favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('../favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../favicons.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/earth.min.css') }}">
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 30px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .btn3d {
            position: relative;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            border: 0;
            background: #f26964;
            /* f26964  A0CA8A*/
            font-size: 1.5em;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, .1);
            box-shadow: 4px 3px 0px #c1524e;
            /* c1524e 6EAB4D */
        }

        .btn3d:active {
            top: 3px;
            box-shadow: none;
        }

        .ctabtn {
            background-color: #f26964;
            box-shadow: #c1524e 4px 4px 0px;
            width: 100%;
            font-size: 1.5em;
            padding: 20px;
            border: 0;
            border-radius: 8px;
            transition: transform 200ms, box-shadow 200ms;
            outline: none !important;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
        }

        .ctabtn:active {
            transform: translateY(4px) translateX(4px);
            box-shadow: #c1524e 0px 0px 0px;
        }
    </style>
    <!-- END Stylesheets -->
</head>

<body>

    <!-- Page Container -->
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div style="background-color:#63B47A">
                <!--style="background-color:#63B47A"-->

                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden invisible" data-toggle="appear"
                                data-class="animated bounceIn" data-timeout="250">

                                <form class="js-validation-signin" action="{{ route('login') }}" method="post">
                                    @csrf

                                    <div class="block block-themed block-rounded block-shadow my-20 "
                                        style="border-radius: 30px; box-shadow:15px 15px 0px rgba(0,0,0,.1);">

                                        <div class="bg-white"
                                            style="border-top-left-radius: 30px; border-top-right-radius:30px;">
                                            <div class="py-30 text-center">
                                                <a class=" font-w700" href="#">
                                                    {{-- <i class="si si-briefcase"></i> --}}
                                                    {{-- <span class="font-size-xl text-pulse-light">lensapesona</span><span
                                                        class="font-size-xl">lombok</span> --}}
                                                    <span><img src="{{ asset('assets_l/images/logo.png') }}"
                                                            style="height: min(15vw, 65px);"
                                                            alt="Lensa Pesona Lombok"></span>
                                                </a>
                                                {{-- <h1 class="h4 font-w500 mt-30 mb-10">Welcome to
                                                    Admin Dashboard
                                                </h1> --}}
                                                <h2 class="h5 font-w400 text-muted mt-30 mb-0">Welcome to
                                                    Admin Dashboard!
                                                </h2>
                                            </div>
                                            {{-- @if (Session::get('fail'))
                                        <div class="alert alert-danger alert-dismissible">
                                            {{ Session::get('fail') }}
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close"
                                                title="close">×</a>
                                        </div>
                                        @endif

                                        @csrf --}}
                                        </div>
                                        <div class="block-content text-body-color-dark">
                                            <div class="form-group row px-3">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="text" class="form-control text-body-color-dark"
                                                            id="email" name="email" value="{{ old('email') }}">
                                                        <label for="email">Email</label>
                                                        <span class="text-danger">
                                                            {{-- @error('email')
                                                        {{ $message }}
                                                        @enderror --}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row px-3">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="password" class="form-control text-body-color-dark"
                                                            id="password" name="password"
                                                            value="{{ old('password') }}">
                                                        <label for="password">Password</label>
                                                        <span class="text-danger">
                                                            {{-- @error('password')
                                                        {{ $message }}
                                                        @enderror --}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0 px-3">
                                                <div class="col-sm-12 text-sm-right push mt-30">
                                                    <button type="submit" class="ctabtn justify-content-center">
                                                        {{-- style="border-style: none; border-radius: 20px; padding:10px
                                                    50px 10px 50px;"> --}}
                                                        Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white block-content"
                                            style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                                            <div class="form-group text-center">
                                                <a class="link-effect mr-10 mb-5 d-inline-block font-size-sm"
                                                    href="#">
                                                    <i class="fa fa-user mr-5"></i> Lupa Password?
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>

            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
Codebase JS Core

Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

If you like, you could also include them separately directly from the assets/js/core folder in the following
order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

assets/js/core/jquery.min.js
assets/js/core/bootstrap.bundle.min.js
assets/js/core/simplebar.min.js
assets/js/core/jquery-scrollLock.min.js
assets/js/core/jquery.appear.min.js
assets/js/core/jquery.countTo.min.js
assets/js/core/js.cookie.min.js
-->
    <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>

    <!--
Codebase JS

Custom functionality including Blocks/Layout API as well as other vital and optional helpers
webpack is putting everything together at assets/_es6/main/app.js
-->
    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/op_auth_signin.min.js') }}"></script>
</body>

</html>
