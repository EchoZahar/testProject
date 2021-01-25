<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('previewImage')->nullable();
            $table->string('shortDescription')->nullable();
            $table->integer('content');
            $table->tinyInteger('published')->default(0);
            $table->integer('view')->default(0);
            $table->foreignId('createdBy');
            $table->string('modifiedBy')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('createdBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
