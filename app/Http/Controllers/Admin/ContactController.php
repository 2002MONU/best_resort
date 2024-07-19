<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactDetails(){
        $contact = ContactDetail::find(1);
        return view('admin.contact-details',compact('contact'));
    }

    public function updateContact($id){
        $contact = ContactDetail::find($id);
        return view('admin.update-contact',compact('contact'));
    }

    public function updateContactPost(Request $request, $id)
    {
        // Validate the request data
          $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg|max:2048',
            'footerabout' => 'required|string|max:455',
            'address' => 'required|string|max:555',
            'contact' => 'required|string|max:17',
            'alterno' => 'nullable|string|max:17',
            'email' => 'required|email|max:255',
            'maplocation' => 'nullable|string',
            'wattsno' => 'nullable|string|max:14',
            'alteremail' => 'nullable|email|max:255',
        ]);
    
        try {
            // Find the contact detail by ID
            $contact = ContactDetail::find($id);
    
            // Handle logo file upload
            if ($request->hasFile('logo')) {
                $image = $request->file('logo');
                $name = time() . '_logo.' . $image->getClientOriginalExtension();
                $image->move(public_path('web_assets/dynamics/slider'), $name);
                $contact->logo = $name;
            }
    
            // Handle favicon file upload
            if ($request->hasFile('favicon')) {
                $image1 = $request->file('favicon');
                $name1 = time() . '_favicon.' . $image1->getClientOriginalExtension();
                $image1->move(public_path('web_assets/dynamics/slider'), $name1);
                 $contact->favicon = $name1;
            }
    
            // Update other contact details
            $contact->footerabout = $request->footerabout;
            $contact->address = $request->address;
            $contact->contact = $request->contact;
            $contact->alterno = $request->alterno;
            $contact->email = $request->email;
            $contact->maplocation = $request->maplocation;
            $contact->wattsno = $request->wattsno;
            $contact->alteremail = $request->alteremail;
    
            // Save the updated contact details
            $contact->save();
    
            // Redirect back with a success message
            return redirect()->route('contact.contact-details')->with('success', 'Contact details Edit successfully.');
        } catch (\Exception $e) {
            // Handle the exception and show an error message
            return redirect()->back()->with(['error' => 'There was an error updating the contact details. Please try again.']);
        }
    }
    
       
        
}
