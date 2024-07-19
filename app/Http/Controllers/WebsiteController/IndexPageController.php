<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\AddGallery;
use App\Models\ContactDetail;
use App\Models\HomeBanner;
use App\Models\RoomsDetail;
use Illuminate\Http\Request;
use App\Models\EnquiryForm;
class IndexPageController extends Controller
{
    // index page view 
        public function index(){
            $homeslider = HomeBanner::where('status',1)->get();

            $about = AboutPage::find(1);
            $description = $about->description;
            $descriptionLength = strlen($description);
            $halfLength = $descriptionLength / 2;
            $firstPart = substr($description, 0, $halfLength);
            $secondPart = substr($description, $halfLength);

            $gallery = AddGallery::latest()->where('status',1)->limit(8)->get();
            $footer = ContactDetail::find(1);
            return view('website.index',compact('homeslider','about', 'firstPart', 'secondPart','gallery','footer'));

        }

          /// abouts page 
        public function aboutUs(){
            $about = AboutPage::find(1);
            $site = \App\Models\Seo_setting::find(1);
            return view('website.about-us', compact('about','site'));
        }


        // gallery page
        public function gallery(){
            $gallery = AddGallery::latest()->where('status',1)->get();
            $site = \App\Models\Seo_setting::find(1);
            return view('website.gallery',compact('gallery','site'));
        }

        // rooms details

        public function roomDetails(){
            $roomsdetails = RoomsDetail::latest()->where('status',1)->paginate(6);
            $site = \App\Models\Seo_setting::find(1);
            return view('website.rooms-details',compact('roomsdetails','site'));
        }

        // contact
        
        public function contact(){
            $footer = ContactDetail::find(1);
            $site = \App\Models\Seo_setting::find(1);
            return view('website.contact',compact('footer','site'));
        }
        
        public function  enquirySubmit(Request $request) {
          
//            return $request;
            $request->validate([
                'user_name' => 'required|string', 
                'phone_no' => 'required|numeric', 
                'subject' => 'nullable|string', 
                'message' => 'required|string', 
                'email' => 'required|email', 
            ]);

            $enquiry = new EnquiryForm();
            $enquiry->user_name = $request->user_name;
            $enquiry->phone_no = $request->phone_no;
            $enquiry->subject = $request->subject;
            $enquiry->message = $request->message;
            $enquiry->email = $request->email;
            $enquiry->save();
            
           return redirect()->route('home.index')->with('success','Enquiry form submit successfully');
        }
}
