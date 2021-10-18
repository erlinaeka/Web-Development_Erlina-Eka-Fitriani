<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaranKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('tempat_tulis_lamaran', 100);
            $table->date('tanggal_tulis_lamaran');
            $table->string('kepada_lamaran_instansi', 100);
            $table->string('nama_instansi_lamaran', 200);
            $table->string('alamat_instansi_lamaran', 200);
            $table->string('nama_user_lamar', 100);
            $table->string('tempat_lahir', 100);

            $table->date('tanggal_lahir');
            $table->string('alamat_user_lamar', 100);
            $table->string('nomor_user_lamar', 100);
            $table->string('berkas_satu', 20)->nullable();
            $table->string('berkas_dua', 20)->nullable();
            $table->string('berkas_tiga', 20)->nullable();
            $table->string('berkas_empat', 20)->nullable();
            $table->string('berkas_lima', 20)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('lamaran_kerja');
    }
}
