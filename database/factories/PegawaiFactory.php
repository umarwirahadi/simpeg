<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;
// use Faker\Provider\Base;
// use illuminate\Support\Str;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'nip'=>$faker->randomNumber($nbDigits=null,$stric=false),
        'nama_lengkap'=>$faker->name,
        'no_kk'=>$faker->name,
        'no_ktp'=>$faker->name,
        'jenis_kelamin'=>$faker->name,
        'tempat_lahir'=>$faker->city,
        'tanggal_lahir'=>$faker->date($format='Y-m-d',$max='1990-12-12'),
        'agama'=>$faker->randomElements($data=array('Islam','Kristen','Hindu','budha')),
        'gol_darah'=>$faker->randomElements($data=array('a','b','o','ab')),
        'status_pernikahan'=>$faker->randomElements($data=array('Lajang','Menikah','Cerai','Lainnya')),
        'gelar_depan'=>$faker->suffix,
        'gelar_belakang'=>$faker->suffix,
        'no_hp'=>$faker->phoneNumber,
        'no_telp_rumah'=>$faker->phoneNumber,
        'email'=>$faker->unique()->safeEmail,
        'alamat'=>$faker->address,
        'rt'=>$faker->json_encode(['10','12','13','4','5']),
        'rw'=>$faker->json_encode(['1','2','3','4','5']),
        'kelurahan'=>$faker->name,
        'kecamatan'=>$faker->city,
        'kota_kab'=>$faker->city,
        'provinsi'=>$faker->state,
        'kode_pos'=>$faker->postcode,
        'status_pegawai'=>$faker->name,
        'posisi'=>$faker->jobTitle,
        'tmt_awal_masuk'=>$faker->date($format='Y-m-d',$max='2020-12-12'),
        'no_sk'=>$faker->name,
        'str'=>$faker->boolean,
        'status_aktif'=>$faker->boolean,
        'deskripsi'=>$faker->text($maxNbChars = 200)
    ];
});
