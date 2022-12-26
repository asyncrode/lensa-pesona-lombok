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
                    <h2 class="animate-box">Profile Kami</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">See our Profile</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->

<div id="fh5co-about">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center animate-box">
                <img src="{{ asset('assets_l/images/logo.png') }}" style="height: 70px" alt="Lensa Pesona Lombok">
            </h1>
            <div class="fh5co-sub-lead animate-box">
                <p style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px;">
                    <b>LENSA PESONA LOMBOK</b> adalah perusahaan jasa tour and travel yang berpengalaman dan terpercaya
                    dalam
                    menyediakan layanan <b>Wisata ke Lombok</b>.
                    Kami memiliki tim yang Terlatih dan berpengalaman dalam menangani kebutuhan wisata
                    Anda. <br>
                    Motto kami, <b>"Berpengalaman & Terpercaya"</b>,&nbsp;menggambarkan komitmen <br> kami
                    untuk terus memberikan pelayanan terbaik kepada Anda. Kami percaya bahwa setiap wisatawan yang
                    berkunjung ke Lombok akan
                    merasakan pengalaman yang tidak terlupakan bersama <b>LENSA PESONA LOMBOK</b>. <br> <br>

                    Kami menawarkan berbagai <b>Paket Tour</b> dengan <b>destinasi populer di Lombok</b>, yang dapat
                    disesuaikan dengan kebutuhan
                    Anda, termasuk tour wisata ke pantai-pantai indah, spot snorkeling, dan wisata budaya di Lombok.
                    Selain itu, kami juga memiliki paket untuk kebutuhan <b>Kunjungan Kerja</b> dan <b>Studi
                        Banding</b>, serta keperluan <b>Meeting</b>, <b>Convention</b>, dan <b>Exhibition</b>.
                    Kami juga menawarkan paket untuk kegiatan <b>Family Gathering</b>, termasuk <b>reservasi hotel</b>
                    dan <b>Outbond</b>.
                    Tidak lupa, kami juga menyediakan paket <b>Trekking ke Gunung Rinjani</b> yang indah. <br> <br>

                    Ayo bergabung dengan kami dan nikmati pengalaman wisata yang tidak terlupakan di
                    Lombok
                    bersama <b>LENSA PESONA LOMBOK</b>!
                </p>
            </div>
        </div>
    </div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
