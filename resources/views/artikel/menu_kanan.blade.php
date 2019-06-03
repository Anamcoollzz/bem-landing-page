<div class="col-lg-4 sidebar-widgets">
	<div class="widget-wrap">
		<div class="single-sidebar-widget search-widget">
			<form class="search-form" action="{{ url('artikel') }}" method="get">
				<input placeholder="Cari Artikel" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Artikel'" value="{{ request()->query('search') }}">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<div class="single-sidebar-widget user-info-widget">
			<img src="img/blog/user-info.png" alt="">
			<a href="#"><h4>Charlie Barber</h4></a>
			<p>
				Senior blog writer
			</p>
			<ul class="social-links">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-github"></i></a></li>
				<li><a href="#"><i class="fa fa-behance"></i></a></li>
			</ul>
			<p>
				Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
			</p>
		</div>
		<div class="single-sidebar-widget popular-post-widget">
			<h4 class="popular-title">Artikel Populer</h4>
			<div class="popular-post-list">
				@foreach ($artikel_populer as $art)
				<div class="single-post-list d-flex flex-row align-items-center">
					<div class="thumb">
						<img style="max-width: 90px; max-height: 60px;" class="img-fluid" src="{{ $art->thumbnail ? $art->thumbnail : asset('img/60px.jpg') }}" alt="{{ $art->judul }}">
					</div>
					<div class="details">
						<a href="{{ $art->url }}"><h6>{{ $art->judul }}</h6></a>
						<p>{{ $art->tanggal }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="single-sidebar-widget ads-widget">
			<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
		</div>
		<div class="single-sidebar-widget post-category-widget">
			<h4 class="category-title">Kategori Artikel</h4>
			<ul class="cat-list">
				@foreach ($kategori_artikel as $k)
				<li>
					<a href="{{ url('artikel?kategori='.$k->nama) }}" class="d-flex justify-content-between">
						<p>{{ $k->nama }}</p>
						<p>{{ $k->artikel_count }}</p>
					</a>
				</li>
				@endforeach
			</ul>
		</div>	
		{{-- <div class="single-sidebar-widget newsletter-widget">
			<h4 class="newsletter-title">Newsletter</h4>
			<p>
				Here, I focus on a range of items and features that we use in life without
				giving them a second thought.
			</p>
			<div class="form-group d-flex flex-row">
				<div class="col-autos">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
						</div>
						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
					</div>
				</div>
				<a href="#" class="bbtns">Subcribe</a>
			</div>	
			<p class="text-bottom">
				You can unsubscribe at any time
			</p>								
		</div> --}}
		<div class="single-sidebar-widget tag-cloud-widget">
			<h4 class="tagcloud-title">Tags</h4>
			<ul>
				@foreach ($tags as $tag)
				<li><a href="{{ url('artikel?tags='.$tag->nama) }}">{{$tag->nama}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>