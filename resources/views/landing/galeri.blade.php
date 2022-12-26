@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/1.jpg') }}')"
    data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro no-js-fullheight">
            <div class="fh5co-intro-text">
                <div class="fh5co-center-position">
                    <h2 class="animate-box">Galeri</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">Galeri Kami</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>

</section>
<!-- END #fh5co-hero -->

<section id="fh5co-features">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="fh5co-lead animate-box">Video</h2>
            </div>
            @foreach ($video as $v)
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-feature">
                        {{-- <a href="{{ asset('video/' . $v->video) }}" alt="..." class="popup-youtube"> --}}
                        <video width="100%" poster="{{ asset('assets_l/images/poster.png') }}" controls>
                            <source src="{{ asset('video/' . $v->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p style="color: #040303">{{ $v->judul }}</p>
                        {{-- </a> --}}
                    </div>
                </div>
            @endforeach
            <div class="clearfix visible-sm-block"></div>
        </div>


        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="fh5co-lead animate-box">Galeri</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($foto as $f)
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-feature">
                        <a href="{{ asset('foto/' . $f->foto) }}" alt="Lensa Pesona Lombok" class="image-popup">
                            <img src="{{ asset('foto/' . $f->foto) }}" alt="Lensa Pesona Lombok" class="img-thumbnail">
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="clearfix visible-sm-block"></div>
        </div>
    </div>

    @include('layouts_landing.footer')
    @include('layouts_landing.script')
