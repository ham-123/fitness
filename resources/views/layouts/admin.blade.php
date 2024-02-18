<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="X9DCAiOEh0QSKzMGUR83exfZ71LCSf2HMN6CQcnt">
	<meta name="description" content="Some description for the page" />
	<meta property="og:title" content="Zenix - Crypto Laravel Admin Dashboard" />
	<meta property="og:description" content="Zenix | Dashboard Light" />
	<meta property="og:image" content="../social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="{{ url('public/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ url('public/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ url('public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ url('public/css/style.css')}}" rel="stylesheet" type="text/css" />

	@livewireStyles
</head>

<body>
	<div id="main-wrapper">
		<div class="nav-header">
			<a href="#" class="brand-logo">
				<svg class="logo-abbr" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect class="svg-logo-rect" width="50" height="50" rx="6" fill="#EB8153" />
					<path class="svg-logo-path" d="M17.5158 25.8619L19.8088 25.2475L14.8746 11.1774C14.5189 9.84988 15.8701 9.0998 16.8205 9.75055L33.0924 22.2055C33.7045 22.5589 33.8512 24.0717 32.6444 24.3951L30.3514 25.0095L35.2856 39.0796C35.6973 40.1334 34.4431 41.2455 33.3397 40.5064L17.0678 28.0515C16.2057 27.2477 16.5504 26.1205 17.5158 25.8619ZM18.685 14.2955L22.2224 24.6007L29.4633 22.6605L18.685 14.2955ZM31.4751 35.9615L27.8171 25.6886L20.5762 27.6288L31.4751 35.9615Z" fill="white" />
				</svg>
				<svg class="brand-title" width="74" height="22" viewBox="0 0 74 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					/>
				</svg>
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<div class="chatbox">
		</div>
		<div class="tab-pane fade" id="notes">
			<div class="card mb-sm-3 mb-md-0 note_card">
			</div>
		</div>
	</div>
	</div>
	</div>
	<div class="header">
		<div class="header-content">
			<nav class="navbar navbar-expand">
				<div class="collapse navbar-collapse justify-content-between">
					<div class="header-left">
						<div class="input-group search-area right d-lg-inline-flex d-none">
							<input type="text" class="form-control" placeholder="Find something here...">
							<div class="input-group-append">
								<span class="input-group-text">
									<a href="javascript:void(0)">
										<i class="flaticon-381-search-2"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<ul class="navbar-nav header-right main-notification">
						<li class="nav-item dropdown notification_dropdown">
							<a class="nav-link bell dz-theme-mode" href="#">
								<i id="icon-light" class="fas fa-sun"></i>
								<i id="icon-dark" class="fas fa-moon"></i>
							</a>
						</li>
						<li class="nav-item dropdown notification_dropdown">
							<a class="nav-link bell dz-fullscreen" href="#">
								<svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
									<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
								</svg>
								<svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
									<path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
								</svg>
							</a>
						</li>
						<li class="nav-item dropdown notification_dropdown">
							<a class="nav-link ai-icon" href="{{ route('admin.contact.messages') }}" data-bs-toggle="dropdown">
								<svg class="bell-icon" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#EB8153" />
								</svg>
							</a>
						</li>
						<li class="nav-item dropdown header-profile">
							<a class="nav-link" href="{{ route('admin.contact.messages') }}" role="button" data-bs-toggle="dropdown">

								<div class="header-info">
									<span>Admin</span>

								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<button name="logout" type="submit" class="Btn">

										<div class="sign">
										</div>

										<div class="text">Deconnexion</div>
									</button>

								</form>
							</div>

						</li>
					</ul>
				</div>
			</nav>
			<div class="sub-header">
				<div class="d-flex align-items-center flex-wrap me-auto">
					<h5 class="dashboard_bar">
					</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="deznav">
		<div class="deznav-scroll">
			<div class="main-profile">
				<div class="image-bx">
					<img src="{{ url('img/photos/bg-page2.jpg')}}" alt="">
					<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
				</div>
				<h5 class="name"><span class="font-w400">Admin</span> Admin</h5>
				<p class="email">Admin.@mail.com</p>
			</div>
			<ul class="metismenu" id="menu">
				<li><a href="{{ route('admin.dashboard') }}">Main Menu</a></li>
				<li>
					<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-144-layout"></i>
						<span class="nav-text">Dashboard</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="{{ route('admin.client.index') }}">Clients</a></li>
						<li><a href="{{ route('admin.cours.index') }}">Cours</a></li>
						<li><a href="{{ route('admin.equipement.index') }}">Equipement</a></li>
						<li><a href="{{ route('admin.planifications.index') }}">Planification</a></li>
						<li><a href="{{ route('admin.entraineurs.index') }}">Entaineurs</a></li>
						<li><a href="{{ route('admin.abonnements.index') }}">Abonnement</a></li>
						<li><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>

					</ul>
				</li>
				</li>
			</ul>
			<div class="copyright">
				<p><strong>HJ_gym Admin Dashboard</strong> © 2023 All Rights Reserved</p>
				<p class="fs-12">Made with <span class="heart"></span> by BN</p>
			</div>
		</div>
	</div>

	<div class="content-body">

		@yield('content')

	</div>
	<div class="footer">
		<div class="copyright">
			<p>Copyright © Designed Developed by <a href="#" target="_blank">HJ_gym</a> 2023</p>
		</div>
	</div>
	</div>
	<script src="{{ url('public/vendor/global/global.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/vendor/chart.js/Chart.bundle.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/vendor/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/js/dashboard/dashboard-1.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/js/custom.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/js/deznav-init.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{ url('public/js/styleSwitcher.js')}}" type="text/javascript"></script>
	@livewireScripts
</body>

</html>