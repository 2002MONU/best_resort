@php
$footer = \App\Models\ContactDetail::find(1);
@endphp
<div class="footer-section container-fluid no-padding">
    <div class="top-footer container-fluid no-padding">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-sm-12 col-xs-12 widget text_widget">
                    <h4 class="widget_title">about us</h4>
                    <p>{{$footer->footerabout}}
                    </p>
                    <!-- <ul class="social_widget">
                        <li><a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul> -->
                </aside>
                
                <aside class="col-md-4 col-sm-6 col-xs-6 widget contact-content">
                    <h4 class="widget_title">Contact Details</h4>
                    <div class="contact-detail">
                        <i class="fa fa-map-marker"></i>
                        <p> {!! $footer->address !!}</p>
                    </div>
                    <div class="contact-detail">
                        <i class="fa fa-phone"></i>
                        <p><span><a href="tel:+{{$footer->contact}}">+{{$footer->contact}}</a></span>
                        <span><a href="tel:+{{$footer->alterno}}">+{{$footer->alterno}}</a></span>
                    </p>
                </div>
                <div class="contact-detail">
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:{{$footer->email}}" title="info@gmail.com">{{$footer->email}}</a></p>
                </div>
                
                
            </aside>
            <aside class="col-md-4 col-sm-6 col-xs-6 widget ">
                <h4 class="widget_title">Our Location</h4>
                <iframe src="{{$footer->maplocation}}" style="height: 250px; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </aside>
        </div>
    </div>
</div>
<div class="bottom-footer container">
    <div class="row">
        <div class="col-md-6">
            <p>&copy; Copyrights <span value="{{ date('Y') }}"> {{ date('Y') }} </span> Vana Resort All Rights Reserved</p>
        </div>
        <div class="col-md-6">
            <p>Design & Developed By <a href="http://thecolourmoon.com/" target="_blank">Colourmoon</a></p>
        </div>
    </div>
</div>
<div class="fixwhcall d-lg-none d-xl-none d-block">
                   <a href="" class="btn-mob-call" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-info"></i> Enquiry Now
                    </a>
                </div>
</div>
<div class="float-icons">
<ul>
    <li class="email"><a href="mailto:{{$footer->alteremail}}" title="">
    <i class="fa fa-envelope my-float" style="font-size: 22px;"></i></a>
</li>
<li class="call"><a href="tel:+{{$footer->contact}}" title="">
    <i class="fa fa-phone my-float"></i>
</a>
</li>
<li class="whatsapp"><a href="https://api.whatsapp.com/send?phone=+{{$footer->wattsno}}&text=Hi" target="_blank" title="">
<i class="fa fa-whatsapp my-float"></i></a>
</li>
</ul>
</div>
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Enquiry Form</h1>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{route('enquiry-submit')}}">
        @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" name="user_name" id="" aria-describedby="" placeholder="Name">
            @error('user_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" placeholder="Email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="Phone" class="form-control" name="phone_no" id="" aria-describedby="" placeholder="Phone">
                @error('phone_no')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="Subject" class="form-control" name="subject" id="" aria-describedby="" placeholder="Subject">
                @error('subject')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

     <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"  placeholder="Type message here..."></textarea>
           @error('message')
            <span class="text-danger">{{$message}}</span>
            @enderror
     </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
</div>
</div>
</div>
<script src="{{asset('web_assets/libraries/lib.js')}}"></script>
<script src="{{asset('web_assets/libraries/calender/jquery-ui-datepicker.min.js')}}"></script>
<script src="../../../code.jquery.com/jquery-migrate-1.0.0.js"></script>
<script src="{{asset('web_assets/js/functions.js')}}"></script>
<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
$(document).ready(function () {
$("#mySidenav a").click(() => {
closeNav()
})
})
</script>
<!-- Start to Jini Assist scriptÂ -->
<!-- <script>(function () { var jiniAssist_API=jiniAssist_API||{}, jini_LoadStart=new Date();let s = document.createElement('script');s.type = 'text/javascript';s.async = true;s.id='jini-script-id';s.src = 'https://admin.bookingjini.com/v3/jiniAssist/index.js?api_key=bbd267e067da94f1936c37d29af53885';var x = document.getElementsByTagName('script')[0];s.charset='UTF-8';s.setAttribute('Access-Control-Allow-Origin','*');x.parentNode.insertBefore(s, x);})();
</script> -->
<!-- End of Jini Assist script-->
</body>
</html>