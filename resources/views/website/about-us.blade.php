@extends('website.layouts.app')
@section('title') About-Us  @endsection
@section('mainsection')
<div class="container-fluid page-banner " style="background-image: url({{asset('web_assets/dynamics/gallery/'.$site->about_banner)}});background-repeat: no-repeat;
    background-size: cover;">
			<div class="row">
				<h3>About us</h3>
				<ol class="breadcrumb">
					<li><a href="{{route('home.index')}}">Home</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>
		</div>
<div class="section-padding"></div>

                  <div id="welcome-section" class="welcome-section container-fluid pb-50 pt-20">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="section-header">
							<h3>About<br><span>{{$about->title}}</span></h3>
						</div>
						<p>{!! $about->description !!}</p>

							{{-- <ul class="abt_list">
								<li> <i class="fa fa-angle-double-right"></i> Ranajilleda water falls – 2 km</li>
								<li> <i class="fa fa-angle-double-right"></i> Padmapuam Gardens – 2 km</li>
								<li> <i class="fa fa-angle-double-right"></i> Coffee Museum – 4 km</li>
								<li> <i class="fa fa-angle-double-right"></i> Tribal Museum 4km</li>
							</ul> --}}
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="{{asset('web_assets/dynamics/slider/'.$about->image)}}">
					</div>
				</div>
			</div>
		</div>
		
@endsection