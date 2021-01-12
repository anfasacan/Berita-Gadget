<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('ringkasan');
            $table->date('tanggal');
            $table->text('gambar');
            $table->timestamps();
        });

        Schema::create('video', function (Blueprint $table) {
            $table->id();
            $table->string('judul_video');
            $table->text('ringkasan_video');
            $table->text('videonya');
            $table->timestamps();
        });

        Schema::create('isi_berita', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->date('tanggal');
            $table->text('judul');
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
        Schema::dropIfExists('home');
    }
}
