<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiSpekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_spek', function (Blueprint $table) {
            $table->id();
            $table->string('produk');
            $table->year('tahun_rilis');
            $table->string('body');
            $table->string('layar');
            $table->string('os');
            $table->string('cpu');
            $table->string('ram');
            $table->string('penyimpanan');
            $table->string('gpu');
            $table->text('kamera');
            $table->string('batrai');
            $table->string('fitur');
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
        Schema::dropIfExists('isi_spek');
    }
}
