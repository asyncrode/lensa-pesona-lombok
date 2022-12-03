@include('layouts_landing.head')
@include('layouts_landing.navbar')

<!-- <section id="fh5co-hero" class="js-fullheight"
    style="background-image: url('{{ asset('assets_l/images/senggigi2.jpg') }}')" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">

                <div class="fh5co-left-position">
                    <h2 class="animate-box">Lensa Pesona Lombok</h2>
                    <h3 class="animate-box">Rencanakan Liburan, Tour, Honeymoon, Gathering Terbaik Anda di Lombok
                        bersama lensapesonalombok.id!</h3>
                    <p class="animate-box"><a href="#fh5co-projects" class="btn btn-outline">Paket
                            Wisata Lombok</a> <a href="http://wa.me/08175719779" target="_blank"
                            class="btn btn-primary">Hubungi Kami</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">Lihat penawaran menarik dari kami</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section> -->
<section>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h2>Lensa Pesona Lombok</h2>        
            <h3>Rencanakan Liburan, Tour, Honeymoon, Gathering Terbaik Anda di Lombok
                        bersama lensapesonalombok.id!</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h2>Lensa Pesona Lombok</h2>        
            <h3>Rencanakan Liburan, Tour, Honeymoon, Gathering Terbaik Anda di Lombok
                        bersama lensapesonalombok.id!</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
        <h2>Lensa Pesona Lombok</h2>        
            <h3>Rencanakan Liburan, Tour, Honeymoon, Gathering Terbaik Anda di Lombok
                        bersama lensapesonalombok.id!</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
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

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ route('d-wisata') }}" class="fh5co-project-item">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 3 Hari 2 Malam (Type A)</h2>
                        <p>Kawasan Kuta Mandalika <br>
                            Gili Trawangan, Air & Meno</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ asset('assets_l/images/img_1.jpg') }}" class="fh5co-project-item image-popup">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 3 Hari 2 Malam (Type B)</h2>
                        <p>Kawasan Kuta Mandalika <br>
                            Pantai Pink Lombok</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ asset('assets_l/images/img_1.jpg') }}" class="fh5co-project-item image-popup">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 4 Hari 3 Malam (Type A)</h2>
                        <p>Kawasan Kuta Mandalika.
                            Gili Trawangan, Air & Meno, Air Terjun Sendang Gila & Tiu Kelep</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ asset('assets_l/images/img-1.jpg') }}" class="fh5co-project-item image-popup">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 4 Hari 3 Malam (Type B)</h2>
                        <p>Kawasan Kuta Mandalika<br>
                            Pantai Pink Lombok
                            Gili Trawangan, Air & Meno</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ asset('assets_l/images/img_1.jpg') }}" class="fh5co-project-item image-popup">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 5 Hari 4 Malam (Type A)</h2>
                        <p>Kawasan Kuta Mandalika.
                            Gili Trawangan, Air & Meno
                            Air Terjun Sendang Gila & Tiu Kelep
                            Gili Nanggu, Sudak & Kedis</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <a href="{{ asset('assets_l/images/img_1.jpg') }}" class="fh5co-project-item image-popup">
                    <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Paket Tour Lombok 5 Hari 4 Malam (Type B)</h2>
                        <p>Kawasan Kuta Mandalika.
                            Gili Trawangan, Air & Meno
                            Gili Nanggu, Sudak & Kedis
                            Pantai Pink Lombok</p>
                        <iconify-icon icon="icomoon-free:price-tag"></iconify-icon>
                        <span style="margin-right: 9em;">1550k</span>
                        <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                        <span>Lombok</span>
                    </div>
                </a>
            </div>


        </div>
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
            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_1.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_2.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_2.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_3.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_3.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_4.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_4.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_5.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_5.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <a href="{{ asset('assets_l/images/img_6.jpg') }}" alt="..." class="image-popup">
                        <img src="{{ asset('assets_l/images/img_6.jpg') }}" alt="..." class="img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
        </div>
    </div>

    <div class="animate-box" style="text-align: center;">
        <button class="btn" href="{{ route('galeri') }}">Lihat lebih banyak</button>
    </div>
</section>

<!--Start Blog-->
<div id="fh5co-about">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="fh5co-lead animate-box">Blog</h2>
            </div>
        </div>
        <div class="row row-bottom-padded-lg">
            <div class="col-md-6">
                <figure class="animate-box">
                    <img src="{{ asset('assets_l/images/img_3.jpg') }}"
                        alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
                </figure>
            </div>
            <div class="col-md-6">
                <h2 class="fh5co-lead animate-box">Berenang Bersama Hiu Paus Di Kawasan Teluk Saleh, Sumbawa</h2>
                <p class="fh5co-sub-lead animate-box">Hiu Paus di Pulau Sumbawa tepatnya berada di Kawasan Teluk Saleh,
                    sebuah teluk terbesar di Pulau Sumbawa yang secara administratif … </p>
            </div>
            <div class="btn-pull-right">
                <div class="btn btn-info animate-box">
                    <a href="{{ route('d-blog') }}" style="color: #fff;">Read More</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-person">
                    <figure class="animate-box">
                        <img src="{{ asset('assets_l/images/person2.jpg') }}"
                            alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
                    </figure>
                    <h3 class="fh5co-name animate-box" style="margin-bottom: 1em;">Pulau Satonda Dan Segala
                        Keunikannya</h3>
                    <p class="fh5co-bio animate-box">Pulau Satonda terletak di Desa Nangamiro, Kabupaten Dompu, Nusa
                        Tenggara Barat. Luasnya mencapai 2600 hektar yang terdiri dari 453,70 Hektar … </p>
                    <div class="pull-right">
                        <div class="btn btn-info animate-box">
                            <a href="#" style="color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-person">
                    <figure class="animate-box">
                        <img src="{{ asset('assets_l/images/person1.jpg') }}"
                            alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
                    </figure>
                    <h3 class="fh5co-name animate-box" style="margin-bottom: 1em;">Ketenangan Hakiki Di Pantai Mawun
                        Lombok</h3>
                    <p class="fh5co-bio animate-box">Pulau Satonda terletak di Desa Nangamiro, Kabupaten Dompu, Nusa
                        Tenggara Barat. Luasnya mencapai 2600 hektar yang terdiri dari 453,70 Hektar … </p>
                    <div class="pull-right">
                        <div class="btn btn-info animate-box">
                            <a href="#" style="color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-person">
                    <figure class="animate-box">
                        <img src="{{ asset('assets_l/images/person3.jpg') }}"
                            alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
                    </figure>
                    <h3 class="fh5co-name animate-box" style="margin-bottom: 1em;">Tips Liburan Manja Ke Pantai Selong
                        Belanak Lombok</h3>
                    <p class="fh5co-bio animate-box">Pulau Satonda terletak di Desa Nangamiro, Kabupaten Dompu, Nusa
                        Tenggara Barat. Luasnya mencapai 2600 hektar yang terdiri dari 453,70 Hektar … </p>
                    <div class="pull-right">
                        <div class="btn btn-info animate-box">
                            <a href="#" style="color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('layouts_landing.footer')
@include('layouts_landing.script')
