@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('blog/' . $detail->foto) }}')"
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
                <div class="fh5co-left-position">
                    <h1 class="animate-box" style="color: #fff">{{ $detail->judul }}</h1>
                    <div class="row">
                        <div class="animate-box col-md-2 col-xs-3">
                            <p class="text-dark">
                                <i class="fa-solid fa-user-ninja fa-fw"></i><span>
                                    Admin</span>
                                {{-- <i class="fa-solid fa-calendar" style="margin-right: 5px"></i><span> 13 August 2020</span> --}}
                            </p>
                        </div>
                        <div class="animate-box col-md-4 col-xs-6">
                            <p class="text-white">
                                {{-- <i class="fa-solid fa-user-ninja" style="margin-right: 5px"></i><span
                                style="margin-right: 30px">
                                Admin</span> --}}
                                <i class="fa-solid fa-calendar fa-fw"></i><span>
                                    {{ $detail->created_at }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#fh5co-about" class="scroll-btn">
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->

<div id="fh5co-about">
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <figure class="animate-box" style="display: block; margin: auto; width: 70%;">
                    <img src="{{ asset('blog/' . $detail->foto) }}"
                        alt="Liburan di Pulau Lombok: Tempat Wisata, Aktivitas, dan Penginapan Terbaik"
                        class="img-responsive" style="width:fit-content">
                </figure>

            </div>
            <div class="fh5co-sub-lead animate-box" style="text-align: justify; color:#040303">
                <p>{!! $detail->deskripsi !!}</p>
            </div>
            <div class="fh5co-sub-lead animate-box" style="text-align: justify; color:#">
                <div class="animate-box" style="text-align: center; margin-top: 3rem;">
                    <p>
                        <a href="{{ route('wisata') }}" class="btn btn-outline">Lihat Paket Wisata Kami</a>

                        <a href="http://wa.me/628175719779?text=Halo,%20mau%20nanya%20-nanya%20dulu%20dong...?"
                            target="_blank" class="btn btn-success animate-box" style="border-radius: 3rem"><i
                                class="fa fa-whatsapp fa-fw"></i>
                            Dapatkan Penawaran Menarik</a>
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
