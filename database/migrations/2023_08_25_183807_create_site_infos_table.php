<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('phn_number')->nullable();
            $table->string('gmail')->nullable();
            $table->string('location')->nullable();
            $table->string('fb_account')->nullable();
            $table->string('skype_account')->nullable();
            $table->string('whatsapp_account')->nullable();
            $table->string('linkdin_account')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
