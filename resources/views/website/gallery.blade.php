@extends('website.layouts.app')
@section('title') Gallery  @endsection
@section('mainsection')
<main class="site-main page-spacing">
<div class="container-fluid page-banner about-banner" style="background-image: url({{asset('web_assets/dynamics/gallery/'.$site->gallery_banner)}});background-repeat: no-repeat;
    background-size: cover;">
			<div class="row">
				<h3>Our Gallery</h3>
				<ol class="breadcrumb">
					<li><a href="{{route('home.index')}}">Home</a></li>
					<li class="active">Gallery</li>
				</ol>
			</div>
		</div>
		<div class="section-padding"></div>

       <div classs="gallery" style="text-align:center;">
			<div class="container">
			
			<div class="container-fluid portfolio-section no-padding portfolio-list">
					@foreach($gallery as $item)
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="{{asset('web_assets/dynamics/gallery/'.$item->image)}}" title="{{$item->title}}" class="popup-modal">
							<img alt="Resort-6" src="{{asset('web_assets/dynamics/gallery/'.$item->image)}}">
							<div class="icon"><i class="fa fa-camera"></i>
							</div>
						</a>
					</div>
					@endforeach
					
					{{-- <div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal2.jpg" title="Resort-3" class="popup-modal">
							<img alt="Resort-3" src="images/gal2.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal3.jpg" title="Resort-9" class="popup-modal">
							<img alt="Resort-9" src="images/gal3.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal4.jpg" title="Resort" class="popup-modal">
							<img alt="Resort" src="images/gal4.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal5.jpg" title="Pool" class="popup-modal">
							<img alt="Pool" src="images/gal5.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal6.jpg" title="Events" class="popup-modal">
							<img alt="Events" src="images/gal6.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal7.jpg" title="Standard" class="popup-modal">
							<img alt="Standard" src="images/gal7.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal8.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="images/gal8.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					<!-- <div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal9.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="images/gal9.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div> -->
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="images/gal10.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="images/gal10.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div> --}}
				</div>
				
	      	</div>
		</div>
							<div class="section-padding"></div>

@endsection()