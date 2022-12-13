@include('layouts_landing.head')
@include('layouts_landing.navbar')

<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url('{{ asset('assets_l/images/full_image_2.jpg') }}')" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro no-js-fullheight">
            <div class="fh5co-intro-text">
                <div class="fh5co-center-position">
                    <h2 class="animate-box">{{$detail->nama}}</h2>
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
            <div class="col-md">
                <h1 class="fh5co-lead animate-box">{{$detail->nama}}</h1>
            </div>
            <div class="fh5co-sub-lead animate-box" style="text-align: justify; text-justify: distribute; text-align-last: left; word-spacing:-2px">
                <p>{!!$detail->deskripsi!!}</p>

                <h2>Detail Harga Paket</h2>
                <table class="table">
                    <thead>
                        <tr class="row-1 odd">
                            <th class="column-1">Jumlah Peserta</th>
                            <th class="column-2">Tour Only</th>
                            <th class="column-3">Tour + Hotel</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
                        <tr class="row-2 even">
                            <td class="column-1">1 Orang</td>
                            <td class="column-2">Rp 3,200,000/pax</td>
                            <td class="column-3">Rp 3,720,000/pax</td>
                        </tr>
                        <tr class="row-3 odd">
                            <td class="column-1">2 Orang</td>
                            <td class="column-2">Rp 1,820,000/pax</td>
                            <td class="column-3">Rp 2,070,000/pax</td>
                        </tr>
                        <tr class="row-4 even">
                            <td class="column-1">3 Orang</td>
                            <td class="column-2">Rp 1,360,000/pax</td>
                            <td class="column-3">Rp 1,640,000/pax</td>
                        </tr>
                        <tr class="row-5 odd">
                            <td class="column-1">4 Orang</td>
                            <td class="column-2">Rp 1,130,000/pax</td>
                            <td class="column-3">Rp 1,420,000/pax</td>
                        </tr>
                        <tr class="row-6 even">
                            <td class="column-1">5 Orang</td>
                            <td class="column-2">Rp 1,050,000/pax</td>
                            <td class="column-3">Rp 1,330,000/pax</td>
                        </tr>
                        <tr class="row-7 odd">
                            <td class="column-1">6 Orang</td>
                            <td class="column-2">Rp 950,000/pax</td>
                            <td class="column-3">Rp 1,240,000/pax</td>
                        </tr>
                        <tr class="row-8 even">
                            <td class="column-1">7 Orang</td>
                            <td class="column-2">Rp 1,020,000/pax</td>
                            <td class="column-3">Rp 1,310,000/pax</td>
                        </tr>
                        <tr class="row-9 odd">
                            <td class="column-1">8 Orang</td>
                            <td class="column-2">Rp 960,000/pax</td>
                            <td class="column-3">Rp 1,250,000/pax</td>
                        </tr>
                        <tr class="row-10 even">
                            <td class="column-1">9 Orang</td>
                            <td class="column-2">Rp 910,000/pax</td>
                            <td class="column-3">Rp 1,210,000/pax</td>
                        </tr>
                        <tr class="row-11 odd">
                            <td class="column-1">10 Orang</td>
                            <td class="column-2">Rp 870,000/pax</td>
                            <td class="column-3">Rp 1,170,000/pax</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
</div>

@include('layouts_landing.footer')
@include('layouts_landing.script')
