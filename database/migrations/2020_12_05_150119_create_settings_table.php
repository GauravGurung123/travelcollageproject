<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_top_content')->nullable();
            $table->string('site_middle_content')->nullable();
            $table->string('site_bottom_content')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_fav_icon')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_phone_no')->nullable();
            $table->string('site_address')->nullable();
            $table->text('site_social_links')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
