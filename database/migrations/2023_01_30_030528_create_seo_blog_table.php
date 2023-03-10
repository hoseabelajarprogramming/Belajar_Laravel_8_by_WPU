<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->nullable();
            $table->foreignId('language_id')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_url')->nullable();
            $table->longText('seo_description')->nullable();
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
        Schema::dropIfExists('seo_blog');
    }
};
