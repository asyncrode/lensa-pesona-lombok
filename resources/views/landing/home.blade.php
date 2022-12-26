@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section style="background-color:#efefef">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            {{-- <li data-target="#bs-carousel" data-slide-to="2"></li> --}}
        </ol>
        <div class="hero ">
            <div id="fh5co-hero" class="js-fullheight">
                <div class="fh5co-intro js-fullheight">
                    <div class="fh5co-intro-text">

                        <div class="fh5co-left-position">
                            <h1 class="lt animate-box" style="color: #fff; font-size:xxx-large;">Lensa Pesona Lombok
                            </h1>
                            <p class="pop animate-box">Rencanakan Liburan, Tour, Honeymoon, Gathering Terbaik Anda di
                                Lombok
                                bersama lensapesonalombok.id!</p>
                            <p class="animate-box">
                                <a href="http://wa.me/628175719779" class="btn btn-outline popup-vimeo btn-video">
                                    <i class="fa fa-whatsapp fa-lg fa-fw"></i>
                                    Hubungi Kami</a>
                                <a href="#fh5co-projects" target="_blank" class="btn btn-primary">Paket
                                    Wisata</a>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="fh5co-learn-more animate-box">
                    <a href="#" class="scroll-btn">
                        <span class="text">See our Product</span>
                        <span class="arrow"><i class="icon-chevron-down"></i></span>
                    </a>
                </div> --}}
            </div>
        </div>
        <div class="overlay"></div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
            </div>
        </div>
    </div>
</section>
<!-- END #fh5co-hero -->
<!--Start Paket Wisata-->
<section id="fh5co-projects">
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-lead animate-box">Paket Wisata Lombok</h2>
                <p class="fh5co-sub-lead animate-box">Explore Lombok dengan berbagai paket tour murah
                    di Lensa Pesona Lombok</p>
            </div>
        </div>
        <div class="row">
            @foreach ($wisata as $w)
                @if ($loop->iteration == 1)
                    <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                        <a href="{{ route('d-wisata', $w->id) }}" class="fh5co-project-item">
                            <img src="{{ asset('assets_l/images/tanjungann.jpg') }}" alt="Image"
                                class="img-responsive">
                            <div class="fh5co-text">
                                <h2>{{ $w->nama }}</h2>
                                <p style="padding: 10px 10px ">{{ $w->tujuan }}</p>
                                <div class="row">
                                    <div class="col-lg-6 pull-left">
                                        <i class="fa fa-tag fa-fw" style="color: #fa5555"></i>
                                        <span>{{ $w->harga }}</span>
                                    </div>
                                    <div class="col-lg-6 pull-right">
                                        <i class="fa fa-map-marker-alt fa-fw"></i>
                                        <span>Lombok</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    @if ($loop->iteration == 2)
                        <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                            <a href="{{ route('d-wisata', $w->id) }}" class="fh5co-project-item">
                                <img src="{{ asset('assets_l/images/banana_e.png') }}" alt="Image"
                                    class="img-responsive">
                                <div class="fh5co-text">
                                    <h2>{{ $w->nama }}</h2>
                                    <p style="padding: 10px 10px ">{{ $w->tujuan }}</p>
                                    <div class="row">
                                        <div class="col-lg-6 pull-left">
                                            <i class="fa fa-tag fa-fw" style="color: #fa5555"></i>
                                            <span>{{ $w->harga }}</span>
                                        </div>
                                        <div class="col-lg-6 pull-right">
                                            <i class="fa fa-map-marker-alt fa-fw"></i>
                                            <span>Lombok</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                            <a href="{{ route('d-wisata', $w->id) }}" class="fh5co-project-item">
                                <img src="{{ asset('assets_l/images/senggigi2.jpg') }}" alt="Image"
                                    class="img-responsive">
                                <div class="fh5co-text">
                                    <h2>{{ $w->nama }}</h2>
                                    <p style="padding: 10px 10px ">{{ $w->tujuan }}</p>
                                    <div class="row">
                                        <div class="col-lg-6 pull-left">
                                            <i class="fa fa-tag fa-fw" style="color: #fa5555"></i>
                                            <span>{{ $w->harga }}</span>
                                        </div>
                                        <div class="col-lg-6 pull-right">
                                            <i class="fa fa-map-marker-alt fa-fw"></i>
                                            <span>Lombok</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
        {{-- <div class="row">
            @foreach ($wisata as $w)
                <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                    <a href="{{ route('d-wisata', $w->id) }}" class="fh5co-project-item">
                        <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                        <div class="fh5co-text">
                            <h2>{{ $w->nama }}</h2>
                            <p style="padding: 10px 10px ">{{ $w->tujuan }}</p>
                            <div class="row">
                                <div class="col-lg-6 pull-left">
                                    <i class="fa fa-tag fa-fw" style="color: #fa5555"></i>
                                    <span>{{ $w->harga }}</span>
                                </div>
                                <div class="col-lg-6 pull-right">
                                    <i class="fa fa-map-marker-alt fa-fw"></i>
                                    <span>Lombok</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div> --}}
    </div>
</section>
<!-- END Paket Wisata -->

<!-- Start Galeri-->
<section id="fh5co-features">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="fh5co-lead animate-box">Galeri</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($foto as $f)
                {{-- {{ var_dump($f->foto) }} --}}
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-features">
                        <a href="{{ asset('foto/' . $f->foto) }}" alt="Lensa Pesona Lombok" class="image-popup">
                            <img src="{{ asset('foto/' . $f->foto) }}" alt="Lensa Pesona Lombok" class="img-thumbnail">
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="clearfix visible-sm-block"></div>
        </div>
    </div>

    <div class="animate-box" style="text-align: center; margin-top:3rem;">
        <a class="btn btn-outline" href="{{ route('galeri') }}">Lihat Galeri</a>
    </div>
</section>

<!--Start Blog-->
<section id="fh5co-about">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="fh5co-lead animate-box">Blog</h2>
            </div>
        </div>
        {{-- @foreach ($new as $n) --}}

        <div class="row row-bottom-padded-lg">
            @if (is_null($new))
                <div class="col-md-12 text-center animate-box">
                    <p> Artikel belum tersedia.</p>
                </div>
            @else
                <div class="col-md-6">
                    <figure class="animate-box">
                        <img src="{{ asset('blog/' . $new->foto) }}" alt="Lensa Pesona Lombok"
                            class="img-responsive" style="width: 700px; height: 345px; object-fit: cover;">
                    </figure>
                </div>
                <div class="col-md-6 animate-box">
                    <h2 class="fh5co-lead animate-box"><a
                            href="{{ route('d-blog', $new->id) }}">{{ $new->judul }}</a>
                    </h2>
                    <div
                        style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px;">
                        <p>{!! Str::limit(strip_tags($new->deskripsi), 200) !!}
                            <a href="{{ route('d-blog', $new->id) }}">Baca selengkapnya.</a>
                        </p>
                    </div>
                </div>
            @endif
        </div>

        {{-- @endforeach --}}

        <div class="row">

            @foreach ($blog as $bs)
                @if (is_null($bs))
                @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="fh5co-person animate-box">
                            <figure>
                                <img src="{{ asset('blog/' . $bs->foto) }}" alt="Lensa Pesona Lombok"
                                    class="img-responsive">
                            </figure>
                            <h3 class="fh5co-name" style="margin-bottom: 1em; text-align: left;">
                                <a href="{{ route('d-blog', $bs->id) }}">{{ $bs->judul }}</a>
                            </h3>
                            <div
                                style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px;">
                                <p>{!! Str::limit(strip_tags($bs->deskripsi), 200) !!}
                                    <a href="{{ route('d-blog', $bs->id) }}">Baca selengkapnya.</a>
                                </p>

                            </div>

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="animate-box" style="text-align: center; margin-top: 3rem;">
        <a href="{{ route('blog') }}" class="btn btn-outline">Baca Artikel
            Lainnya</a>
    </div>
</section>


@include('layouts_landing.footer')
@include('layouts_landing.script')
