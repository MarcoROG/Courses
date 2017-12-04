<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters_content', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('chapter_id')->index();
            $table->foreign('chapter_id')->references('id')->on('chapters')->onUpdate('cascade')->onDelete('cascade');
            $table->string('content_type');
            $table->unsignedBigInteger('content_id');
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
        Schema::dropIfExists('chapters_content');
    }
}
