@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/1.jpg') }}');"
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
                    <h2 class="animate-box">Paket Sewa Mobil</h2>
                    <h3 class="animate-box">Sewa mobil di Pulau Lombok bersama Lensa Pesona Lombok akan memberikan
                        kenyamanan untuk anda saat berwisata di Lombok.</h3>
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

<div id="fh5co-faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="fh5co-label animate-box">Fasilitas yang kami tawarkan sudah lengkap termasuk driver yang
                    berpengalaman dan mengusai seluk beluk Pulau Lombok dan bbm untuk menunjang liburan anda.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 1em;">
                <table class="table animate-box" style="margin-bottom: 1em;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Tarif/12 Jam</th>
                            <th scope="col">Overtime/Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sewa as $s)
                            <tr>
                                <td>{{ $s->jenis }}</td>
                                <td>{{ $s->kapasitas }}</td>
                                <td>{{ $s->tarif }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <ul class="fh5co-faq-list">
                    <li class="animate-box">
                        <h2>Fasilitas rental yang di dapatkan :</h2>
                        <p>1. Penjemputan area bandara, pelabuhan, Kota Mataram atau Kawasan Senggigi</p>
                        <p>2. Sudah termasuk unit + Driver berpengalaman + BBM</p>
                        <p>3. Penggunaan sampai dengan 12 jam dan maksimal Pukul 23.59 WITA di setiap hari rental</p>
                    </li>
                    <li class="animate-box">
                        <h2>Harga belum termasuk :</h2>
                        <p>1. Parkir, tiket masuk kawasan wisata, uang makan driver dan tips</p>
                        <p>2. Biaya akomodasi driver jika bepergian ke luar kota</p>
                    </li>
                    <li class="animate-box">
                        <h2>Biaya Tambahan Untuk Penggunaan Di Area Berikut:</h2>
                        <table class="table" style="margin-bottom: 1em;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Area</th>
                                    <th scope="col">Biaya Tambahan Avanza</th>
                                    <th scope="col">Biaya Tambahan Innova</th>
                                    <th scope="col">Biaya Tambahan Hiace</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($area as $a)
                                    <tr>
                                        <td>{{ $a->area }}</td>
                                        <td>{{ $a->biayaA }}</td>
                                        <td>{{ $a->biayaH }}</td>
                                        <td>{{ $a->biayaI }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                    <li class="animate-box">
                        <h2>Syarat dan Ketentuan Jasa Transportasi Lombok:</h2>
                        <h3 style="color: red;"><b>Pembayaran</b></h3>
                        <p>Kami menerima pembayaran penuh atau DP sebesar 50% sebagai tanda jadi, dengan pelunasan
                            maksimal saat client bertemu dengan driver kami</p>
                        <h3 style="color: red;"><b>Kebijakan Refund</b></h3>
                        <p>Kebijakan pembatalan pemesanan sewa mobil Lombok akan dikenakan biaya 50% dari total DP
                            minimal 50%. ( DP minimal Rp 300.000 akan dikembalikan Rp 150.000 ke client dan Rp 150.000
                            untuk biaya cancel )</p>
                    </li>
                    <li class="animate-box">
                        <h2>Layanan Antar Jemput Lombok :</h2>
                        <p>Selain jasa sewa mobil Lombok diatas, kami juga menyediakan jasa drop atau layanan antar
                            jemput dari satu lokasi menuju lokasi yang lain dengan tarif sebagai berikut:</p>
                        <table class="table" style="margin-bottom: 1em;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Dari</th>
                                    <th scope="col">Menuju</th>
                                    <th scope="col">Avanza</th>
                                    <th scope="col">Innova</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($antar as $j)
                                    <tr>
                                        <td>{{ $j->dari }}</td>
                                        <td>{{ $j->manuju }}</td>
                                        <td>{{ $j->avanza }}</td>
                                        <td>{{ $j->innova }}</td>
                                    </tr>
                                @endforeach

                                {{-- <tr>
                                        <td>Bandara Internasional Lombok (LOP)</th>
                                        <td>Mataram, Cakra, Sweta</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Bandara Internasional Lombok (LOP)</th>
                                        <td>Mataram, Cakra, Sweta</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Bandara Internasional Lombok (LOP)</th>
                                        <td>Mataram, Cakra, Sweta</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Bandara Internasional Lombok (LOP)</th>
                                        <td>Mataram, Cakra, Sweta</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Bandara Internasional Lombok (LOP)</th>
                                        <td>Mataram, Cakra, Sweta</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr>
                                      <tr>
                                        <td>Pelabuhan Lembar</th>
                                        <td>Kota Mataram dan sekitarnya</td>
                                        <td>Rp 200.000</td>
                                        <td>Rp 300.000</td>
                                      </tr> --}}
                            </tbody>
                        </table>
                    </li>
                    <li class="animate-box">
                        <h3>Pertanyaan Dasar/FAQ Jasa Transportasi Lombok</h3>
                        <b>A:Berapa harga termurah sewa mobil dengan sopir di Lombok?</b>
                        <p>Biaya sewa mobil dengan sopir harga mulai dari Rp 600.000/hari</p>
                        <b>A:Berapa lama waktu pemakaian rental mobil dengan sopir di Lombok?</b>
                        <p>Lama pemakaian rental mobil dengan sopir adalah 12 jam perhari, dengan pemakaian maksimal di
                            pukul 23:59</p>
                        <b>A: Apa bisa rental mobil dengan sopir jemput di Hotel atau Bandara?</b>
                        <p>Ya bisa, untuk sewa mobil dengan sopir dapat dijemput di Bandara, Pelabuhan Lembar, Hotel dan
                            Homestay di sekitaran Kota Mataram dan Kawasan Senggigi</p>
                        <b>A: Mengapa saya harus pesan rental mobil di Lensa Pesona Lombok?</b>
                        <p>Karena dengan rental mobil di Lensa Pesona Lombok anda mendapatkan jaminan pelayanan terbaik
                            dengan unit yang selalu terjaga kenyamanan dan kebersihannya</p>
                        <b>A: Apakah saya dapat sewa mobil lepas kunci tanpa sopir?</b>
                        <p>Mohon maaf, saat ini kami belum menyediakan Mobil rental lepas kunci</p>
                        <b>A:Bagaimana cara memesan rental mobil di Lensa Pesona Lombok?</b>
                        <p>Cara memesan rental mobil dengan sopir cukup mudah, anda dapat menghubungi kami melalui
                            tombol whatsapp yang tertera pada website</p>
                        <b>A: Apakah saya harus booking sewa mobil secara online sebelum ke Lombok?</b>
                        <p>Ya, anda harus booking/pesan mobil rental terlebih dahulu agar mendapat jaminan stok armada
                            kendaraan sewa yang kami miliki masih tersedia</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@include('layouts_landing.footer')
@include('layouts_landing.script')
