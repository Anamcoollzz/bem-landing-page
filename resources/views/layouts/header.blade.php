<header id="header">
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="{{ route('beranda') }}"><img src="{{ asset('img/logo.png') }}" style="max-height: 50px;" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="{{ route('beranda') }}">Beranda</a></li>
					<li><a href="{{ route('artikel.all') }}">Artikel</a></li>
					<li><a href="{{ route('divisi') }}">Divisi</a></li>
					<li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
					<li class="menu-has-children"><a href="">UKM Oramawa</a>
						<ul>
							@for ($i = 1; $i < 7; $i++)
							<li><a href="#">UKM {{ $i }}</a></li>
							@endfor
						</ul>
					</li>
					<li><a href="{{ route('hubungi') }}">Hubungi</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->