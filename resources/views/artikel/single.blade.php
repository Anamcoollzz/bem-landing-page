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
	<title>{{$artikel->judul}}</title>

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
</head>
<body>	
	@include('layouts.header')

	<!-- start banner Area -->
	<section class="relative about-banner">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Membaca adalah jendela dunia				
					</h1>	
					<p class="text-white link-nav">
						<a href="{{ route('beranda') }}">Home </a>
						<span class="lnr lnr-arrow-right"></span>
						<a href="{{ route('artikel.all') }}">Artikel </a>
						{{-- <span class="lnr lnr-arrow-right"></span> --}}
						{{-- <a href="blog-single.html"> Blog Details Page</a></p> --}}
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->					  
	
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						@if($artikel->thumbnail)
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="{{ $artikel->thumbnail }}" alt="{{ $artikel->judul }}">
							</div>
						</div>
						@endif
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								@foreach ($artikel->tags as $tag)
								<li><a href="{{ url('artikel?tags='.$tag) }}">{{$tag}}@if(!$loop->last),@endif</a></li>
								@endforeach
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6">
									<a href="#">{{ is_null($artikel->user_id) ? 'Anonymous' : 'Admin' }}</a>
									<span class="lnr lnr-user"></span>
								</p>
								<p class="date col-lg-12 col-md-12 col-6">
									<a href="#">{{ $artikel->tanggal }}</a>
									<span class="lnr lnr-calendar-full"></span>
								</p>
								{{-- <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul> --}}																				
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20">{{$artikel->judul}}</h3>
							@foreach (explode(" ", $artikel->isi) as $element)
								@if($loop->iteration <= 52)
								{!! $element !!} 
								@endif
							@endforeach
						</div>
						<div class="col-lg-12">
							@foreach (explode(" ", $artikel->isi) as $element)
								@if($loop->iteration > 52)
								{!! $element !!}
								@endif
							@endforeach
						</div>
					</div>
					<div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
							@if($artikel_sebelumnya)
								<div class="thumb">
									<a href="{{ $artikel_sebelumnya->url }}"><img class="img-fluid" style="max-width: 50px;" class="img-fluid" src="{{ $artikel_sebelumnya->thumbnail ? $artikel_sebelumnya->thumbnail : asset('img/60px.jpg') }}" alt="{{ $artikel_sebelumnya->judul }}"></a>
								</div>
								<div class="arrow">
									<a href="{{ $artikel_sebelumnya->url }}"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<p>Sebelumnya</p>
									<a href="{{ $artikel_sebelumnya->url }}"><h4>{{ $artikel_sebelumnya->judul }}</h4></a>
								</div>
							@endif
							</div>
							@if($artikel_setelahnya)
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p>Selanjutnya</p>
									<a href="{{ $artikel_setelahnya->url }}"><h4>{{ $artikel_setelahnya->judul }}</h4></a>
								</div>
								<div class="arrow">
									<a href="{{ $artikel_setelahnya->url }}"><span class="lnr text-white lnr-arrow-right"></span></a>
								</div>
								<div class="thumb">
									<a href="{{ $artikel_setelahnya->url }}"><img style="max-width: 50px;" class="img-fluid" src="{{ $artikel_setelahnya->thumbnail ? $artikel_setelahnya->thumbnail : asset('img/60px.jpg') }}" alt="{{ $artikel_setelahnya->judul }}"></a>
								</div>
							</div>
							@endif
						</div>
					</div>
					{{-- <div class="comments-area">
						<h4>05 Comments</h4>
						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c1.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">Emilly Blunt</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											Never say goodbye till the end comes!
										</p>
									</div>
								</div>
								<div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a> 
								</div>
							</div>
						</div>	
						<div class="comment-list left-padding">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c2.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">Elsie Cunningham</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											Never say goodbye till the end comes!
										</p>
									</div>
								</div>
								<div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a> 
								</div>
							</div>
						</div>	
						<div class="comment-list left-padding">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c3.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">Annie Stephens</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											Never say goodbye till the end comes!
										</p>
									</div>
								</div>
								<div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a> 
								</div>
							</div>
						</div>	
						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c4.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">Maria Luna</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											Never say goodbye till the end comes!
										</p>
									</div>
								</div>
								<div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a> 
								</div>
							</div>
						</div>	
						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c5.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">Ina Hayes</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											Never say goodbye till the end comes!
										</p>
									</div>
								</div>
								<div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a> 
								</div>
							</div>
						</div>	                                             				
					</div>
					<div class="comment-form">
						<h4>Leave a Comment</h4>
						<form>
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
								</div>										
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
							</div>
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							</div>
							<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
						</form>
					</div> --}}
				</div>
				@include('artikel.menu_kanan')
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->
	
	@include('layouts.footer')

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/jquery.tabs.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>	
		<script src="js/isotope.pkgd.min.js"></script>			
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/simple-skillbar.js"></script>							
		<script src="js/owl.carousel.min.js"></script>							
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
	</html>