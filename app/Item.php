<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=['kode','item','kategori','deskripsi','jenis_kelamin','status','created_by','updated_by'];

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
