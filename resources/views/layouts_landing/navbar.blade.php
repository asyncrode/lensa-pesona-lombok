<!--
  INFO:
  Add 'boxed' class to body element to make the layout as boxed style.
  Example:
  <body class="boxed">
 -->

<body>

    <!-- Loader -->
    <div class="fh5co-loader"></div>

    <div id="fh5co-page">
        <section id="fh5co-header">
            <div class="container">
                <nav role="navigation">
                    <ul class="pull-left left-menu mts" style="padding-top: 5px">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('profil') }}">Profil</a></li>
                        <li><a href="{{ route('wisata') }}">Paket Wisata</a></li>
                    </ul>
                    {{-- <h1 id="fh5co-logo"><a href="index.html">lensa pesona lombok<span>.</span></a></h1> --}}
                    {{-- <h1 id="fh5co-logo"><a href="index.html"><img src="{{ asset('assets_l/images/logo_lpl_3.png') }}"
                                style="height: 50px" alt="">lensapesonalombok<span>.id</span></a></h1> --}}
                    <h1 id="fh5co-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets_l/images/logo.png') }}"
                                style="height: min(15vw, 65px);" alt="Lensa Pesona Lombok"></a>
                    </h1>
                    <ul class="pull-right right-menu mts" style="padding-top: 5px">
                        <li><a href="{{ route('sewa') }}">Sewa Mobil</a></li>
                        <li><a href="{{ route('galeri') }}">Gallery</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- #fh5co-header -->
