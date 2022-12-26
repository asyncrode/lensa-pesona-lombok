@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/1.jpg') }}')"
    data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro no-js-fullheight">
            <div class="fh5co-intro-text">
                <!--
       INFO:
       Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
       Example:
       <div class="fh5co-right-position">
      -->
                <div class="fh5co-center-position">
                    <h2 class="animate-box">Blog</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">See our Blog</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->

<div id="fh5co-about">
    <div class="container">

        <div class="row">
            @foreach ($blog as $b)
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 1.5em;">
                    <div class="fh5co-person animate-box">
                        <figure>
                            <img src="{{ asset('blog/' . $b->foto) }}" alt="Lensa Pesona Lombok" class="img-responsive">
                        </figure>
                        <h3 class="fh5co-name" style="margin-bottom: 1em;">{{ $b->judul }}</h3>
                        <div
                            style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px;">
                            <p>{!! Str::limit(strip_tags($b->deskripsi), 200) !!}</p>
                        </div>
                        <div class="pull-right">
                            <div class="btn btn-primary animate-box">
                                <a href="{{ route('d-blog', $b->id) }}" style="color: #fff;">Lanjut Baca</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
