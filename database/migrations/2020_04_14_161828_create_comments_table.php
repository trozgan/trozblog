<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
          $table->integer('author_id')->unsigned()->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('post_id')->unsigned()->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
          $table->text('content');
          $table->datetime('posted_at');
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
        Schema::dropIfExists('comments');
    }
}
