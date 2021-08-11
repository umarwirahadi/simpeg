<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip',100);
            $table->string('nama_lengkap');
            $table->string('no_kk',30)->nullable();
            $table->string('no_ktp',30);
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->string('tempat_lahir',100)->nullable();
            $table->date('tanggal_lahir');
            $table->string('agama',50);
            $table->enum('gol_darah',['A','B','O','AB'])->nullable();
            $table->string('status_pernikahan',50);
            $table->string('gelar_depan',30);
            $table->string('gelar_belakang',100);
            $table->string('no_hp',25);
            $table->string('no_telp_rumah',25)->nullable();
            $table->string('email',150)->nullable();
            $table->string('alamat',200)->nullable();
            $table->string('rt',5)->nullable();
            $table->string('rw',5)->nullable();
            $table->string('kelurahan',50)->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('kota_kab',50)->nullable();
            $table->string('provinsi',50)->nullable();
            $table->string('kode_pos',10)->nullable();
            $table->string('status_pegawai',100);
            $table->string('posisi',100);
            $table->date('tmt_awal_masuk');
            $table->string('no_sk',100)->nullable();
            $table->boolean('str')->default(0);
            $table->boolean('status_aktif')->default(1);
            $table->string('deskripsi',255)->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
