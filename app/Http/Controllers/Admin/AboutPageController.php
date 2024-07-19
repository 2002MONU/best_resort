<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    // about page details 
    public function aboutDetails(){
        $about_details = AboutPage::find(1);
        return view('admin.about-page.about-pagedeatils',compact('about_details'));
    }

    public function aboutUpdate($id){
        $about = AboutPage::find($id);
        return view('admin.about-page.update-aboutpage',compact('about'));
    }

    public function aboutUpdatePost(Request $request,$id){
        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|string|max:50',
            'description' => 'required|string',
        ]);
        try {
        $about = AboutPage::find($id);
        if ($request->hasFile('image')) {
            // Handle the file upload
            $image = $request->file('image');
            $img_extension = $image->getClientOriginalExtension();
            $name = time() . '.' . $img_extension;
            $pathimage = $image->move(public_path('web_assets/dynamics/slider'), $name);

            // If updating an existing HomeBanner and there's an existing image, delete it
            
                $existingImagePath = public_path('web_assets/dynamics/slider/' . $about->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
           // Set the new image name
            $about->image = $name;
        }
          // Save the data to the database
          $about->title = $request->title;
          $about->description = $request->description;
          $about->save(); // Ensure you call the save method correctly
  
          return redirect()->route('about.about-details')->with('success', 'About  Details Edit successfully');
      } catch (\Exception $e) {
          // Handle the exception and show an error message
          return redirect()->back()->with(['error' => 'There was an error uploading the About Details. Please try again.']);
      }
    }
}
