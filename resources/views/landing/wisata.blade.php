@include('layouts_landing.head')
@include('layouts_landing.navbar')
<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/full_image_2.jpg') }}')" data-next="yes">
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
                    <h2 class="animate-box">Paket Wisata Lombok</h2>
                    <h3 class="animate-box">Explore berbagai paket tour lombok murah dengan pelayanan terbaik di Lensa
                        Pesona Lombok</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">See our products</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->

<section id="fh5co-projects">
    <div class="container">
        <div class="row">
            <div class="fh5co-label animate-box" style="padding: 0px 15px 0px 15px">
                <p class="fh5co-sub-lead" style="text-align: justify;">Paket Tour Lombok 2022 bersama Lensa Pesona
                    Lombok dengan destinasi terlengkap dan pilihan paket wisata yang beragam. Mulai dari Paket liburan
                    Lombok 3 hari 2 malam hingga 5 hari 4 malam.
                    Tersedia juga paket tour lombok tanpa hotel bagi anda yang telah memesan sendiri akomodasi pilihan
                    anda. Pilih beragam paket liburan ke Lombok di bawah ini, atau tentukan sendiri destinasi pilihan
                    anda untuk wisata yang lebih fleksibel!</p>
                <br>
            </div>
        </div>
        <div class="row">
                @foreach($wisata as $w)

                <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                    <a href="{{ route('d-wisata', $w->id) }}" class="fh5co-project-item" >
                        <img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                        <div class="fh5co-text">
                            <h2>{{ $w->nama }}</h2>
                            <p style="padding: 10px 10px ">{{ $w->tujuan }}</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <i class="fa fa-tag"></i> <span>{{ $w->harga }}</span>
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-map-marker-alt"></i> <span>Lombok</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach
        </div>



        <div style="padding-top: 2em">
            <div>
                <h2 class="text-center animate-box pt-2">Mengapa Memilih Lensa Pesona Lombok</h2>
            </div>
            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-text text-center">
                    <b>HARGA JUJUR & TERJANGKAU</b>
                    <p>
                        Tanpa biaya tersembunyi ataupun tambahan lainnya.
                        Terkadang travel lain tidak memberikan info tentang biaya tak terduga yang pasti akan anda
                        keluarkan lagi di luar paket yang anda pesan.
                        Tapi tidak dengan kami, harga kami jelas. Apa yang anda pesan itu yang akan anda dapatkan.
                    </p>
                </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-text text-center">
                    <b>HARGA JUJUR & TERJANGKAU</b>
                    <p>
                        Tanpa biaya tersembunyi ataupun tambahan lainnya.
                        Terkadang travel lain tidak memberikan info tentang biaya tak terduga yang pasti akan anda
                        keluarkan lagi di luar paket yang anda pesan.
                        Tapi tidak dengan kami, harga kami jelas. Apa yang anda pesan itu yang akan anda dapatkan.
                    </p>
                </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-text text-center">
                    <b>HARGA JUJUR & TERJANGKAU</b>
                    <p>
                        Tanpa biaya tersembunyi ataupun tambahan lainnya.
                        Terkadang travel lain tidak memberikan info tentang biaya tak terduga yang pasti akan anda
                        keluarkan lagi di luar paket yang anda pesan.
                        Tapi tidak dengan kami, harga kami jelas. Apa yang anda pesan itu yang akan anda dapatkan.
                    </p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- END #fh5co-features -->

@include('layouts_landing.footer')
@include('layouts_landing.script')
