<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeBanner;
class HomePageController extends Controller
{
    // home banner details 
    public function homeBannerDetails(){
        $homeBanner = HomeBanner::latest()->paginate(4);
        return view('admin.home-page.home-banner-details', compact('homeBanner'));
    }

    // home banner banner add form
    public function homeBannerAdd(){
        return view('admin.home-page.add-home-banner');
    }

    public function homeBannerAddPost(Request $request)
    {
        
            // Validate the request
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
               // 'title' => 'required|string',
                'status' => 'required',
            ]);
        
            try{
                // Handle the file upload
                $image = $request->file('image');
                $img_extension = $image->getClientOriginalExtension();
                $name = time() . '.' . $img_extension;
                $pathimage = $image->move(public_path('web_assets/dynamics/slider'), $name);
        
                // Save the data to the database
                $homeBanner = new HomeBanner;
                $homeBanner->title = $request->title;
                $homeBanner->status = $request->status;
                $homeBanner->image = $name;
                $homeBanner->save(); // Ensure you call the save method correctly
        
                return redirect()->route('admin.home-banner-details')->with('success', 'Slider image uploaded successfully');
            } catch (\Exception $e) {
                // Handle the exception and show an error message
                return redirect()->back()->with(['error' => 'There was an error uploading the slider image. Please try again.']);
            }
    }

    public function homeBannerUpdate($id){
        $homeslider = HomeBanner::find($id);
        return view('admin.home-page.update-homebanner',compact('homeslider'));
    }
      
     // update  home slider 
    public function homeBannerUpdatePost(Request $request,$id)
    {
          // Validate the request
            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg|max:2048',
                //'title' => 'required|string',
                'status' => 'required',
            ]);
        
            try {
                // Check if updating an existing HomeBanner or creating a new one
                $homeBanner =  HomeBanner::find($id);
        
                if ($request->hasFile('image')) {
                    // Handle the file upload
                    $image = $request->file('image');
                    $img_extension = $image->getClientOriginalExtension();
                    $name = time() . '.' . $img_extension;
                    $pathimage = $image->move(public_path('web_assets/dynamics/slider'), $name);
        
                    // If updating an existing HomeBanner and there's an existing image, delete it
                    
                        $existingImagePath = public_path('web_assets/dynamics/slider/' . $homeBanner->image);
                        if (file_exists($existingImagePath)) {
                            unlink($existingImagePath);
                        }
                  
        
                    // Set the new image name
                    $homeBanner->image = $name;
                }
        
                // Save the data to the database
                $homeBanner->title = $request->title;
                $homeBanner->status = $request->status;
                $homeBanner->save(); // Ensure you call the save method correctly
        
                return redirect()->route('admin.home-banner-details')->with('success', 'Slider image uploaded successfully');
            } catch (\Exception $e) {
                // Handle the exception and show an error message
                return redirect()->back()->with(['error' => 'There was an error uploading the slider image. Please try again.']);
            }
        }
        
        public function homeBannerDelete($id){
            $banner = HomeBanner::where('id', $id)->first();
            if ($banner) {
                // Get the path of the images in the public folder
                $imagePath1 = public_path('web_assets/dynamics/slider/' . $banner->image);
               
            
                // Check if the files exist before attempting deletion
                if (file_exists($imagePath1)) {
                    // Delete the first image
                    unlink($imagePath1);
                }
                 // Delete the record from the database
                $banner->delete();
                
                return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Image record not found.');
            }
           
        }
   }


   
