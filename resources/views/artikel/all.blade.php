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
	<title>Artikel</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
	@include('layouts.header')

	<!-- start banner Area -->
	<section class="banner-area relative blog-home-banner" style="background: url({{asset('img/membaca.jpg')}});" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content blog-header-content col-lg-12">
					<h1 class="text-white">
						Membaca adalah jendela dunia
					</h1>	
					<p class="text-white">
						Dengan membaca manusia bisa menjadi lebih memahami arti dari kehidupan
					</p>
					{{-- <a href="blog-single.html" class="primary-btn">View More</a> --}}
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->				  

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">		
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Social life</h4>
									<span></span>								        
									<p>Enjoy your social life together</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget2.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Politics</h4>
									<span></span>								        
									<p>Be a part of politics</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget3.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Food</h4>
									<span></span>
									<p>Let the food be finished</p>
								</div>
							</a>
						</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					@foreach ($artikel as $d)
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								@foreach ($d->tags as $tag)
								<li><a href="{{ url('artikel?tags='.$tag) }}">{{$tag}}@if(!$loop->last),@endif</a></li>
								@endforeach
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6">
									<a href="#">{{ is_null($d->user_id) ? 'Anonymous' : 'Admin' }}</a>
									<span class="lnr lnr-user"></span>
								</p>
								<p class="date col-lg-12 col-md-12 col-6">
									<a href="#">{{ $d->tanggal }}</a>
									<span class="lnr lnr-calendar-full"></span>
								</p>
								<p class="view col-lg-12 col-md-12 col-6">
									<a href="#">{{ $d->hit }}</a>
									<span class="lnr lnr-eye"></span>
								</p>
								{{-- <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p> --}}
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							@if($d->thumbnail)
							<div class="feature-img">
								<img style="max-height: 250px;" class="img-fluid" src="{{ $d->thumbnail }}" alt="{{ $d->judul }}">
							</div>
							@endif
							<a class="posts-title" href="{{ $d->url }}"><h3>{{ $d->judul }}</h3></a>
							<p class="excert">
								@foreach (explode(" ", $d->isi) as $element)
								@if($loop->iteration < 50)
								{!! $element !!} 
								@endif
								@endforeach
							</p>
							<a href="{{ $d->url }}" class="primary-btn">Selengkapnya</a>
						</div>
					</div>
					@endforeach
					{{ $artikel->links('vendor.pagination.artikel') }}
				</div>
				@include('artikel.menu_kanan')
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->

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