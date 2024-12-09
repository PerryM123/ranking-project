<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranking_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ranking_post_id');
            $table->string('title');
            $table->string('image_url');
            $table->timestamps();

            // TODO: Learn how this works
            $table->foreign('ranking_post_id')->references('id')->on('ranking_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranking_infos');
    }
}
