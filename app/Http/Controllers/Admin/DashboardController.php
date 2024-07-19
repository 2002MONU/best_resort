<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeBanner;
use App\Models\AddGallery;
use App\Models\ContactDetail;
use App\Models\RoomsDetail;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function dashboard(){
        if (auth()->guard('admin'))
       {
        $footer = ContactDetail::find(1);
        $homebanner = HomeBanner::where('status',1)->count();// active banner count
        $gallery = AddGallery::where('status',1)->count();// active gallery image count
        $rooms = RoomsDetail::where('status',1)->count();// active rooms  count
       
         return view('admin.dashboard', compact('homebanner','gallery','rooms','footer'));
    }
    return redirect('admin/login')->with('error', 'Opps! You do not have access');
    }

   // admin logout
    public function adminLogout(){
        auth()->guard('admin')->logout();
         return redirect('admin/login')->with('success','You are logout successfully');
      }
    
    
}
