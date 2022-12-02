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
							<h2 class="animate-box">Galeri</h2>
							
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Galeri Kami</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		<!-- END #fh5co-hero -->

		<section id="fh5co-features">
			<div class="container">
				<div class="row text-center row-bottom-padded-md">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="fh5co-lead animate-box">Galeri</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_2.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_3.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_4.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_5.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_6.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_1.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_2.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_3.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_4.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_5.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<img src="{{ asset('assets_l/images/img_6.jpg') }}" alt="..." class="img-thumbnail">
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
            </div>
            
@include('layouts_landing.footer')
@include('layouts_landing.script')