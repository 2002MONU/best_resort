<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomsDetail;
use Illuminate\Http\Request;

class RoomsDetailsController extends Controller
{
    public function roomsDetails(){
        $roomsdetails = RoomsDetail::latest()->paginate(6);
        return view('admin.rooms.rooms-details',compact('roomsdetails'));
    }

    public function roomsAdd(){
        return view('admin.rooms.add-rooms');
    }

    public function roomsAddPost(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'status' => 'required|integer'
        ]);
    
      
            // Handle the file upload
            $image = $request->file('image');
            $img_extension = $image->getClientOriginalExtension();
            $name = time() . '.' . $img_extension;
            $pathimage = $image->move(public_path('web_assets/dynamics/rooms'), $name);
    
            // Save the data to the database
            $rooms = new RoomsDetail();
            $rooms->title = $request->title;
            $rooms->status = $request->status;
            $rooms->description = $request->description;
            $rooms->image = $name;
            $rooms->save(); // Ensure you call the save method correctly
    
            return redirect()->route('room.rooms-details')->with('success', 'Rooms details uploaded successfully');

    }
        //  rooms details update form
            public function roomsUpdate($id){
                $rooms = RoomsDetail::find($id);
                return view('admin.rooms.update-rooms',compact('rooms'));
            }
        //  rooms details update
            public function roomsUpdatePost(Request $request,$id){
                // Validate the request
                $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'status' => 'required|integer'
                    ]);
    
       
            // Check if updating an existing HomeBanner or creating a new one
            $rooms =  RoomsDetail::find($id);
    
            if ($request->hasFile('image')) {
                // Handle the file upload
                $image = $request->file('image');
                $img_extension = $image->getClientOriginalExtension();
                $name = time() . '.' . $img_extension;
                $pathimage = $image->move(public_path('web_assets/dynamics/rooms'), $name);
    
                // If updating an existing HomeBanner and there's an existing image, delete it
                
                    $existingImagePath = public_path('web_assets/dynamics/rooms/' . $rooms->image);
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
              
                // Set the new image name
                $rooms->image = $name;
            }
    
            // Save the data to the database
            $rooms->title = $request->title;
            $rooms->description = $request->description;
            $rooms->status = $request->status;
            $rooms->save(); // Ensure you call the save method correctly
    
            return redirect()->route('room.rooms-details')->with('success', 'Rooms  details uploaded successfully');
   
        }
     
        // rooms details delete 
        public function roomsDelete($id){
           $rooms = RoomsDetail::find($id);
           if ($rooms) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('web_assets/dynamics/rooms/' . $rooms->image);
           
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the  image
                unlink($imagePath1);
            }
             // Delete the record from the database
            $rooms->delete();
            
            return redirect()->back()->with('success', 'Rooms details Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
       
        }
}
