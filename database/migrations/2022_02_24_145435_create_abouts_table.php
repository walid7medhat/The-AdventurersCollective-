<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('message_ar');
            $table->string('message_en')->nullable();
            $table->string('vision_ar');
            $table->string('vision_en')->nullable();
            $table->string('objective_ar')->nullable();
            $table->string('objective_en')->nullable();
            $table->string('description_ar');
            $table->string('description_en')->nullable();
            $table->string('image_message')->nullable();
            $table->string('image_vision')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
