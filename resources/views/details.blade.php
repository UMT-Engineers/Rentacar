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
									<a href="index-2.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="fleet.html" class="breadcrumbs__item-link">Fleet</a> <span>/</span> <a href="details.html" class="breadcrumbs__item-link">Hyundai i30</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Breadcrumbs  -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="model-details-box">
						<a href="fleet.html" class="back-btn">Back to Vehicle Fleet</a>
						<div class="model-details-box__inner">
							<div class="model-details-box__info">
								<h3>Hyundai i30</h3>
								<h6>VEHICLE FEATURES</h6>
								<table class="details-car">
									<tr>
										<th>Hyundai i30</th>
										<th></th>
									</tr>
									<tr>
										<td>Number of Passengers:</td>
										<td>4</td>
									</tr>
									<tr>
										<td>Luggage Capacity:</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Doors:</td>
										<td>5</td>
									</tr>
									<tr>
										<td>Transmission:</td>
										<td>Standard</td>
									</tr>
									<tr>
										<td>Stereo:</td>
										<td>AM/FM w/ CD player</td>
									</tr>
									<tr>
										<td>Air Conditioning:</td>
										<td>A / C</td>
									</tr>
								</table>
								<a href="#" class="btn">CHECK RATES</a>
							</div>
							<div class="model-slider-wrapper">
								<ul id="lightSlider" class="model-slider">
									<li data-thumb="assets/images/model-thumb-1.jpg">
										<img src="assets/images/model-slide-1.jpg" alt="" />
									</li>
									<li data-thumb="assets/images/model-thumb-2.jpg">
										<img src="assets/images/model-slide-2.jpg" alt="" />
									</li>
									<li data-thumb="assets/images/model-thumb-3.jpg">
										<img src="assets/images/model-slide-3.jpg" alt="" />
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- // order-details-form  -->
					<form action="#" class="order-details-form" name="contactform" method="post" novalidate>
						<div class="inner-form">
						<h3>Order Form</h3>
							<div class="inner-form__elements">
								<div class="inner-half">
									<h5>New Reservation</h5>
									<div class="location">
										<input type="text" name="location" placeholder="Your pickup location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									<div class="text-element stop-location">
										<a href="#" class="add" id="add-stop"><i class="icon-plus-black-symbol"></i> <span>Click here to add a stop</span></a>
										<a href="#" class="link-right">airports</a>
									</div>
									<div class="location-drop-off">
										<input type="text" name="location-drop-off" placeholder="Enter drop-off location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									<div class="text-element checkbox-div">
										<div class="wishes">
											<div class="box-checkbox">
												<input type="checkbox" name="takeback" id="checkbox-01" value="yes">
												<label for="checkbox-01">I would like the driver to wait and take me back</label>
											</div>
											<div class="box-checkbox">
												<input type="checkbox" name="takeback" id="checkbox-02" value="yes">
												<label for="checkbox-02">I would like to go by the hours</label>
											</div>
										</div>
										<a href="#" class="link-right">airports</a>
									</div>

									<div class="inner-half__width">
										<div class="input-date">
											<input type="text" name="input-date" placeholder="Pick-up date">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
										<div class="input-time">
											<input type="text" name="input-time" placeholder="Pick-up time">
											<i class="icon-clock"></i>
										</div>
									</div>
									<div class="inner-half__width">
										<div class="input-date">
											<input type="text" name="input-date" placeholder="Drop-off date">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
										<div class="input-time">
											<input type="text" name="input-time" placeholder="Drop-off time">
											<i class="icon-clock"></i>
										</div>
									</div>

									<div class="select-vehicle">
										<select name="select-vehicle">
											<option value="Vehicle class">Vehicle class</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>

									<div class="passengers-luggage">
										<div class="passengers">
											<span>Passengers*</span>
											<select name="passengers">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<div class="luggage">
											<span>Luggage*</span>
											<select name="luggage">
												<option value="0">0</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<div class="carseat">
											<span></span>
											<div class="box-checkbox">
												<input type="checkbox" name="carseat" id="checkbox-03" value="yes">
												<label for="checkbox-03">Car Seat</label>
											</div>
										</div>
									</div>
								</div>
								<div class="inner-half">
									<h5>Passenger's Contact Info</h5>
									<div class="inner-half__width">
										<div class="first-name">
											<input type="text" name="first-name" placeholder="First Name*">
										</div>
										<div class="last-name">
											<input type="text" name="last-name" placeholder="Last Name*">
										</div>
									</div>

									<div class="inner-half__width">
										<div class="your-phone">
											<input type="tel" id="phone" placeholder="Your phone">
										</div>
										<div class="email">
											<input type="text" name="email" placeholder="E-mail">
										</div>
									</div>
									<div class="specialreguests">
										<textarea name="specialreguests" placeholder="Special Requests"></textarea>
										<span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>
									</div>
									<div class="payment">
										<span>Payment</span>
										<select name="your-phone">
											<option value="Pay with Cash">Pay with Cash</option>
											<option value="PayPal">PayPal</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">CONTINUE</button>
						</div>
					</form>
					<!-- // order-details-form  -->
				</div>
			</div>
		</div>
	</main>
	<!-- // Content  -->

	@stop