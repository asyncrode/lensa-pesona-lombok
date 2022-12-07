<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_hargas', function (Blueprint $table) {
            $table->id();   
            $table->unsignedBigInteger('id_wisata');
            $table->integer('jmlPeserta');
            $table->integer('hrgTour');
            $table->integer('hrgTourHotel');
            $table->foreign('id_wisata')->references('id')->on('wisatas')->onDelete('cascade');
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
        Schema::dropIfExists('detail_hargas');
    }
}
