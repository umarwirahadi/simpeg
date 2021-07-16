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
            $table->string('nik',30);
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->string('tempat_lahir',100)->nullable();
            $table->date('tanggal_lahir');
            $table->string('agama',50);
            $table->enum('gol_darah',['A','B','O','AB'])->nullable();
            $table->string('gelar_depan',30);
            $table->string('gelar_belakang',100);
            $table->string('jenis_pegawai',100); //pns/nonpns
            $table->string('nip',100);
            $table->string('nip',100);
            $table->string('nip',100);
            $table->string('nip',100);
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
