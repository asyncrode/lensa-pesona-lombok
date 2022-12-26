@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/1.jpg') }}')"
    data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro no-js-fullheight">
            <div class="fh5co-intro-text">
                <div class="fh5co-center-position">
                    <h2 class="animate-box">{{ $detail->nama }}</h2>

                    <div class="animate-box" style="text-align: center;">

                        <a href="http://wa.me/628175719779?text=Halo,%20mau%20nanya%20-nanya%20dulu%20dong...?"
                            target="_blank" class="btn btn-outline animate-box"><i class="fa fa-whatsapp fa-fw"></i>
                            Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">See our Product</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->

<div id="fh5co-about">
    <div class="container">
        <div class="row row-bottom-padded-lg">
            <div class="fh5co-sub-lead animate-box"
                style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px; color:#040303">
                <p>{!! $detail->deskripsi !!}</p>

                <h2 style=" margin-top:3rem; color:#040303;">Detail Harga Paket</h2>
                <table class="table">
                    <thead>
                        <tr class="row-1 odd">
                            <th class="column-1">Jumlah Peserta</th>
                            <th class="column-2">Tour Only (/pax)</th>
                            <th class="column-3">Tour & Hotel (/pax)</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
                        @foreach ($harga as $h)
                            <tr class="row-2 even">
                                <td class="column-1">{{ $h->jmlPeserta }}</td>
                                <td class="column-2">{{ $h->hrgTour }}</td>
                                <td class="column-3">{{ $h->hrgTourHotel }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
            <div class="fh5co-sub-lead animate-box" style="text-align: justify; color:#040303; margin-top: 5rem;">
                <div class="animate-box" style="text-align: center;">

                    <a href="http://wa.me/628175719779?text=Halo,%20mau%20nanya%20-nanya%20dulu%20dong...?"
                        target="_blank" class="btn btn-success animate-box" style="border-radius: 3rem"><i
                            class="fa fa-whatsapp fa-fw"></i>
                        Pesan Sekarang</a>
                </div>
            </div>
            <div class="fh5co-sub-lead animate-box"
                style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px; color:#040303;">
                <h2 style=" margin-top:3rem; color:#040303;">Syarat & Ketentuan </h2>

                <ol>
                    <li>Paket tour di atas adalah PRIVATE dan tidak digabung dengan peserta lain.</li>
                    <li>Itinerary dan akomodasi FLEKSIBEL. Anda bisa request sendiri destinasi dan hotel pilihan anda,
                        team kami akan membantu menyusun itinerary yang efisien baik dari segi waktu maupun biaya.</li>
                    <li>Harga diatas hanya berlaku untuk periode LOW SEASON. Jika anda memesan saat High Season, harga
                        akan berbeda karena masing-masing hotel memiliki aturan High Season Surcharge yang berbeda.</li>
                    <li>Harga dapat berubah sewaktu-waktu sebelum adanya pembayaran DP.</li>
                    <li>Anak usia sampai dengan 3 tahun tidak dikenakan biaya (free of charge).</li>
                    <li>Anak usia 4 – 9 tahun dikenakan biaya 50% (tanpa extra bed).</li>
                    <li>Anak usia 10 tahun keatas dikenakan biaya 100%.</li>
                    <li>Paket diatas hanya berlaku untuk wisatawan domestik.</li>
                    <li>Transportasi yang digunakan adalah transportasi AC standar pariwisata dengan ketentuan sebagai
                        berikut:</li>
                    <ul>
                        <li> 1 – 4 orang menggunakan Avanza.</li>
                        <li> 5 – 6 orang menggunakan Innova Reborn.</li>
                        <li> 7 – 15 orang menggunakan Hiace.</li>
                    </ul>
                    <li>Tanggal tour fleksibel menyesuaikan dengan permintaan anda.</li>
                    <li>Booking paket dilakukan dengan membayar down payment sebesar 30%.</li>
                    <li>Sisa pembayaran dapat ditransfer saat hari pertama program tour.</li>

                </ol>
            </div>
        </div>

    </div>
</div>
</div>

@include('layouts_landing.footer')
@include('layouts_landing.script')
