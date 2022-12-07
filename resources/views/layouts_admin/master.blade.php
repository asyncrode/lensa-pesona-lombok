<!doctype html>
<html lang="en" class="no-focus">

<head>
    @include('layouts_admin.header')
</head>

<body>
    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">

        <!-- Sidebar -->
        @include('layouts_admin.sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        @include('layouts_admin.navbar')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('layouts_admin.footer')
        @include('layouts_admin.script')
        @stack('scripts')
        <!-- END Footer -->
    </div>

</body>

</html>