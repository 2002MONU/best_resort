<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@php 
                 $footer = \App\Models\ContactDetail::find(1);
		$site = \App\Models\Seo_setting::find(1);
		@endphp
		<meta name="description" content="{{$site->description}}">
		<meta name="keywords" content="{{$site->keywords}}">
		<meta name="author" content="https://vanaresort.in">
		<title>{{$site->title}} | @yield('title') </title>
		<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
		<link rel="canonical" href="https://vanaresort.in">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Vana-Resort">
		<meta property="og:description" content="Vana-Resort">
		<meta property="og:url" content="https://vana-resort.in">
		<meta property="og:site_name" content="Vana-Resort">
		<meta property="og:updated_time" content="2021-04-13T14:03:56+00:00">
		<meta property="og:image" content="images/favicon.png">
		<meta property="og:image:secure_url" content="images/favicon.png">
		<meta property="og:image:width" content="521">
		<meta property="og:image:height" content="210">
		<meta property="og:image:alt" content="Homepage">
		<meta property="og:image:type" content="image/png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Homepage - Vana-Resort">
		<meta name="twitter:description" content="Vana-Resort">
		<meta name="twitter:image" content="images/favicon.png">
		
		<link rel="icon" type="image/x-icon" href="{{asset('web_assets/dynamics/slider/'.$footer->favicon)}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('web_assets/images/apple-touch-icon-114x114-precomposed.html')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('web_assets/images/apple-touch-icon-72x72-precomposed.html')}}">
		<link rel="apple-touch-icon-precomposed" href="{{asset('web_assets/images/apple-touch-icon-57x57-precomposed.html')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/libraries/lib.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/libraries/calender/calendar.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/css/plugins.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/css/navigation-menu.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('web_assets/css/shortcodes.css')}}">
		<script src="{{asset('web_assets/js/jquery.min.js')}}"></script>
	</head>
	<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
		
		<a id="top"></a>
		<header id="header" class="header-section header-position container-fluid no-padding">
			<div class="top-header container-fluid no-padding">
				
				<div class="container">
					<div class="row">
						<!-- <div class="logo-block col-md-3">
							<a href="index.php">
								<img src="images/logo.png" alt="Logo">
							</a>
						<button aria-controls="navbar"  class="navbar-toggle" data-toggle="collapse" onclick="openNav()">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						
					</div> -->
					<div class="logo-block col-md-3">
							<a href="{{route('home.index')}}">
								<img src="{{asset('web_assets/dynamics/slider/'.$footer->logo)}}" alt="Logo">
							</a>
						<button aria-controls="navbar"  class="navbar-toggle" data-toggle="collapse" onclick="openNav()">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="col-md-9 menu-block">
						<nav class="navbar navbar-default ow-navigation">
							
							<div class="navbar-collapse" id="navbar">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{route('home.index')}}">Home</a></li>
									<li><a href="{{route('home.about-us')}}">About Us</a></li>
									<li><a href="{{route('home.gallery')}}">Gallery</a></li>
									<li><a href="{{route('home.rooms-details')}}">Rooms</a></li>
									<li><a href="{{route('home.contact')}}">Contact us</a></li>
								</ul>
								<div class="read-more">araku valley </div>
                                                                
							</div>
                                                    
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="mySidenav" class="sidenav">
	<ul>
                <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                <li> <a href="{{route('home.index')}}" class="nav-link">Home</a></li>
                <li> <a href="{{route('home.about-us')}}" class="nav-link">About Us</a></li>
                <li> <a href="{{route('home.gallery')}}" class="nav-link">Gallery</a></li>
                <li> <a href="{{route('home.rooms-details')}}" class="nav-link">Rooms</a></li>
                <li> <a href="{{route('home.contact')}}" class="nav-link">Contact Us</a></li>
                
        </ul>
        </div>
           <script>
            var msg = '{{Session::get('success')}}';
            var exist = '{{Session::has('success')}}';
            if(exist){
              alert(msg);
            }
          </script>
                