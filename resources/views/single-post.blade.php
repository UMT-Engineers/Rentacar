@extends('index')
@section('content')

	<!-- Content  -->
	<main id="page-content">
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Blog Single Post</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="index-2.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="single-post.html" class="breadcrumbs__item-link">Single post</a>
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
				<div class="col-xs-12 col-md-8 col-lg-9 post-single">
					<article class="post-list__item format-standart">
						<figure class="thumbnail post-list__thumbnail">
							<a href="single-post.html"><img src="assets/images/blog-post-img-1.jpg" alt=""></a>
						</figure>
						<div class="post-list__item-content">
							<header class="post-list__item-header">
								<div class="post-list__item-meta post-block_meta">
									<span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
									<a href="#" class="comment"><i class="icon-social"></i>  3</a>
								</div>
								<h3 class="post-list__item-title">RentalCars's Cheap One-Way Car Rental Guide</h3>
								<span class="post-list__item-author"><span><img src="assets/images/author_img_2-small.png" alt=""></span>by <a href="#">Paul Johnson</a></span>
							</header>
							<div class="post-list__item-desc">
								<p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents a car at one location and returns at another. One-way rentals are fairly prevalent in the rental car industry.</p>
								<blockquote class="post-format-quote">
									<p>A search for a one-way rental at is almost identical to searching for a round-trip rental. The only difference is selecting the option to Return at a different location. Looking for a Fort Lauderdale Airport to Orlando International Airport rental? That's a breeze when requesting an quote - simply select the Pick-up Location and then opt for a Different Drop-off Location.</p>
								</blockquote>
								<p>One-way rentals are fairly prevalent in the rental car industry. Although once uncommon, almost all rental car companies are now equipped to handle one-way rentals! In fact, approximately one-eighth of all rentals are booked as one-ways!</p>
								<p>Whether the reason is planned (such as a college student moving away with a number of possessions) or unplanned (such as a flight cancellation), there are many reasons to contemplate a one-way rental and we're always happy to help!</p>
							</div>
							<footer class="post-list__item-footer">
								<ul class="list-tags">
									<li><a href="#">Car</a></li>
									<li><a href="#">Rentals</a></li>
									<li><a href="#">Mobile App</a></li>
								</ul>
								<div class="social-list">
									<ul class="social-list__icons">
										<li><a target="_blank" href="https://www.facebook.com/Tonytemplates/?ref=hl"><i class="icon-facebook-logo"></i></a></li>
										<li><a target="_blank" href="https://twitter.com/tonytemplates/"><i class="icon-twitter-letter-logo"></i></a></li>
										<li><a target="_blank" href="https://plus.google.com/"><i class="icon-google-plus"></i></a></li>
										<li><a target="_blank" href="https://www.linkedin.com/uas/login?"><i class="icon-linkedin-logo"></i></a></li>
									</ul>
								</div>
							</footer>
						</div>
					</article>
					<article class="comments-area">
						<h3>Comments</h3>
						<ol class="comment-list">
							<li class="comment">
								<span class="avatar"></span>
								<div class="info-comment">
									<span class="author">Paul Johnson</span>
									<span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
									<p class="desc">One-way rentals are fairly prevalent in the rental car industry. Although once uncommon, almost all rental car companies are now equipped to handle one-way rentals! In fact, approximately one-eighth of all rentals are booked as one-ways!</p>
								</div>
							</li>
							<li class="comment reply">
								<span class="avatar"></span>
								<div class="info-comment">
									<span class="author">Paul Johnson</span>
									<span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
									<p class="desc">One-way rentals are fairly prevalent in the rental car industry. Although once uncommon, almost all rental car companies are now equipped to handle one-way rentals! In fact, approximately one-eighth of all rentals are booked as one-ways!</p>
								</div>
							</li>
						</ol>
					</article>
					<h3>Leave a Comment</h3>
					<form id="commentForm" class="contact-form comment-form" name="commentform" method="post" novalidate="novalidate">
						<div class="input-wrapper">
							<label></label>
							<input type="text" class="input-custom input-full" name="name" placeholder="First name">
						</div>
						<div class="input-wrapper">
							<label></label>
							<input type="text" class="input-custom input-full" name="lastname" placeholder="Last name">
						</div>
						<div class="input-wrapper">
							<input type="text" class="input-custom input-full" name="email" placeholder="E-mail">
						</div>
						<div class="textarea-wrapper">
							<textarea class="textarea-custom input-full" name="Comment" placeholder="Comment"></textarea>
						</div>
						<button type="submit" id="submit" class="btn btn-form">Place Comment</button>
					</form>
				</div>
				<aside class="col-xs-12 col-md-4 col-lg-3 sidebar" id="sidebar">
					<div class="sidebar-block">
						<form class="form-default">
							<div class="tt-form-search">
								<input type="text" class="form-control" placeholder="Search">
								<a href="#" type="submit" class="btn">GO</a>
							</div>
						</form>
					</div>
					<div class="sidebar-block">
						<h3>Archive</h3>
						<div class="calendar">
							<div class="calendar__header">November 2017</div>
							<table>
								<tr>
									<th>M</th>
									<th>T</th>
									<th>W</th>
									<th>T</th>
									<th>F</th>
									<th>S</th>
									<th>S</th>
								</tr>
								<tr>
									<td></td>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
									<td>6</td>
								</tr>
								<tr>
									<td>7</td>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
									<td>13</td>
								</tr>
								<tr>
									<td>14</td>
									<td>15</td>
									<td>16</td>
									<td class="selected">17</td>
									<td>18</td>
									<td>19</td>
									<td>20</td>
								</tr>
								<tr>
									<td>21</td>
									<td>22</td>
									<td>23</td>
									<td>24</td>
									<td>25</td>
									<td>26</td>
									<td>27</td>
								</tr>
								<tr>
									<td>28</td>
									<td>29</td>
									<td>30</td>
									<td>31</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<div class="calendar__footer"><a href="#">« Sep</a></div>
						</div>
					</div>
					<div class="sidebar-block">
						<h3>Post Categories</h3>
						<ul class="list-categories">
							<li><a href="#">Audios</a> <span class="count">(2)</span></li>
							<li><a href="#">Daily Inspiration</a> <span class="count">(7)</span></li>
							<li><a href="#">Freelance</a> <span class="count">(3)</span></li>
							<li><a href="#">Links</a> <span class="count">(1)</span></li>
							<li><a href="#">Mobile</a> <span class="count">(1)</span></li>
							<li><a href="#">Photography </a> <span class="count">(5)</span></li>
							<li><a href="#">Quotes</a> <span class="count">(1)</span></li>
							<li><a href="#">Resources</a> <span class="count">(3)</span></li>
							<li><a href="#">Status</a> <span class="count">(2)</span></li>
						</ul>
					</div>
					<div class="sidebar-block">
						<h3>Popular tags</h3>
						<ul class="list-tags">
							<li><a href="#">Car</a></li>
							<li><a href="#">Rentals</a></li>
							<li><a href="#">Mobile App</a></li>
							<li><a href="#">Cheap Rental Cars</a></li>
							<li><a href="#">Thrifty</a></li>
							<li><a href="#">Online Booking</a></li>
							<li><a href="#">Airport Rentals</a></li>
							<li><a href="#">Rental Rates</a></li>
							<li><a href="#">Auto</a></li>
						</ul>
					</div>
					<div class="sidebar-block">
						<h3>Featured Posts</h3>
						<div class="post-block">
							<figure class="thumbnail">
								<a href="single-post.html"><img src="assets/images/post-thumb_small-1.jpg" alt=""></a>
							</figure>
							<div class="post-block__content">
								<div class="post-block_meta">
									<span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
									<a href="#" class="comment"><i class="icon-social"></i>  3</a>
								</div>
								<h4>International Airport Car Rental Guide</h4>
							</div>
						</div>
						<div class="post-block">
							<figure class="thumbnail">
								<a href="single-post.html"><img src="assets/images/post-thumb_small-2.jpg" alt=""></a>
							</figure>
							<div class="post-block__content">
								<div class="post-block_meta">
									<span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
									<a href="#" class="comment"><i class="icon-social"></i>  3</a>
								</div>
								<h4>Tampa Airport Rental Car Facility Delayed</h4>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</main>
	<!-- // Content  -->

	@stop