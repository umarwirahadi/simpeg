@extends('layouts.app')
@section('content')
<div class="container-fluid-fixed">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ $title??'' }}</div>
                <div class="card-body">
                    <form action="{{route('pegawai.update',[$data->id])}}" id="edit-form-pegawai" method="POST">
                    <input type="hidden" name="idpegawai" id="idpegawai" value="{{$data->id}}">
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="nip">N.I.P</label>
                                  <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip"  value="{{$data->nip}}"/>
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_depan">Gelar depan</label>
                              <input type="text" class="form-control" id="gelar_depan" placeholder="contoh : dr" name="gelar_depan"  value="{{$data->gelar_depan}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="nama_lengkap">Nama lengkap</label>
                              <input type="text" class="form-control text-uppercase" id="nama_lengkap" placeholder="masukan nama lengkap" name="nama_lengkap"  value="{{$data->nama_lengkap}}"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_belakang">Gelar belakang</label>
                              <input type="text" class="form-control" id="gelar_belakang" placeholder="Contoh : M.Kes" name="gelar_belakang"  value="{{$data->gelar_belakang}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_kk">No. Kartu Keluarga</label>
                                  <input type="text" class="form-control" id="no_kk" placeholder="nomor kartu keluarga" name="no_kk"  value="{{$data->no_kk}}"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_ktp">No. KTP</label>
                                  <input type="text" class="form-control" id="no_ktp" placeholder="masukan nomor KTP" name="no_ktp"  value="{{$data->no_ktp}}"/>
                                </div>
                        </div>
                        <div class="col-md-2">
                                <div class="form-group">
                                  <label for="jenis_kelamin">Jenis kelamin</label>
                                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gol_darah">Gol. Darah</label>
                              <select class="form-control" id="gol_darah" name="gol_darah">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                              </select>
                            </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="tempat_lahir">Tempat lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" name="tempat_lahir"  value="{{$data->tempat_lahir}}"/>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="tanggal_lahir">Tanggal lahir</label>
                                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="{{$data->tanggal_lahir}}"/>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <select class="form-control" id="agama" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="status_pernikahan">Status Pernikahan</label>
                              <select class="form-control" id="status_pernikahan" name="status_pernikahan">
                                <option value="Lajang">Lajang</option>
                                <option value="Menikah">Menikah</option>
                              </select>
                            </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_hp">No. HP</label>
                                  <input type="text" class="form-control" id="no_hp" placeholder="No HP" name="no_hp"  value="{{$data->no_hp}}"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="no_telp_rumah">No. Telp Rumah</label>
                              <input type="text" class="form-control" id="no_telp_rumah" placeholder="022-xxxx" name="no_telp_rumah"  value="{{$data->no_telp_rumah}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" class="form-control" id="email" placeholder="masukan email" name="email" autocomplete="off" value="{{$data->email}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" placeholder="contoh : Jl. pasirkaliki no. 1 Cimahi" name="alamat"  value="{{$data->alamat}}"/>
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rt">RT</label>
                              <input type="text" class="form-control" id="rt" name="rt"  value="{{$data->rt}}"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rw">RW</label>
                              <input type="text" class="form-control" id="rw" name="rw" value="{{$data->rw}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="kelurahan">Kelurahan</label>
                                  <input type="text" class="form-control" id="kelurahan" name="kelurahan"  value="{{$data->kelurahan}}"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" class="form-control" id="kecamatan" name="kecamatan"  value="{{$data->kecamatan}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kota_kab">Kota</label>
                              <input type="text" class="form-control" id="kota_kab" name="kota_kab" value="{{$data->kota_kab}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                  <label for="provinsi">Provinsi</label>
                                  <input type="text" class="form-control" id="provinsi" name="provinsi"  value="{{$data->provinsi}}"/>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="kode_pos">Kode POS</label>
                              <input type="text" class="form-control" id="kode_pos" name="kode_pos"  value="{{$data->kode_pos}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="status_pegawai">Status Pegawai</label>
                                  <select class="form-control" id="status_pegawai" name="status_pegawai">
                                    <option value="PNS">PNS</option>
                                    <option value="Kristen">THL</option>
                                    <option value="Hindu">Tenaga BLUD</option>
                                    <option value="Budha">Kader</option>
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="posisi">Posisi</label>
                              <select class="form-control" id="posisi" name="posisi">
                                <option value="dokter">dokter</option>
                                <option value="tenaga kesehatan">Tenaga Kesehatan</option>
                                <option value="Tenaga Administrasi">Tenaga Administrasi</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="tmt_awal_masuk">Tgl Mulai Masuk</label>
                              <input type="date" class="form-control" id="tmt_awal_masuk" name="tmt_awal_masuk" value="{{$data->tmt_awal_masuk}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_sk">Nomor SK</label>
                                  <input type="text" class="form-control" id="no_sk" name="no_sk" value="{{$data->no_sk}}"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="str">Memiliki STR ?</label>
                              <select class="form-control" id="str" name="str">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="status_aktif">Status Aktif</label>
                              <select class="form-control" id="status_aktif" name="status_aktif">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                  <label for="deskripsi">Keterangan</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$data->deskripsi}}"/>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" onclick="window.location.href='/pegawai'" class="btn btn-danger">Kembali</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

