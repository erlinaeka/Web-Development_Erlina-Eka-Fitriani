<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('tempat_tulis_izin', 20);
            $table->date('tanggal_tulis_izin');
            $table->string('hal_izin', 100);
            $table->string('kepada_orang_instansi', 50);
            $table->string('nama_instansi', 100);
            $table->string('alamat_instansi', 200);
            $table->string('nama_user_izin', 100);
            $table->string('alamat_user_izin', 100);
            $table->string('jabatan_user_izin', 100);
            $table->date('tanggal_mulai_izin');
            $table->date('tanggal_selesai_izin')->nullable();
            $table->string('alasan_izin', 200);
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
        Schema::dropIfExists('izin_kerja');
    }
}
