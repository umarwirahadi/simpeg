@extends('layouts.app')
@section('content')
<div class="container-fluid-fixed">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ $title??'' }}</div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="nip">N.I.P</label>
                                  <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" value="{{$data->nip??''}}" disabled/>
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_depan">Gelar depan</label>
                              <input type="text" class="form-control" id="gelar_depan" placeholder="contoh : dr" name="gelar_depan"  value="{{$data->gelar_depan??''}}" disabled/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="nama_lengkap">Nama lengkap</label>
                              <input type="text" class="form-control" id="nama_lengkap" placeholder="masukan nama lengkap" name="nama_lengkap"  value="{{$data->nama_lengkap??''}}" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_belakang">Gelar belakang</label>
                              <input type="text" class="form-control" id="gelar_belakang" placeholder="Contoh : M.Kes" name="gelar_belakang"  value="{{$data->gelar_belakang??''}}" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_kk">No. Kartu Keluarga</label>
                                  <input type="text" class="form-control" id="no_kk" placeholder="nomor kartu keluarga" name="no_kk"  value="{{$data->no_kk??''}}" disabled/>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_ktp">No. KTP</label>
                                  <input type="text" class="form-control" id="no_ktp" placeholder="masukan nomor KTP" name="no_ktp"  value="{{$data->no_ktp??''}}" disabled/>
                                </div>
                        </div>
                        <div class="col-md-2">
                                <div class="form-group">
                                  <label for="jenis_kelamin">Jenis kelamin</label>
                                  <input type="text" class="form-control" name="jenis_kelamin"  value="{{$data->jenis_kelamin??''}}" disabled/>
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gol_darah">Gol. Darah</label>
                              <input type="text" class="form-control" name="gol_darah"  value="{{$data->gol_darah??''}}" disabled/>
                            </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="tempat_lahir">Tempat lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" name="tempat_lahir"  value="{{$data->tempat_lahir??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="tanggal_lahir">Tanggal lahir</label>
                                  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="{{$data->tanggal_lahir??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <input type="text" class="form-control" name="jenis_kelamin"  value="{{$data->agama??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="status_pernikahan">Status Pernikahan</label>
                              <input type="text" class="form-control" name="status_pernikahan"  value="{{$data->status_pernikahan??''}}" disabled />
                            </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_hp">No. HP</label>
                                  <input type="text" class="form-control" id="no_hp" placeholder="No HP" name="no_hp"  value="{{$data->no_hp??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="no_telp_rumah">No. Telp Rumah</label>
                              <input type="text" class="form-control" id="no_telp_rumah" placeholder="022-xxxx" name="no_telp_rumah"  value="{{$data->no_telp_rumah??''}}" disabled />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" class="form-control" id="email" placeholder="masukan email" name="email" autocomplete="off" value="{{$data->email??''}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" placeholder="contoh : Jl. pasirkaliki no. 1 Cimahi" name="alamat"  value="{{$data->alamat??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rt">RT</label>
                              <input type="text" class="form-control" id="rt" name="rt"  value="{{$data->rt??''}}" disabled />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rw">RW</label>
                              <input type="text" class="form-control" id="rw" name="rw" value="{{$data->rw??''}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="kelurahan">Kelurahan</label>
                                  <input type="text" class="form-control" id="kelurahan" name="kelurahan"  value="{{$data->kelurahan??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" class="form-control" id="kecamatan" name="kecamatan"  value="{{$data->kecamatan??''}}" disabled />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kota_kab">Kota</label>
                              <input type="text" class="form-control" id="kota_kab" name="kota_kab" value="{{$data->kota_kab??''}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                  <label for="provinsi">Provinsi</label>
                                  <input type="text" class="form-control" id="provinsi" name="provinsi"  value="{{$data->provinsi??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="kode_pos">Kode POS</label>
                              <input type="text" class="form-control" id="kode_pos" name="kode_pos"  value="{{$data->kode_pos??''}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="status_pegawai">Status Pegawai</label>
                                  <input type="text" class="form-control" name="status_pegawai"  value="{{$data->status_pegawai??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="posisi">Posisi</label>
                              <input type="text" class="form-control" name="posisi"  value="{{$data->posisi??''}}" disabled />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="tmt_awal_masuk">Tgl Mulai Masuk</label>
                              <input type="text" class="form-control" id="tmt_awal_masuk" name="tmt_awal_masuk" value="{{$data->tmt_awal_masuk??''}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_sk">Nomor SK</label>
                                  <input type="text" class="form-control" id="no_sk" name="no_sk" value="{{$data->no_sk??''}}" disabled />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="str">Memiliki STR ?</label>
                              <input type="text" class="form-control" name="str"  value="{{$data->str==1?'Ya':'Tidak'}}" disabled />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="status_aktif">Status Aktif</label>
                              <input type="text" class="form-control" name="status_aktif"  value="{{$data->status_aktif==1?'Ya':'Tidak'}}" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                  <label for="deskripsi">Keterangan</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$data->deskripsi??''}}" disabled />
                                </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <button type="button" onclick="window.location.href='/pegawai/{{$data->id}}/edit'" class="btn btn-success">Update</button>
                        <button type="button" onclick="window.location.href='/pegawai'" class="btn btn-danger">Kembali</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

