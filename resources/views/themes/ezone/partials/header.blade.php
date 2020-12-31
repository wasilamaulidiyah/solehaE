<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Care</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
			{{-- <header>
	<div class="header-top-furniture wrapper-padding-2 res-header-sm">
		<div class="container-fluid" >
			<div class="header-bottom-wrapper">
				<div class="logo-2 furniture-logo ptb-30">
					<a href="/">
						<img src="{{ asset('themes/ezone/assets/img/icons.png') }}" alt="">
						<br>Pet Care
					</a>
				</div>
				<div class="menu-style-2 furniture-menu menu-hover">
					<nav>
						<ul>
							<li><a href="/">Perkembangan Hewan</a>
								<ul class="single-dropdown">
									<li><a href="/kucing">Kucing</a></li>
									<li><a href="/anjing">Anjing</a></li>
								</ul>
							</li>
							<li><a href="/">Artikel</a>
								<ul class="single-dropdown">
									<li><a href="/artikelkucing">Kucing</a></li>
									<li><a href="/artikelanjing">Anjing</a></li>
								</ul>
							</li>
							<li><a href="/diagnosa">Diagnosa</a>
							</li>
							@if (Auth::user()!= null && Auth::user()->is_admin==1)
							<li><a href="/rekapuser">Rekap Data User</a></li>
							@endif
						</ul>
					</nav>
				</div>
				<!-- @include('themes.ezone.partials.mini_cart') -->
			</div>
			<div class="row">
				<div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul class="menu-overflow">
								<li><a>Perkembangan Hewan</a>
									<ul>
										<li><a href="/kucing">Kucing</a></li>
										<li><a href="/anjing">Anjing</a></li>
									</ul>
								</li>
								<li><a href="#">Artikel</a>
									<ul class="single-dropdown">
										<li><a href="/artikelkucing">Kucing</a></li>
										<li><a href="/artikelanjing">Anjing</a></li>
									</ul>
								</li>

								<li><a href="#">Diagnosa</a>
								</li>
								@if (Auth::user()!= null && Auth::user()->is_admin==1)
								<li><a href="/rekapuser">Rekap Data User</a></li>
								@endif
			</div>
		</div>
	</div>
	<div class="header-bottom-furniture wrapper-padding-2 border-top-3">
		<div class="container-fluid">
			<div class="furniture-bottom-wrapper">
				<div class="furniture-login">
					<ul>
						@guest
							<li>Get Access: <a href="{{ url('login') }}">Login</a></li>
							<li><a href="{{ url('register') }}">Register</a></li>
						@else
							<li>Hello: <a href="{{ url('profil') }}">{{ Auth::user()->first_name }}</a></li>

							<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>


							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						@endguest
					</ul>
				</div>
			</div>
		</div>
	</div>
</header> --}}
        <header id="home">
            <div class="overlay">
                <div class="container">
									<div class="header-top-furniture wrapper-padding-2 res-header-sm">
										<div class="container-fluid" >
											<div class="header-bottom-wrapper">
												<div class="logo-2 furniture-logo ptb-30">
													{{-- <a href="/"> --}}
														<img src="{{ asset('themes/ezone/assets/img/logopc.png') }}" class="rounded" width="200px" height="200px">
														{{-- <br>Pet Care --}}
													{{-- </a> --}}
												</div>
												<div class="menu-style-2 furniture-menu menu-hover">
													<nav>
														<ul>
															<li><a href="/">Perkembangan Hewan</a>
																<ul class="single-dropdown">
																	<li><a href="/kucing">Kucing</a></li>
																	<li><a href="/anjing">Anjing</a></li>
																</ul>
															</li>
															<li><a href="/">Artikel</a>
																<ul class="single-dropdown">
																	<li><a href="/artikelkucing">Kucing</a></li>
																	<li><a href="/artikelanjing">Anjing</a></li>
																</ul>
															</li>
															<li><a href="/diagnosa">Diagnosa</a>
															</li>
															@if (Auth::user()!= null && Auth::user()->is_admin==1)
															<li><a href="/rekapuser">Rekap Data User</a></li>
															@endif
														</ul>
													</nav>
												</div>
												<!-- @include('themes.ezone.partials.mini_cart') -->
											</div>
											<div class="row">
												<div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
													<div class="mobile-menu">
														<nav id="mobile-menu-active">
															<ul class="menu-overflow">
																<li><a>Perkembangan Hewan</a>
																	<ul>
																		<li><a href="/kucing">Kucing</a></li>
																		<li><a href="/anjing">Anjing</a></li>
																	</ul>
																</li>
																<li><a href="#">Artikel</a>
																	<ul class="single-dropdown">
																		<li><a href="/artikelkucing">Kucing</a></li>
																		<li><a href="/artikelanjing">Anjing</a></li>
																	</ul>
																</li>

																<li><a href="#">Diagnosa</a>
																</li>
																@if (Auth::user()!= null && Auth::user()->is_admin==1)
																<li><a href="/rekapuser">Rekap Data User</a></li>
																@endif
											</div>
										</div>
									</div>
									<div class="header-bottom-furniture wrapper-padding-2 border-top-3">
										<div class="container-fluid">
											<div class="furniture-bottom-wrapper">
												<div class="furniture-login">
													<ul>
														@guest
															<li>Get Access: <a href="{{ url('login') }}">Login</a></li>
															<li><a href="{{ url('register') }}">Register</a></li>
														@else
															<li>Hello: <a href="{{ url('profil') }}">{{ Auth::user()->first_name }}</a></li>

															<a href="{{ route('logout') }}"
																onclick="event.preventDefault();
																			document.getElementById('logout-form').submit();">
																{{ __('Logout') }}
															</a>


															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																@csrf
															</form>
														@endguest
													</ul>
												</div>
											</div>
										</div>
									</div>
                    {{-- <div>
                        <h1><span>Pet Care</span><br></h1>
                        <p>Pet Care adalah aplikasi yang bisa membantu meningkatkan kepedulian masyarakat terhadap hewan sekitar dengan memberikan panduan
												pemeliharaan hewan untuk memantau pertumbuhan dan perkembangan hewan peliharaannya.</p>

                    </div> --}}
                </div>
            </div>
        </header>

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            $(function () {

                'use strict';

                var winH = $(window).height();

                $('header').height(winH);

                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));

                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });

                $('.navbar ul.navbar-nav li a').on('click', function (e) {

                    var getAttr = $(this).attr('href');

                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>
{{-- <!-- header start -->
<header>
	<div class="header-top-furniture wrapper-padding-2 res-header-sm">
		<div class="container-fluid" >
			<div class="header-bottom-wrapper">
				<div class="logo-2 furniture-logo ptb-30">
					<a href="/">
						<img src="{{ asset('themes/ezone/assets/img/icons.png') }}" alt="">
						<br>Pet Care
					</a>
				</div>
				<div class="menu-style-2 furniture-menu menu-hover">
					<nav>
						<ul>
							<li><a href="/">Perkembangan Hewan</a>
								<ul class="single-dropdown">
									<li><a href="/kucing">Kucing</a></li>
									<li><a href="/anjing">Anjing</a></li>
								</ul>
							</li>
							<li><a href="/">Artikel</a>
								<ul class="single-dropdown">
									<li><a href="/artikelkucing">Kucing</a></li>
									<li><a href="/artikelanjing">Anjing</a></li>
								</ul>
								<!-- <ul class="single-dropdown">
									<li><a href="about-us.html">about us</a></li>
									<li><a href="menu-list.html">menu list</a></li>
									<li><a href="login.html">login</a></li>
									<li><a href="register.html">register</a></li>
									<li><a href="cart.html">cart page</a></li>
									<li><a href="checkout.html">checkout</a></li>
									<li><a href="wishlist.html">wishlist</a></li>
									<li><a href="contact.html">contact</a></li>
								</ul> -->
							</li>
							<li><a href="/diagnosa">Diagnosa</a>
								<!-- <div class="category-menu-dropdown shop-menu">
									<div class="category-dropdown-style category-common2 mb-30">
										<h4 class="categories-subtitle"> shop layout</h4>
										<ul>
											<li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
											<li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
											<li><a href="shop.html">grid 4 column</a></li>
											<li><a href="shop-grid-box.html">grid box style</a></li>
											<li><a href="shop-list-1-col.html"> list 1 column</a></li>
											<li><a href="shop-list-2-col.html">list 2 column</a></li>
											<li><a href="shop-list-box.html">list box style</a></li>
											<li><a href="cart.html">shopping cart</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
										</ul>
									</div>
									<div class="category-dropdown-style category-common2 mb-30">
										<h4 class="categories-subtitle"> product details</h4>
										<ul>
											<li><a href="product-details.html">tab style 1</a></li>
											<li><a href="product-details-2.html">tab style 2</a></li>
											<li><a href="product-details-3.html"> tab style 3</a></li>
											<li><a href="product-details-4.html">sticky style</a></li>
											<li><a href="product-details-5.html">sticky style 2</a></li>
											<li><a href="product-details-6.html">gallery style</a></li>
											<li><a href="product-details-7.html">gallery style 2</a></li>
											<li><a href="product-details-8.html">fixed image style</a></li>
											<li><a href="product-details-9.html">fixed image style 2</a></li>
										</ul>
									</div> -->
									<!-- <div class="mega-banner-img">
										<a href="single-product.html">
											<img src="{{ asset('themes/ezone/assets/img/banner/18.jpg') }}" alt="">
										</a>
									</div> -->
								<!-- </div> -->
							</li>
							@if (Auth::user()!= null && Auth::user()->is_admin==1)
							<li><a href="/rekapuser">Rekap Data User</a></li>
							@endif
						</ul>
					</nav>
				</div>
				<!-- @include('themes.ezone.partials.mini_cart') -->
			</div>
			<div class="row">
				<div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul class="menu-overflow">
								<li><a>Perkembangan Hewan</a>
									<ul>
										<li><a href="/kucing">Kucing</a></li>
										<li><a href="/anjing">Anjing</a></li>
										<!-- <li><a href="index-fruits.html">Fruits</a></li> -->
										<!-- <li><a href="index-book.html">book</a></li>
										<li><a href="index-electronics.html">electronics</a></li>
										<li><a href="index-electronics-2.html">electronics style 2</a></li>
										<li><a href="index-food.html">food & drink</a></li>
										<li><a href="index-furniture.html">furniture</a></li>
										<li><a href="index-handicraft.html">handicraft</a></li>
										<li><a href="index-smart-watch.html">smart watch</a></li>
										<li><a href="index-sports.html">sports</a></li> -->
									</ul>
								</li>
								<li><a href="#">Artikel</a>
									<ul class="single-dropdown">
										<li><a href="/artikelkucing">Kucing</a></li>
										<li><a href="/artikelanjing">Anjing</a></li>
									</ul>
									<!-- <ul>
										<li><a href="about-us.html">about us</a></li>
										<li><a href="menu-list.html">menu list</a></li>
										<li><a href="login.html">login</a></li>
										<li><a href="register.html">register</a></li>
										<li><a href="cart.html">cart page</a></li>
										<li><a href="checkout.html">checkout</a></li>
										<li><a href="wishlist.html">wishlist</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul> -->
								</li>

								<li><a href="#">Diagnosa</a>
									<!-- <ul>
										<li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
										<li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
										<li><a href="shop.html">grid 4 column</a></li>
										<li><a href="shop-grid-box.html">grid box style</a></li>
										<li><a href="shop-list-1-col.html"> list 1 column</a></li>
										<li><a href="shop-list-2-col.html">list 2 column</a></li>
										<li><a href="shop-list-box.html">list box style</a></li>
										<li><a href="product-details.html">tab style 1</a></li>
										<li><a href="product-details-2.html">tab style 2</a></li>
										<li><a href="product-details-3.html"> tab style 3</a></li>
										<li><a href="product-details-4.html">sticky style</a></li>
										<li><a href="product-details-5.html">sticky style 2</a></li>
										<li><a href="product-details-6.html">gallery style</a></li>
										<li><a href="product-details-7.html">gallery style 2</a></li>
										<li><a href="product-details-8.html">fixed image style</a></li>
										<li><a href="product-details-9.html">fixed image style 2</a></li>
									</ul> -->
								</li>
								@if (Auth::user()!= null && Auth::user()->is_admin==1)
								<li><a href="/rekapuser">Rekap Data User</a></li>
								@endif


			</div>
		</div>
	</div>
	<div class="header-bottom-furniture wrapper-padding-2 border-top-3">
		<div class="container-fluid">
			<div class="furniture-bottom-wrapper">
				<div class="furniture-login">
					<ul>
						@guest
							<li>Get Access: <a href="{{ url('login') }}">Login</a></li>
							<li><a href="{{ url('register') }}">Register</a></li>
						@else
							<li>Hello: <a href="{{ url('profil') }}">{{ Auth::user()->first_name }}</a></li>

							<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>


							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						@endguest
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header end --> --}}
