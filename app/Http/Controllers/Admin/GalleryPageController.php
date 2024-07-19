<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddGallery;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    // gallery details 
    public function galleryDetails(){
        $galleries = AddGallery::latest()->paginate(6);
        return view('admin.gallery.gallery-details',compact('galleries'));
    }

    public function addGallery(){
        return view('admin.gallery.add-gallery');
    }

    public function addGalleryPost(Request $request){
         // Validate the request
         $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
           // 'title' => 'required|string|max:50',
            'status' => 'required',
        ]);
    
        try {
            // Handle the file upload
            $image = $request->file('image');
            $img_extension = $image->getClientOriginalExtension();
            $name = time() . '.' . $img_extension;
            $pathimage = $image->move(public_path('web_assets/dynamics/gallery'), $name);
    
            // Save the data to the database
            $gallery = new AddGallery;
            $gallery->title = $request->title;
            $gallery->status = $request->status;
            $gallery->image = $name;
            $gallery->save(); // Ensure you call the save method correctly
    
            return redirect()->route('gallery.gallery-details')->with('success', 'Gallery  image uploaded successfully');
        } catch (\Exception $e) {
            // Handle the exception and show an error message
            return redirect()->back()->with(['error' => 'There was an error uploading the Gallery image. Please try again.']);
        }
    }

    public function updateGallery($id){
        $gallery = AddGallery::find($id);
        return view('admin.gallery.update-gallery',compact('gallery'));
    }

    public function updateGalleryPost(Request $request,$id){
        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            //'title' => 'required|string|max:50',
            'status' => 'required',
        ]);

      
        try {
            // Check if updating an existing HomeBanner or creating a new one
            $gallery = AddGallery::find($id);
    
            if ($request->hasFile('image')) {
                // Handle the file upload
                $image = $request->file('image');
                $img_extension = $image->getClientOriginalExtension();
                $name = time() . '.' . $img_extension;
                $pathimage = $image->move(public_path('web_assets/dynamics/gallery'), $name);
    
                // If updating an existing HomeBanner and there's an existing image, delete it
                
                    $existingImagePath = public_path('web_assets/dynamics/gallery/' . $gallery->image);
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
               // Set the new image name
                $gallery->image = $name;
            }
    
            // Save the data to the database
            $gallery->title = $request->title;
            $gallery->status = $request->status;
            $gallery->save(); // Ensure you call the save method correctly
    
            return redirect()->route('gallery.gallery-details')->with('success', 'Gallery image uploaded successfully');
        } catch (\Exception $e) {
            // Handle the exception and show an error message
            return redirect()->back()->with(['error' => 'There was an error uploading the Gallery image. Please try again.']);
        }
    }

    public function updateDelete($id){
        $gallery = AddGallery::where('id', $id)->first();
        if ($gallery) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('web_assets/dynamics/gallery/' . $gallery->image);
           
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
             // Delete the record from the database
            $gallery->delete();
            
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }
}
