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
        <div class="row justify-content-center row-bottom-padded-lg">
            <div class="col-md">
                <p>
                    Lensa Pesona Lombok adalah salah satu perusahaan jasa tour and travel yang berlokasi di pulau lombok, di Jl. Dji Sam Soe No 5 Turide 
                <br>Lombok Barat Nusa Tenggara Barat NTB.
                </p>
                <p>Kami menawarkan berbagai destinasi wisata dengan harga terbaik dengan pelayanan premium.</p>
                <p>Adapun paket yang kami tawarkan adalah paket tour lombok</p>
                
                <h2>
                Get in Touch!
                </h2>
                <p>Tim kami yang berpengalaman Lebih dari 9 Tahun di bidang Pariwisata akan membantu anda untuk mendiskusikan rencana perjalanan anda. Membantu anda menemukan paket tour yang tepat saat berwisata di Pulau Lombok</p>
                <p>Whatsapp: </p>
                <p>Email : </p>
            </div> 
        </div>
    </div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
