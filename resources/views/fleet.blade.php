@extends('index')
@section('content')

	<!-- Content  -->
	<main id="page-content">
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Fleet</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="index-2.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="fleet.html" class="breadcrumbs__item-link">Fleet</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Breadcrumbs  -->
		<section class="carousel-models_fullwidth">
			<div class="carousel-models_fullwidth__inner">
				<h1>Featured Cars</h1>
				<span class="text-link">Great Rental Car Selection. Unbeatable Deals.</span>
				<div class="swiper-container-models swiper-container">
					<div class="swiper-wrapper">

						<div class="model-info swiper-slide">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_2.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Porsche 911 Carrera S</h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>230$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>
						</div>
						<div class="model-info swiper-slide">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_1.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Hyundai Santa Fe</h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>120$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>
						</div>
						<div class="model-info swiper-slide">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_3.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Mercedes-Benz Metris Passenger Van </h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>115$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>
						</div>
						<div class="model-info swiper-slide swiper-slide-active">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_1.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Hyundai Santa Fe</h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>120$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>

						</div>
						<div class="model-info swiper-slide">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_2.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Porsche 911 Carrera S</h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>230$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>
						</div>
						<div class="model-info swiper-slide">
							<figure class="thumbnail"><a href="details.html"><img src="assets/images/car_3.png" alt=""></a></figure>
							<div class="model-info__content">
								<h3>Mercedes-Benz Metris Passenger Van </h3>
								<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>
								<span class="cost">From <strong>100$</strong> per day</span>
								<span class="btn btn-model" data-remodal-target="modal">book now</span>
							</div>
						</div>
					</div><!-- // swiper-container-car  -->
				</div>
				<div class="swiper-pagination-models"></div>
				<div class="navigation_block">
					<span class="swiper-button-next"><i class="icon-left-arrow2"></i></span>
					<span class="swiper-button-prev"><i class="icon-left-arrow"></i></span>
				</div>
			</div>

		</section> <!-- // Full width carousel  -->


		<section class="isotop-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Our Fleet</h1>
						<!-- Filters -->
						<div class="filters-by-category">
							<ul class="option-set" data-option-key="filter">
								<li><a href="#filter" data-option-value="*" class="selected">All</a></li>
								<li><a href="#filter" data-option-value=".category1" class="">Executive Sedans</a></li>
								<li><a href="#filter" data-option-value=".category2" class="">Luxury Sedans</a></li>
								<li><a href="#filter" data-option-value=".category3" class="">Limousine</a></li>
								<li><a href="#filter" data-option-value=".category4" class="">Sport Car</a></li>
								<li><a href="#filter" data-option-value=".category5" class="">SUV</a></li>
								<li><a href="#filter" data-option-value=".category6" class="">Passenger Van</a></li>
								<li><a href="#filter" data-option-value=".category7" class="">Mini Bus</a></li>
								<li><a href="#filter" data-option-value=".category8" class="">Motobike</a></li>
								<li><a href="#filter" data-option-value=".category9" class="">Yacht</a></li>
								<li><a href="#filter" data-option-value=".category10" class="">Helicopter</a></li>
								<li><a href="#filter" data-option-value=".category11" class="">Airplane</a></li>
							</ul>
						</div>

					<!-- //end Filters -->
						<div class="gallery gallery-isotope" id="gallery">
							<div class="gallery__item  category6 category7">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-01.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Mercedes-Benz Van</h6>
									<span class="cost"><span><strong>20$</strong> / hour</span><span><strong>100$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>
							</div>
							<div class="gallery__item category1 category2 category4">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-02.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Porsche 911 Carrera</h6>
									<span class="cost"><span><strong>50$</strong> / hour</span><span><strong>230$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>
							</div>
							<div class="gallery__item category1 category4  category5">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-03.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Hyundai Santa Fe</h6>
									<span class="cost"><span><strong>18$</strong> / hour</span><span><strong>90$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>

							</div>
							<div class="gallery__item category2 category4">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-04.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Jaguar F-Type S</h6>
									<span class="cost"><span><strong>34$</strong> / hour</span><span><strong>159$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>
							</div>
							<div class="gallery__item category2 category5">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-05.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Hyundai i30</h6>
									<span class="cost"><span><strong>22$</strong> / hour</span><span><strong>115$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>
							</div>
							<div class="gallery__item category6 category5">
								<figure class="gallery__item__image">
									<a class="hover" href="details.html">
										<img src="assets/images/gallery/gallery-img-thumb-06.jpg" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Ford Edge</h6>
									<span class="cost"><span><strong>21$</strong> / hour</span><span><strong>110$</strong> / day</span></span>
									<u><a href="details.html" class="link-gallery">View Details</a></u>
									<span class="btn btn-mini" data-remodal-target="modal">Book now</span>
								</div>
							</div>
						</div>

						<div class="pagination">
							<ul>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
							</ul>
						</div>
					</div>
				</div> <!-- //row -->
			</div> <!-- //Container -->
		</section>

		<section class="car-info-box img-left">
			<div class="car-info-box__description">
				<div class="desc-inner">
					<h1>Luxury Cars</h1>
					<span class="text-link">No booking fees! No markups!</span>
					<p>Search through Rental Cars renowned luxury car rental brands, rent to self-drive in the USA. Delivery at your location across Car Rentals, and Sharjah Car Rentals now available. Through OneClickDrive, you can also hire a BMW, Audi, Jaguar, Range Rover, Lexus or Mercedes with a professional driver chauffeur service. </p>
				</div>
			</div>
			<figure class="car-info-box__thumb has-second-img">
				<img src="assets/images/car_hire1.jpg" alt="" class="first-fade">
				<img src="assets/images/car_hire2.jpg" alt="" class="second-fade">
			</figure>
		</section>
		<section class="iphone-parallax_box">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="iphone-android_info-box">
							<h1><span>Free iPhone &amp;</span> <span>Android App</span></h1>
							<p><span>Renal Cars App is a car rental marketplace where travelers can rent any car they want,</span> <span>wherever they want it, from a community of local car owners throughout the US and Canada.</span></p>
							<span><a target="_blank" href="https://itunes.apple.com/"><img src="assets/images/app_store.jpg" alt=""></a>
							<a target="_blank" href="https://play.google.com/store"><img src="assets/images/google_play.jpg" alt=""></a></span>
							<div class="secondeffect">
								<div class="first-text-block">
									<span>Our Fleet <em>Great Rental Car Selection.</em></span>
								</div>
								<div class="second-text-block">
									<i class="icon-logo"></i>
									<span class="title_block"><span>Rental</span>Cars</span>
									<em><i class="icon-telephone"></i> 1-800-123-4567</em>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>


	</main>
	<!-- // Content  -->

@stop