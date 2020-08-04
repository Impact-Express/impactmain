<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->string('post_slug');
            $table->string('tag_slug');
            $table->timestamps();

            $table->unique(['post_slug', 'tag_slug']);

            $table->foreign('post_slug')->references('slug')->on('posts')->onDelete('cascade');
            $table->foreign('tag_slug')->references('slug')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
