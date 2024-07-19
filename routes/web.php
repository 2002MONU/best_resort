<?php


use Illuminate\Support\Facades\Route;
// website Controller 
use App\Http\Controllers\WebsiteController\IndexPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryPageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\RoomsDetailsController;
use App\Http\Controllers\SiteSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
  Route::get('/',[IndexPageController::class,'index'])->name('home.index');
  Route::get('/about-us',[IndexPageController::class,'aboutUs'])->name('home.about-us');
  Route::get('/gallery',[IndexPageController::class,'gallery'])->name('home.gallery');
  Route::get('/rooms-details',[IndexPageController::class,'roomDetails'])->name('home.rooms-details');
  Route::get('/contact',[IndexPageController::class,'contact'])->name('home.contact');
   
  Route::post('enquiry_sumbit',[IndexPageController::class,'enquirySubmit'])->name('enquiry-submit');
  
 Route::group(['prefix'=> 'admin'],function(){
   Route::get('/login',[LoginController::class,'login'])->name('admin.login');
   Route::post('/login-post',[LoginController::class,'loginPost'])->name('admin.loginPost');

   Route::group(['middleware'=>'is_admin'],function(){
   Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard.dashboard');
   Route::get('/logout',[DashboardController::class,'adminLogout'])->name('admin.logout'); // admin logout
  
   // home banner 
   Route::get('home-banner-details',[HomePageController::class,'homeBannerDetails'])->name('admin.home-banner-details');
   Route::get('add-home-banner',[HomePageController::class,'homeBannerAdd'])->name('admin.add-home-banner');
   Route::post('add-banner-Post',[HomePageController::class,'homeBannerAddPost'])->name('admin.add-home-banner-post');
   Route::get('update-banner/{id}',[HomePageController::class,'homeBannerUpdate'])->name('admin.update-home-banner');
   Route::post('update-bannerPost/{id}',[HomePageController::class,'homeBannerUpdatePost'])->name('admin.update-slider-post');
   Route::get('delete-banner/{id}',[HomePageController::class,'homeBannerDelete'])->name('admin.slider-delete');
  
   // about page details
   Route::get('/about-details',[AboutPageController::class,'aboutDetails'])->name('about.about-details');
   Route::get('/about-update/{id}',[AboutPageController::class,'aboutUpdate'])->name('about.about-update');
   Route::post('/about-updatepost/{id}',[AboutPageController::class,'aboutUpdatePost'])->name('about.about-update-post');
   
   // gallery details
    Route::get('/gallery-details',[GalleryPageController::class,'galleryDetails'])->name('gallery.gallery-details');
    Route::get('/add-gallery',[GalleryPageController::class,'addGallery'])->name('gallery.add-gallery');
    Route::post('/add-galleryPost',[GalleryPageController::class,'addGalleryPost'])->name('gallery.add-gallery-post');
    Route::get('/update-gallery/{id}',[GalleryPageController::class,'updateGallery'])->name('gallery.update-gallery');
    Route::post('/update-galleryPost/{id}',[GalleryPageController::class,'updateGalleryPost'])->name('gallery.update-gallery-post');
    Route::get('/gallery-delete/{id}',[GalleryPageController::class,'updateDelete'])->name('gallery.gallery-delete');
     
    // contact $$ footerdetails 
    Route::get('/contact-details',[ContactController::class,'contactDetails'])->name('contact.contact-details');
    Route::get('/update-contact/{id}',[ContactController::class,'updateContact'])->name('contact.update-contact');
    Route::post('/update-contactpost/{id}',[ContactController::class,'updateContactPost'])->name('contact.update-contact-post');
  
   //  Rooms Details 
   Route::get('rooms-details',[RoomsDetailsController::class,'roomsDetails'])->name('room.rooms-details');
   Route::get('rooms-add',[RoomsDetailsController::class,'roomsAdd'])->name('room.rooms-add');
   Route::post('rooms-add-post',[RoomsDetailsController::class,'roomsAddPost'])->name('room.rooms-add-post');
   Route::get('rooms-updatet/{id}',[RoomsDetailsController::class,'roomsUpdate'])->name('room.rooms-update');
   Route::post('rooms-update-post/{id}',[RoomsDetailsController::class,'roomsUpdatePost'])->name('room.rooms-update-post');
   Route::get('rooms-delete/{id}',[RoomsDetailsController::class,'roomsDelete'])->name('room.rooms-delete');
  
  // change password 
  Route::get('/change-password',[LoginController::class,'changePassword'])->name('password.change-password');
  Route::post('/change-passwordpost',[LoginController::class,'changePasswordPost'])->name('password.change-password-post');
 
  Route::get('/site-setting',[SiteSettingController::class,'siteSetting'])->name('site-setting');
  Route::get('/site-setting-edit/{id}',[SiteSettingController::class,'siteSettingEdit'])->name('site-setting-edit');
  Route::post('/site-setting-post/{id}',[SiteSettingController::class,'siteSettingEditPost'])->name('site-setting-post');
  Route::get('enquiry-details',[SiteSettingController::class,'enquiryDetails'])->name('enquiry-details');
  Route::get('/enquiry-delete/{id}',[SiteSettingController::class,'enquiryDelete'])->name('enquiryDelete');
});
 });