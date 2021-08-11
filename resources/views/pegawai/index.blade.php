@extends('layouts.app')
@section('content')
<div class="container-fluid-fixed">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA PEGAWAI') }}</div>
                <div class="card-body">
                    <div class="row-">
                        <div class="col-md-12">
                        <a href="{{route('pegawai.create')}}" class="btn btn-sm btn-success">Tambah</a>
                        <a href="{{route('pegawai.index')}}" class="btn btn-sm btn-primary">Refresh</a>
                        <a href="{{route('pegawai.index')}}" class="btn btn-sm btn-warning">Export</a>
                        {{-- <a href="/create-pdf/{{$data->id}}" class="btn btn-outline-success">Print</a> --}}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="data-pegawai">
                                <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>NIP</th>
                                    <th>Nama Lengkap</th>
                                    <th>No. KTP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Pegawai</th>
                                    <th>No. HP</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
