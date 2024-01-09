

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<a href="{{route('getAbout')}}" class="left-topbar-item">
							Thông tin
						</a>

						<a href="{{route('getContact')}}" class="left-topbar-item">
							Liên hệ
						</a>
					</div>

					<div class="right-topbar">
						@if(Auth::check())
                        	@php
                                $tk = Auth::user();
                            @endphp
							@if($tk->level === 1)
								<a href="{{route('admin.getAdminPost')}}" class="right-topbar-item">
									{{$tk->name}}
								</a>
								<a href="{{route('getLogout')}}" class="right-topbar-item">
									Đăng xuất
								</a>
							@else
								<a href="{{route('getMyprofile')}}" class="right-topbar-item">
									{{$tk->name}}
								</a>
								<a href="{{route('getLogout')}}" class="right-topbar-item">
									Đăng xuất
								</a>
							@endif
						@else
							<a href="{{route('getLogin')}}" class="right-topbar-item">
								Đăng nhập
							</a>	
						@endif				
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->
				<div class="logo-mobile">
					<a href="{{route('getHomepage')}}"><img src="{{asset('theme/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="{{asset('theme/images/icons/icon-night.png')}}" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="{{route('getAbout')}}" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="{{route('getHomepage')}}">Trang chủ</a>
					</li>
					<li>
						<a href="#">Danh mục</a>
						<ul class="sub-menu-m">
							@isset($typeproject)
								@foreach($typeproject as $type)
									<li><a href="#">{{$type->name}}</a></li>
								@endforeach
							@endisset
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				</ul>
			</div>

			<!--  -->
			<div class="wrap-logo no-banner container">
				<div class="logo">
					<a href="{{route('getHomepage')}}"><img src="{{ asset('ad/img/logo-1.png')}}" height="100px" width="150px" alt="LOGO"></a>
				</div>
			</div>

			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="{{route('getHomepage')}}">
							<img src="{{ asset('ad/img/logo-1.png')}}" height="50px" width="50px" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li>
								<a href="{{route('getHomepage')}}">Trang chủ</a>
							</li>
							<li>
								<a>Danh mục &nbsp <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									@isset($typeproject)
										@foreach($typeproject as $type)
											<li><a href="{{route('getTypepage',$type->id)}}">{{$type->name}}</a></li>
										@endforeach
									@endisset
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>