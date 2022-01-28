<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
             // relasi tabel siswa dan kelas
             $table->unsignedBigInteger('kelas_id')->nullable();
             $table->foreign('kelas_id')->references('id')->on('kelas')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
             $table->string('hari');
             $table->string('mapel');
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
        Schema::dropIfExists('jadwal');
    }
}
