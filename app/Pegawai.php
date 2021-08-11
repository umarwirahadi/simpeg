<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable=['nip','nama_lengkap','no_kk','no_ktp','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','gol_darah','status_pernikahan','gelar_depan','gelar_belakang','no_hp','no_telp_rumah','email','alamat','rt','rw','kelurahan','kecamatan','kota_kab','provinsi','kode_pos','status_pegawai','posisi','tmt_awal_masuk','no_sk','str','status_aktif','deskripsi'];

    public static function boot(){
        parent::boot();
        static ::creating(function($pegawai){
            $pegawai->created_by=Auth::id();
            $pegawai->updated_by=Auth::id();
        });

        static::updating(function($pegawai){
            $pegawai->updated_by=Auth::id();
        });

    }
}
