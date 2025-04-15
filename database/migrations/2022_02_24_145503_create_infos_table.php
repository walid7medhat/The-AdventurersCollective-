<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('logo_footer');
            $table->string('icon');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('email');
            $table->string('phone');
            $table->string('address_ar');
            $table->string('address_en');
            $table->string('description_ar');
            $table->string('description_en'); 
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('inst')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('whatsapp_phone')->nullable();            
            $table->text('map')->nullable();            
            $table->string('hint_package_ar')->nullable();
            $table->string('hint_package_en')->nullable();  
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
        Schema::dropIfExists('infos');
    }
}
