@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/full_image_2.jpg);" data-next="yes">
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
        <div class="row justify-content-center row-bottom-padded-lg">
            <div class="col-md">
                <h2 class="fh5co-lead animate-box text-center">Berenang Bersama Hiu Paus Di Kawasan Teluk Saleh, Sumbawa
                </h2>
                <div class="animate-box col-md-3 col-md-offset-3">
                    <p class="row text-right">
                        <i class="fa-solid fa-user-ninja" style="margin-right: 5px"></i><span
                            style="padding-right:10px">
                            Admin</span>
                        {{-- <i class="fa-solid fa-calendar" style="margin-right: 5px"></i><span> 13 August 2020</span> --}}
                    </p>
                </div>
                <div class="animate-box col-md-3">
                    <p class="row text-left">
                        {{-- <i class="fa-solid fa-user-ninja" style="margin-right: 5px"></i><span
                            style="margin-right: 30px">
                            Admin</span> --}}
                        <i class="fa-solid fa-calendar" style="margin-right: 5px; padding-left: 10px"></i><span>
                            13 August 2020</span>
                    </p>
                </div>

                <figure class="animate-box">
                    <img src="{{ asset('assets_l/images/Hiu.jpg') }}"
                        alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive"
                        style="margin-left: auto; margin-right:auto;">
                </figure>

            </div>
            <div class="fh5co-sub-lead animate-box" style="text-align: justify;">
                <h2>Berenang Bersama Hiu Paus Di Kawasan Teluk Saleh, Sumbawa</h2>
                <p>Hiu Paus di Pulau Sumbawa tepatnya berada di Kawasan Teluk Saleh, sebuah teluk terbesar di Pulau
                    Sumbawa yang secara administratif. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Delectus optio ratione sit ipsum praesentium maiores sunt voluptate, voluptatem neque laborum ipsa
                    accusamus earum officia illo suscipit enim cumque dicta voluptatibus?</p>
                <p>Consectetur incididunt ut sunt ea pariatur excepteur mollit deserunt non elit id. Ipsum dolore sint
                    culpa ut elit aliquip ullamco voluptate. Nostrud ut incididunt nostrud non. Et sit ad eiusmod aute
                    dolor ipsum esse irure pariatur occaecat consequat minim id sunt.Tempor do enim veniam ea. Id sit
                    tempor est aute do incididunt deserunt sunt aute Lorem reprehenderit sint. Tempor ex mollit enim qui
                    est quis incididunt velit sint nisi sit anim aliqua.Aute et dolor est aute consectetur tempor mollit
                    officia veniam est nisi dolor. In eu proident culpa incididunt reprehenderit minim eu. Ex enim
                    adipisicing consequat eu nostrud laboris nisi. Consequat aute voluptate eu laborum est mollit duis
                    eiusmod Lorem aute anim. Fugiat velit eu consequat do eiusmod cillum voluptate eu ea minim dolor
                    dolor.</p>
                <h2>Cara Menuju Lokasi Hiu Paus Sumbawa</h2>
                <p>Pertama, anda harus tahu dulu dimana Pulau Sumbawa dan cara menuju pusat kotanya yaitu Kota Sumbawa
                    Besar.</p>
                <h3>Menuju Kota Sumbawa Besar</h3>
                <p>Pulau Sumbawa terletak di Provinsi Nusa Tenggara Barat, berada diantara Pulau Lombok dan Labuan Bajo
                    di Flores.</p>
                <p>Untuk menuju Pulau Sumbawa bisa via darat dan udara. Jika via udara, pesanlah penerbangan menuju
                    Bandara Sultan Muhammad Kaharuddin III yang terletak di Kota Sumbawa Besar dengan kode penerbangan
                    SWQ.</p>
                <p>Jika via darat dari Pulau Lombok, anda harus menyeberang menggunakan kapal fery dari Pelabuhan
                    Kayangan Lombok Timur menuju Pelabuhan Poto Tano, Sumbawa Barat. </p>
                <p>Setelah itu lanjut perjalanan darat dari Pelabuhan Poto Tano menuju Kota Sumbawa Besar dengan lama
                    waktu sekitar 2 jam menggunakan kendaraan bermotor.</p>
            </div>

        </div>

    </div>
</div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
