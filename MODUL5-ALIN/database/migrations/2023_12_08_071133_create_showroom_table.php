<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mobil');
            $table->string('brand_mobil');
            $table->string('warna_mobil');
            $table->string('tipe_mobil');
            $table->integer('harga_mobil');
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
        Schema::dropIfExists('showroom');
    }
}
