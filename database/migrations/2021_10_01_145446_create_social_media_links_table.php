<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id');
            $table->enum('type', ['tiktok', 'facebook', 'messenger', 'whatsapp', 'instagram', 'twitter', 'onlyfans', 'pinterest', 'etsy', 'amazon', 'ebay', 'linkedin', 'indeed', 'unsplash', 'pexels', '_500px', 'snapchat', 'youtube', 'spotify', 'medium', 'vimeo', 'tumblr', 'reddit', 'applemusic', 'applepodcasts'])->nullable();
            $table->string('url');
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
        Schema::dropIfExists('social_media_links');
    }
}
