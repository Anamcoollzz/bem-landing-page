<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>BEM Fasilkom Unej</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<style>
		.tulisan-bem {
			text-align: center;
			color: white;
			font-family: sans-serif;
			margin-top: -300px;
			font-size: 70px;
		}
	</style>
</head>
<body>
	@include('layouts.header')
	@include('layouts.banner')

	<!-- Start home-about Area -->
	<section class="home-about-area pt-120">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6 home-about-left">
					<img class="img-fluid" src="img/about-img.png" alt="">
				</div>
				<div class="col-lg-5 col-md-6 home-about-right">
					<h6>BEM FASILKOM</h6>
					<h1 class="text-uppercase">Kabinet Ganesha</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque blanditiis possimus laboriosam soluta quam repellat sequi porro aperiam expedita dolorum molestias neque esse, optio error, labore inventore. Nostrum, animi, delectus.
					</p>
					<a href="{{ route('visi-misi') }}" class="primary-btn text-uppercase">Selengkapnya</a>
				</div>
			</div>
		</div>	
	</section>
	<!-- End home-about Area -->

	<!-- Start services Area -->
	<section class="services-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content  col-lg-7">
					<div class="title text-center">
						<h1 class="mb-10">Divisi</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos sed quos ipsa saepe ducimus nostrum quaerat. Voluptatem sapiente ullam molestiae deserunt perspiciatis iure rem odit impedit. Quaerat omnis dolores eligendi..</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-pie-chart"></span>
						<a href="#"><h4>Divisi 1</h4></a>
						<p>
							“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-laptop-phone"></span>
						<a href="#"><h4>Divisi 2</h4></a>
						<p>
							If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-camera"></span>
						<a href="#"><h4>Divisi 3</h4></a>
						<p>
							Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.
						</p>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-picture"></span>
						<a href="#"><h4>Divisi 4</h4></a>
						<p>
							Hypnosis quit smoking methods maintain caused quite a stir in the medical world over the last two decades. There is a lot of argument.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-tablet"></span>
						<a href="#"><h4>Divisi 5</h4></a>
						<p>
							Do you sometimes have the feeling that you’re running into the same obstacles over and over again? Many of my conflicts.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="lnr lnr-rocket"></span>
						<a href="#"><h4>Divisi 6</h4></a>
						<p>
							You’ve heard the expression, “Just believe it and it will come.” Well, technically, that is true, however, ‘believing’ is not just thinking that.
						</p>
					</div>				
				</div>														
			</div>
		</div>	
	</section>
	<!-- End services Area -->	

	<!-- Start fact Area -->
	<section class="facts-area section-gap" id="facts-area">
		<div class="container">				
			<div class="row">
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter">40</h1>
					<p>Anggota</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter">50</h1>
					<p>Artikel</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter">60</h1>
					<p>Kajian Strategis</p>
				</div>	
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter">100</h1>
					<p>Alumni</p>
				</div>												
			</div>
		</div>	
	</section>
	<!-- end fact Area -->	

	<!-- Start portfolio-area Area -->
	{{-- <section class="portfolio-area section-gap" id="portfolio">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Our Latest Featured Projects</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>

			<div class="filters">
				<ul>
					<li class="active" data-filter="*">All</li>
					<li data-filter=".vector">Vector</li>
					<li data-filter=".raster">Raster</li>
					<li data-filter=".ui">UI/UX</li>
					<li data-filter=".printing">Printing</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<div class="single-portfolio col-sm-4 all vector">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p1.jpg" alt="">
							</div>
							<a href="img/p1.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a>                              		
						</div>
						<div class="p-inner">
							<h4>2D Vinyl Design</h4>
							<div class="cat">vector</div>
						</div>					                               
					</div>
					<div class="single-portfolio col-sm-4 all raster">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p2.jpg" alt="">
							</div>
							<a href="img/p2.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a>                              		
						</div>
						<div class="p-inner">
							<h4>2D Vinyl Design</h4>
							<div class="cat">vector</div>
						</div>					                               
					</div>                            
					<div class="single-portfolio col-sm-4 all ui">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p3.jpg" alt="">
							</div>
							<a href="img/p3.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a> 

						</div>
						<div class="p-inner">
							<h4>Creative Poster Design</h4>
							<div class="cat">Agency</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all printing">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p4.jpg" alt="">
							</div>
							<a href="img/p4.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a>                            		
						</div> 
						<div class="p-inner">
							<h4>Embosed Logo Design</h4>
							<div class="cat">Portal</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all vector">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p5.jpg" alt="">
							</div>
							<a href="img/p5.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a>                             		
						</div>
						<div class="p-inner">
							<h4>3D Helmet Design</h4>
							<div class="cat">vector</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all raster">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/p6.jpg" alt="">
							</div>
							<a href="img/p6.jpg" class="img-pop-up">	
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
								</div>
							</a>                             		
						</div>
						<div class="p-inner">
							<h4>2D Vinyl Design</h4>
							<div class="cat">raster</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section> --}}
	<!-- End portfolio-area Area -->	

	<!-- Start testimonial Area -->
	<section class="testimonial-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Quotes</h1>
						<p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial">
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user1.png" alt="">
						</div>
						<div class="desc">
							<p>
								Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
							</p>
							<h4>Harriet Maxwell</h4>
							<p>CEO at Google</p>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user2.png" alt="">
						</div>
						<div class="desc">
							<p>
								A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
							</p>
							<h4>Carolyn Craig</h4>
							<p>CEO at Facebook</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->
	
	<!-- Start price Area -->
	<section class="price-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Parlemen</h1>
						<p>When someone does something that they know that they shouldn’t do, did they.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 single-price">
					<div class="top-part">
						<h1 class="package-no">01</h1>
						<h4>Naranda Ranggi</h4>
						<p class="mt-10">For the individuals</p>
					</div>
					<div class="package-list">
						<ul>
							<li>2016</li>
							<li>Sistem Informasi</li>
							<li>Reliable Customer Service</li>
						</ul>
					</div>
					<div class="bottom-part">
						<h1>ketua</h1>
						<a class="price-btn text-uppercase" href="#">Lihat</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-price">
					<div class="top-part">
						<h1 class="package-no">02</h1>
						<h4>Nengah Adinda</h4>
						<p class="mt-10">For the individuals</p>
					</div>
					<div class="package-list">
						<ul>
							<li>2016</li>
							<li>Sistem Informasi</li>
							<li>Reliable Customer Service</li>
						</ul>
					</div>
					<div class="bottom-part">
						<h1>Wakil</h1>
						<a class="price-btn text-uppercase" href="#">Lihat</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-price">
					<div class="top-part">
						<h1 class="package-no">03</h1>
						<h4>Nita</h4>
						<p class="mt-10">For the individuals</p>
					</div>
					<div class="package-list">
						<ul>
							<li>2016</li>
							<li>Sistem Informasi</li>
							<li>Reliable Customer Service</li>
						</ul>
					</div>
					<div class="bottom-part">
						<h1>Sekretaris</h1>
						<a class="price-btn text-uppercase" href="#">Lihat</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 single-price">
					<div class="top-part">
						<h1 class="package-no">04</h1>
						<h4>Mira</h4>
						<p class="mt-10">For the individuals</p>
					</div>
					<div class="package-list">
						<ul>
							<li>2017</li>
							<li>Sistem Informasi</li>
							<li>Reliable Customer Service</li>
						</ul>
					</div>
					<div class="bottom-part">
						<h1>Bendahara</h1>
						<a class="price-btn text-uppercase" href="#">Lihat</a>
					</div>
				</div>																		
			</div>
		</div>	
	</section>
	<!-- End price Area -->			

	<!-- Start recent-blog Area -->
	<section class="recent-blog-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Artikel Terbaru Kita</h1>
					<p>
						Ketika Anda membaca, semua perhatian Anda terfokus pada cerita, dan Anda dapat melibatkan diri Anda dalam setiap detail yang Anda rasakan
					</p>
				</div>
			</div>
			<div class="row">
				@foreach ($artikel_terbaru as $d)
				<div class="single-recent-blog col-lg-4 col-md-4">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" src="{{ $d->thumbnail }}" alt="{{ $d->judul }}">	
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						<div>
							<img class="img-fluid" src="img/user.png" alt="">
							<a href="#"><span>{{ is_null($d->user_id) ? 'Anonymous' : 'Admin' }}</span></a>
						</div>
						<div class="meta">
							{{ $d->tanggal }}
							{{-- <span class="lnr lnr-heart"></span> 15
							<span class="lnr lnr-bubble"></span> 04 --}}
						</div>
					</div>							
					<a href="{{ $d->url }}">
						<h4>{{ $d->judul }}</h4>
					</a>
					<p>
						@foreach (explode(" ", $d->isi) as $element)
						@if($loop->iteration < 30)
						{!! $element !!} 
						@endif
						@endforeach
					</p>
				</div>
				@endforeach
			</div>
		</div>	
	</section>
	<!-- end recent-blog Area -->		

	<!-- Start brands Area -->
	<section class="brands-area">
		<div class="container">
			<div class="brand-wrap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End brands Area -->			

	
	@include('layouts.footer')

	<script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('assets/js/easing.min.js') }}"></script>
	<script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('assets/js/superfish.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.tabs.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('assets/js/simple-skillbar.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/mail-script.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>