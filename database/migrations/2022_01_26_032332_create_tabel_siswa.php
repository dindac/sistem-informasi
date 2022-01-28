<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
             // relasi tabel murids dan users
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->string('nisn')->unique()->nullable();
            $table->enum('jk', ['L', 'P']);
            // relasi tabel siswa dan kelas
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->string('agama');
            $table->string('alamat');
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
        Schema::dropIfExists('siswa');
    }
}
