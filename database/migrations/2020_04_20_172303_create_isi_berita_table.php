<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_berita', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('judul');
            $table->text('gambar1');
            $table->text('para1');
            $table->text('gambar2');
            $table->text('para2');
            $table->text('gambar3');
            $table->text('para3');
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
        Schema::dropIfExists('isi_berita');
    }
}
