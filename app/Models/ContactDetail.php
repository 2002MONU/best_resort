<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo', 'favicon','footerabout', 'address','contact','alterno','email','maplocation','wattsno','alteremail',
    ];
}
