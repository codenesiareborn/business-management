@php
	$uri            = Route::current()->uri;
	$nav_exception	= ["login", "register"];
	$nav_hide       = in_array($uri, $nav_exception);
	
	$nav_v2			= ["/", "home", "about"];
	$nav_v2			= in_array($uri, $nav_v2);
@endphp

@if(!$nav_hide)
	@if($nav_v2)
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
			<div class="container-fluid">
				<!-- Navbar brand -->
				<a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
					<strong>MDB</strong>
				</a>
				<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarExample01">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item active">
							<a class="nav-link" aria-current="page" href="#intro">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">Learn Bootstrap 5</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
						</li>
					</ul>

					<ul class="navbar-nav d-flex flex-row">
						@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if(Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																				document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
						<!-- Icons -->
						<li class="nav-item me-3 me-lg-0">
							<a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
						<li class="nav-item me-3 me-lg-0">
							<a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="nav-item me-3 me-lg-0">
							<a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="nav-item me-3 me-lg-0">
							<a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
								<i class="fab fa-github"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navbar -->
	@else
		<style>
			@media (min-width: 991.98px) {
					main {
							padding-left: 240px;
					}
			}

			/* Sidebar */
			.sidebar {
					position: fixed;
					top: 0;
					bottom: 0;
					left: 0;
					padding: 58px 0 0; /* Height of navbar */
					box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
					width: 240px;
					z-index: 600;
			}

			@media (max-width: 991.98px) {
					.sidebar {
							width: 100%;
					}
			}
			.sidebar .active {
					border-radius: 5px;
					box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
			}

			.sidebar-sticky {
					position: relative;
					top: 0;
					height: calc(100vh - 48px);
					padding-top: 0.5rem;
					overflow-x: hidden;
					overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
			}
		</style>
		<!-- Sidebar -->
		<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
		  <div class="position-sticky">
		    <div class="list-group list-group-flush mx-3 mt-4">
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
		        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
		      </a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
		        <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic </span>
		      </a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple">
		        <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
		      </a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
		      <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
		    </div>
		  </div>
		</nav>
		<!-- Sidebar -->
		<!-- Navbar -->
		<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		  <!-- Container wrapper -->
		  <div class="container-fluid">
		    <!-- Toggle button -->
		    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
		      <i class="fas fa-bars"></i>
		    </button>

		    <!-- Brand -->
		    <a class="navbar-brand" href="#">
		      <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
		    </a>
		    <!-- Search form -->
		    <form class="d-none d-md-flex input-group w-auto my-auto">
		      <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
		      <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
		    </form>

		    <!-- Right links -->
		    <ul class="navbar-nav ms-auto d-flex flex-row">
		      <!-- Notification dropdown -->
		      <li class="nav-item dropdown">
		        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
		          <i class="fas fa-bell"></i>
		          <span class="badge rounded-pill badge-notification bg-danger">1</span>
		        </a>
		        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
		          <li><a class="dropdown-item" href="#">Some news</a></li>
		          <li><a class="dropdown-item" href="#">Another news</a></li>
		          <li>
		            <a class="dropdown-item" href="#">Something else</a>
		          </li>
		        </ul>
		      </li>

		      <!-- Icon -->
		      <li class="nav-item">
		        <a class="nav-link me-3 me-lg-0" href="#">
		          <i class="fas fa-fill-drip"></i>
		        </a>
		      </li>
		      <!-- Icon -->
		      <li class="nav-item me-3 me-lg-0">
		        <a class="nav-link" href="#">
		          <i class="fab fa-github"></i>
		        </a>
		      </li>

		      <!-- Icon dropdown -->
		      <li class="nav-item dropdown">
		        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
		          <i class="united kingdom flag m-0"></i>
		        </a>
		        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
		          <li>
		            <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
		              <i class="fa fa-check text-success ms-2"></i></a>
		          </li>
		          <li>
		            <hr class="dropdown-divider" />
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
		          </li>
		          <li>
		            <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
		          </li>
		        </ul>
		      </li>

		      <!-- Avatar -->
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
		          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy" />
		        </a>
		        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
		          <li><a class="dropdown-item" href="#">My profile</a></li>
		          <li><a class="dropdown-item" href="#">Settings</a></li>
		          <li>
		            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
		            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		              @csrf
		            </form>
		          </li>
		        </ul>
		      </li>
		    </ul>
		  </div>
		</nav>
		<!-- Navbar -->
	@endif
@endif