<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Lensa Pesona Lombok | Dashboard</title>

    <meta name="description" content="Kang Sayur Web Admin | Dashboard">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Kang Sayur Web Admin | UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Kang Sayur Web Admin | Dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/earth.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">

    {{-- Summernote --}}
    <link rel="stylesheet" href="{{asset('assets/js/plugins/summernote/summernote-bs4.css')}}">
    </link>
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
            background: #A0CA8A;
            border-radius: 30px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #6EAB4D;
        }

        .btn3d {
            position: relative;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            border: 0;
            background: #A0CA8A;
            /* f26964  A0CA8A*/
            font-size: 1.5em;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, .1);
            box-shadow: 4px 3px 0px #6EAB4D;
            /* c1524e 6EAB4D */
        }

        .btn3d:active {
            top: 3px;
            box-shadow: none;
        }
    </style>
    <!-- END Stylesheets -->
</head>