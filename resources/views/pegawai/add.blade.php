@extends('layouts.app')
@section('content')
<div class="container-fluid-fixed">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('TAMBAH PEGAWAI') }}</div>
                <div class="card-body">
                    <form action="{{route('pegawai.store')}}" method="POST" id="add-form-pegawai">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="nip">N.I.P</label>
                                  <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" />
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_depan">Gelar depan</label>
                              <input type="text" class="form-control" id="gelar_depan" placeholder="contoh : dr" name="gelar_depan" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="nama_lengkap">Nama lengkap</label>
                              <input type="text" class="form-control" id="nama_lengkap" placeholder="masukan nama lengkap" name="nama_lengkap" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="gelar_belakang">Gelar belakang</label>
                              <input type="text" class="form-control" id="gelar_belakang" placeholder="Contoh : M.Kes" name="gelar_belakang" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_kk">No. Kartu Keluarga</label>
                                  <input type="text" class="form-control" id="no_kk" placeholder="nomor kartu keluarga" name="no_kk" />
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_ktp">No. KTP</label>
                                  <input type="text" class="form-control" id="no_ktp" placeholder="masukan nomor KTP" name="no_ktp" />
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
                                  <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" name="tempat_lahir" />
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="tanggal_lahir">Tanggal lahir</label>
                                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" />
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <select class="form-control" id="agama" name="agama">
                                  {!!getItem('agama')!!}
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="status_pernikahan">Status Pernikahan</label>
                              <select class="form-control" id="status_pernikahan" name="status_pernikahan">
                                {!!getItem('status-pernikahan')!!}
                              </select>
                            </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_hp">No. HP</label>
                                  <input type="text" class="form-control" id="no_hp" placeholder="No HP" name="no_hp" />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="no_telp_rumah">No. Telp Rumah</label>
                              <input type="text" class="form-control" id="no_telp_rumah" placeholder="022-xxxx" name="no_telp_rumah" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" class="form-control" id="email" placeholder="masukan email" name="email" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" placeholder="contoh : Jl. pasirkaliki no. 1 Cimahi" name="alamat" />
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rt">RT</label>
                              <input type="text" class="form-control" id="rt" name="rt" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                              <label for="rw">RW</label>
                              <input type="text" class="form-control" id="rw" name="rw"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="kelurahan">Kelurahan</label>
                                  <input type="text" class="form-control" id="kelurahan" name="kelurahan" />
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" class="form-control" id="kecamatan" name="kecamatan" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="kota_kab">Kota</label>
                              <input type="text" class="form-control" id="kota_kab" name="kota_kab"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                  <label for="provinsi">Provinsi</label>
                                  <input type="text" class="form-control" id="provinsi" name="provinsi" />
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="kode_pos">Kode POS</label>
                              <input type="text" class="form-control" id="kode_pos" name="kode_pos" />
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
                              <input type="date" class="form-control" id="tmt_awal_masuk" name="tmt_awal_masuk"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                  <label for="no_sk">Nomor SK</label>
                                  <input type="text" class="form-control" id="no_sk" name="no_sk"/>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="str">Memiliki STR ?</label>
                              <select class="form-control" id="str" name="str">
                                {!!getItem('pilih-jawaban')!!}
                              </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="status_aktif">Status Aktif</label>
                              <select class="form-control" id="status_aktif" name="status_aktif">
                                {!!getItem('status-aktif')!!}
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                  <label for="deskripsi">Keterangan</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi"/>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
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

