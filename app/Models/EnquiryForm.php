<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryForm extends Model
{
    use HasFactory;
    protected $table = "enquiry_form";
    protected $fillable = [
         'user_name','phone_no','subject','message','email',
    ];
}
