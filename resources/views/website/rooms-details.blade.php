@extends('website.layouts.app')
@section('title') Rooms-Details  @endsection
@section('mainsection')
<main class="site-main page-spacing">
<div class="container-fluid page-banner about-banner" style="background-image: url({{asset('web_assets/dynamics/gallery/'.$site->rooms_banner)}});background-repeat: no-repeat;
    background-size: cover;">
   <div class="row">
      <h3>Rooms</h3>
      <ol class="breadcrumb">
         <li><a href="{{route('home.index')}}">Home</a></li>
         <li class="active">Rooms</li>
      </ol>
   </div>
</div>
<style>
   .rooms_section .wrap {
   max-width: 1280px;
   margin: auto;
   background: #f9f9f9;
   padding: 20px;
   }
   .rooms_section .row {
   display: flex;
   color: #fff;
   font-size: 20px;
   font-weight: 100;
   font-family: "Open sans";
   background-color: #4a9005;
   border-bottom: 1px solid #fff;
   }
   .img-wrap {
   flex: 1 0 0%;
   max-width: 500px;
   }
   .img_sce img {
   display: block;
   width: 100%;
   height: 100%;
   min-height: 230px;
   object-fit: cover;
   }
   .text-block {
   flex: 1 0 0%;
   margin: auto;
   }
   .even-row .text-block {
   order: -1;
   }
   .rooms_section p, h3 {
   padding: 10px 40px;
   }
   .rooms_section{
   padding: 50px 0 50px;
   }
   /*@media screen and (max-width: 680px) {
   .row {
   display: block;
   }
   .row > * {
   width: 100%;
   max-width: 100%;
   }
   }*/
</style>
<div class="rooms_section">
   <div class="container">
      <div class="wrap">
        @foreach($roomsdetails as $rooms) 
        @if($loop->odd) 
         <div class="row odd-row img_sce">
            <div class="img-wrap">
               <img src="{{asset('web_assets/dynamics/rooms/'.$rooms->image)}}" alt="" width="500" height="230">
            </div>
            <div class="text-block">
               <h3>{{$rooms->title}}</h3>
               <p>{!! $rooms->description !!}</p>
            </div>
         </div>
         @else
         <div class="row even-row img_sce">
            <div class="img-wrap">
               <img src="{{asset('web_assets/dynamics/rooms/'.$rooms->image)}}" alt="" width="500" height="230">
            </div>
            <div class="text-block">
              <h3>{{$rooms->title}}</h3>
              <p>{!! $rooms->description !!}</p>
            </div>
         </div>
         @endif
         @endforeach
         {{-- <div class="row odd-row img_sce">
            <div class="img-wrap">
               <img src="images/room3.jpg" alt="" width="500" height="230">
            </div>
            <div class="text-block">
               <h3>Title comes here</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias voluptatem officiis iusto commodi autem! Repellat sapiente veniam eos recusandae similique cupiditate voluptas aut iure, provident odio ullam quia possimus! Temporibus.</p>
            </div>
         </div>
         <div class="row even-row img_sce">
            <div class="img-wrap">
               <img src="images/room4.jpg" alt="" width="500" height="230">
            </div>
            <div class="text-block">
               <h3>Title comes here</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias voluptatem officiis iusto commodi autem! Repellat sapiente veniam eos recusandae similique cupiditate voluptas aut iure, provident odio ullam quia possimus! Temporibus.</p>
            </div>
         </div>
         <div class="row odd-row img_sce">
            <div class="img-wrap">
               <img src="images/room5.jpg" alt="" width="500" height="230">
            </div>
            <div class="text-block">
               <h3>Title comes here</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias voluptatem officiis iusto commodi autem! Repellat sapiente veniam eos recusandae similique cupiditate voluptas aut iure, provident odio ullam quia possimus! Temporibus.</p>
            </div>
         </div>
         <div class="row even-row img_sce">
            <div class="img-wrap">
               <img src="images/room6.jpg" alt="" width="500" height="230">
            </div>
            <div class="text-block">
               <h3>Title comes here</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias voluptatem officiis iusto commodi autem! Repellat sapiente veniam eos recusandae similique cupiditate voluptas aut iure, provident odio ullam quia possimus! Temporibus.</p>
            </div>
         </div> --}}
        
      </div>
     <div style="display:flex;justify-content:center"> {!! $roomsdetails->appends(['sort' => 'department'])->links() !!}</div>
   </div>
</div>
@endsection