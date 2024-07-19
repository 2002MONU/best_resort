<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();      
             $table->string('logo');
             $table->string('favicon');
             $table->string('footerabout');
             $table->string('address');
             $table->string('contact');
             $table->string('alterno');
             $table->string('email');
             $table->string('maplocation');
             $table->string('wattsno');
             $table->string('alteremail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_details');
    }
}
