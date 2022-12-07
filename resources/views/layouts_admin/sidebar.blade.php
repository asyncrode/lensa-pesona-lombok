<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.html">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">lensa</span><span
                            class="font-size-xl text-primary">pesona</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- New Account -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                            href="be_pages_generic_profile.html">Admin</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                            data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                        <form action="#" id="logout-form" method="POST">@csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END New Account -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="#"><i class="si si-home"></i><span class="sidebar-mini-hide">Home <span
                                class="badge badge-pill badge-primary ml-5">3</span></span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">PR</span><span
                        class="sidebar-mini-hidden">Dashboard</span></li>
                <li class="">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span
                            class="sidebar-mini-hide">Manage Paket</span></a>
                    <ul>
                        <li>
                            <a href="{{route('wisata.admin.index')}}">Paket Tour</a>
                        </li>
                        <li>
                            <a href="#">Paket Sewa Mobil</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="si si-lock"></i><span class="sidebar-mini-hide">Post
                            Gallery</span></a>
                </li>
                <li>
                    <a href=""><i class="si si-key"></i><span class="sidebar-mini-hide">
                            Post Blog</span></a>
                </li>

                <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span
                        class="sidebar-mini-hidden">Manage Administrator</span></li>
                <li>
                    <a href=""><i class="si si-users"></i><span class="sidebar-mini-hide">
                            Admin</span></a>
                </li>

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->