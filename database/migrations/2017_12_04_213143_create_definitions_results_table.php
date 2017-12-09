<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitionsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definitions_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('result_id')->index();
            $table->unsignedBigInteger('definition_id')->index();
            $table->foreign('result_id')->references('id')->on('results')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('definition_id')->references('id')->on('definitions')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('definitions_results');
    }
}
