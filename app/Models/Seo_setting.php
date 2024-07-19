<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo_setting extends Model
{
    use HasFactory;
    protected $fillable = [
         'title', 'description','keywords',
       'about_banner',
       'gallery_banner','contact_banner','rooms_banner',
    ];
}
