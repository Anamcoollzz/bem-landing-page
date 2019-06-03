<header id="header">
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="{{ route('beranda') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="{{ route('beranda') }}">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="price.html">Pricing</a></li>
					<li><a href="{{ route('artikel.all') }}">Artikel</a></li>
					<li class="menu-has-children"><a href="">Pages</a>
						<ul>
							<li><a href="elements.html">Elements</a></li>
							<li class="menu-has-children"><a href="">Level 2 </a>
								<ul>
									<li><a href="#">Item One</a></li>
									<li><a href="#">Item Two</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->