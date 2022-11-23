<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title')->nullable();
            $table->string('blog_article_author')->nullable();
            $table->string('written_date')->nullable();
            $table->string('blog_released_date')->nullable();
            $table->string('blog_description')->nullable();
            $table->string('meta_description1')->nullable();
            $table->mediumText('blog_image')->nullable();
            $table->string('meta_description2')->nullable();
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
        Schema::dropIfExists('Blog');
    }
}
