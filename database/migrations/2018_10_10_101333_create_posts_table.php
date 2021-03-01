<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('title', 255);
            $table->string('url', 255);
            $table->text('description');
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade');
            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
