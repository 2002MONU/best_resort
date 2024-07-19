@extends('website.layouts.app')
@section('title') Contact  @endsection
@section('mainsection')
<main class="site-main page-spacing">
		<div class="container-fluid page-banner about-banner" style="background-image: url({{asset('web_assets/dynamics/gallery/'.$site->contact_banner)}});background-repeat: no-repeat;
    background-size: cover;">
			<div class="row">
				<h3>contact us</h3>
				<ol class="breadcrumb">
					<li><a href="{{route('home.index')}}">Home</a></li>
					<li class="active">contact</li>
				</ol>
			</div>
		</div>
	<div class="section-padding"></div>

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 contact-content">
					<h4>Contact Details</h4>
					<div class="contact-detail">
						<i class="fa fa-map-marker"></i>
						<h5>Office Address</h5>
						<p>{!! $footer->address !!}</p>
					</div>
					<div class="contact-detail">
						<i class="fa fa-phone"></i>
						<h5>Phone</h5>
						<p><span><a href="tel:+{{$footer->contact}}">+{{$footer->contact}}</a></span>
							<span><a href="tel:+{{$footer->alterno}}">+{{$footer->alterno}}</a></span>
						</p>
					</div>
					<div class="contact-detail">
						<i class="fa fa-envelope"></i>
						<h5>Email Address</h5>
						<p><a href="mailto:{{$footer->email}}" title="E-mail">{{$footer->email}}</a></p>
					</div>
					
				</div>
				<div class="col-md-8 col-sm-4 col-xs-12 contact-content">
					<iframe src="{{$footer->maplocation}}" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- Contact Content /- -->
				<!-- Contact Content -->
				<!-- Contact Content /- -->
			</div>			
		</div><!-- Container /- -->
		
		<div class="section-padding"></div>
		<div class="map container-fluid no-padding">
			
		</div>
	</main>
@endsection