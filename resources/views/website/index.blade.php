@extends('website.layouts.app')
@section('title') Home  @endsection
@section('mainsection')
<div id="site-loader" class="load-complete">
	<div class="loader">
		<div class="loader-inner ball-clip-rotate">
			<div></div>
		</div>
	</div>
</div>
<main>
	<div class="site-main page-spacing">
		<div id="slider-section" class="slider-section container-fluid no-padding">
			<div id="photo-slider" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					@foreach ($homeslider as $index => $banner)
						<div class="item {{ $index == 0 ? 'active' : '' }}">
							<img src="{{ asset('web_assets/dynamics/slider/'.$banner->image) }}" alt="Slide">
							<!-- Uncomment and update if captions are needed
							<div class="carousel-caption">
								<h2 data-animation="animated fadeInLeft">{{ $banner->title }}</h2>
								<h6 data-animation="animated fadeInLeft"><span class="left-sep"></span>{{ $banner->subtitle }}<span class="right-sep"></span></h6>
								<a href="{{ $banner->link }}" title="Explore Now" data-animation="animated fadeInUp">Read More</a>
							</div>
							-->
						</div>
					@endforeach
					
					
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#photo-slider" role="button" data-slide="prev">
					<span class="fa fa-angle-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#photo-slider" role="button" data-slide="next">
					<span class="fa fa-angle-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<p class="goto-next"><a href="#" title="Go to Next" class="bounce"><img src="images/slider/go-to-next.png" alt="Go To Next"></a></p>
		</div>
		
	</div>
		<!-- <div class="awrad-title mt-3">
		    <div class="container">
		       <div class="award-title-sub">
		             <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius,</h4>
		       </div>
		    </div>
		</div> -->
		
		<div id="welcome-section" class="welcome-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="{{asset('web_assets/dynamics/slider/'.$about->image)}}" alt="about-image">
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="section-header">
							<h3>About<br><span>{{$about->title}}</span></h3>
						</div>
						<p>{!! $firstPart !!}..</p>
							
						<a href="{{ route('home.about-us') }}" title="Read More" class="read-more text-left">Read More <i class="fa fa-long-arrow-right"></i></a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
		<div class="gallery" style="text-align:center;">
			<div class="container">
				<div class="section-header">
					<h3>Our <span>Gallery</span></h3>
					
				</div>
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
					
{{-- 					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal2.jpg" title="Resort-3" class="popup-modal">
							<img alt="Resort-3" src="web_assets/images/gal2.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal3.jpg" title="Resort-9" class="popup-modal">
							<img alt="Resort-9" src="web_assets/images/gal3.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal4.jpg" title="Resort" class="popup-modal">
							<img alt="Resort" src="web_assets/images/gal4.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal5.jpg" title="Pool" class="popup-modal">
							<img alt="Pool" src="web_assets/images/gal5.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal6.jpg" title="Events" class="popup-modal">
							<img alt="Events" src="web_assets/images/gal6.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal7.jpg" title="Standard" class="popup-modal">
							<img alt="Standard" src="web_assets/images/gal7.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
					
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal8.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="web_assets/images/gal8.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div>
						<!-- <div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal9.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="web_assets/images/gal9.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div> -->
					<div class="col-md-3 col-sm-3 col-xs-6 portfolio-box no-padding">
						<a href="web_assets/images/gal10.jpg" title="Corriodor" class="popup-modal">
							<img alt="Corriodor" src="web_assets/images/gal10.jpg">
							<div class="icon"><i class="fa fa-camera" aria-hidden="true"></i>
						</div>						</a>
					</div> --}}
				</div>
				<div class="btn">
					<a href="{{route('home.gallery')}}" title="Read More" class="read-more">View More <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
		<!-- <div id="testimonial-section" class="testimonial-section container-fluid no-padding d-none">
			<div class="section-padding"></div>
			<div class="container">
				<div class="section-header text-center">
					<h3>what Our <span>Client Says</span></h3>
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non velit reiciendis corporis voluptas, necessitatibus quasi illum possimus numquam, qui nulla consectetur dolores itaque ducimus nesciunt dolorum officiis tempora, quod explicabo!</p>
								<img src="images/avtar.png" alt="Testi">
								<h4>Title comes here</h4>
							</div>
							<div class="item">
								<p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Tempore voluptates est quia fugit deserunt veniam nihil dolore velit voluptate, vitae, aperiam sunt iste porro sit necessitatibus? Dolorem maxime, deserunt. Atque?</p>
								<img src="images/avtar.png" alt="Testi">
								<h4>Title comes here</h4>
							</div>
							<div class="item">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nesciunt cumque voluptas quis, repudiandae ratione dolorem mollitia officia provident, doloremque nostrum incidunt accusantium quo. Fugiat consequatur, dolor. Odio, repudiandae, nulla?</p>
								<img src="images/avtar.png" alt="Testi">
								<h4>Title comes here</h4>
							</div>
							
								<div class="item">
								<p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Quaerat at earum maiores magni rem, facere id. Laborum amet suscipit eos quo praesentium tempore recusandae officiis quos doloremque, odio maxime dicta?</p>
								<img src="images/avtar.png" alt="Testi">
								<h4>Title comes here</h4>
							</div>
							
								<div class="item">
								<p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Quaerat at earum maiores magni rem, facere id. Laborum amet suscipit eos quo praesentium tempore recusandae officiis quos doloremque, odio maxime dicta?</p>
								<img src="images/avtar.png" alt="Testi">
								<h4>Title comes here</h4>
							</div>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial-carousel" data-slide-to="1"></li>
							<li data-target="#testimonial-carousel" data-slide-to="2"></li>
						</ol>
						<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
							<i class="arrow_carrot-left"></i>
						</a>
						<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
							<i class="arrow_carrot-right"></i>
						</a>
					</div>
				</div>
				<div class="col-md-1"></div>
				</div>
				<div class="section-padding"></div>
			</div> -->
		</div>
	</main>
	
<!-- 	<style>
	    div#testimonial-carousel .item {
    height: 320px;
}
	</style> -->
	@endsection