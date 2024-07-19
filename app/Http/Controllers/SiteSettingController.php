<?php

namespace App\Http\Controllers;

use App\Models\Seo_setting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    // Display the site settings
    public function siteSetting() {
        $site_setting = Seo_setting::find(1);
        if (!$site_setting) {
            return redirect()->route('admin.dashboard')->with('error', 'Site settings not found.');
        }
        return view('admin.site-setting', compact('site_setting'));
    }

    // Display the form for editing site settings
    public function siteSettingEdit($id) {
        $site = Seo_setting::find($id);
        
        return view('admin.sitesetting-edit', compact('site'));
    }

    // Handle the form submission for updating site settings
    public function siteSettingEditPost(Request $request, $id) {
       // return $request;
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
            'about_banner' => 'nullable|max:1024|mimes:png,jpeg,jpg',
          'contact_banner' => 'nullable|max:1024|mimes:png,jpeg,jpg',
            'gallery_banner' => 'nullable|max:1024|mimes:png,jpeg,jpg',
            'rooms_banner' => 'nullable|max:1024|mimes:png,jpeg,jpg',
        ]);

        $site = Seo_setting::find($id);
         // about page banner
            if ($request->hasFile('about_banner')) {
                $file = $request->file('about_banner');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('web_assets/dynamics/gallery'), $filename);
                $site->about_banner = $filename;
            }
         // contact page banner
         if ($request->hasFile('contact_banner')) {
                $file = $request->file('contact_banner');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('web_assets/dynamics/gallery'), $filename);
                $site->contact_banner = $filename;
            }
            
            // Gallery page banner
            if ($request->hasFile('gallery_banner')) {
                $file = $request->file('gallery_banner');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('web_assets/dynamics/gallery'), $filename);
                $site->gallery_banner = $filename;
            }
            // Rooms page banner
            if ($request->hasFile('rooms_banner')) {
                $file = $request->file('rooms_banner');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('web_assets/dynamics/gallery'), $filename);
                $site->rooms_banner = $filename;
            }

        $site->title = $request->title;
        $site->description = $request->description;
        $site->keywords = $request->keywords;
        $site->save();

        return redirect()->route('site-setting')->with('success', 'Site Setting Updated Successfully');
    }
    
    
    public  function enquiryDetails(){
        $enqueries = \App\Models\EnquiryForm::get();
        return view('admin.enquiry-details',compact('enqueries'));
    }
    
    public function  enquiryDelete($id) {
        $enquiry = \App\Models\EnquiryForm::find($id)->delete();
        return redirect()->back()->with('success','Enquiry message delete successfully');
    }
}
