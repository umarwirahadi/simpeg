@extends('layouts.app')
@section('content')
    <div class="container-fluid-fixed">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">{{ __('EDIT ITEM') }}</div>
                    <div class="card-body">
                        <form action="{{route('item.update',[$data->id])}}" method="POST" id="edit-form-item">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_data" id="id_data" value="{{$data->id}}" />
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" class="form-control" id="kode" placeholder="Masukan Kode"
                                            name="kode" value="{{$data->kode??''}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item">Nama item</label>
                                        <input type="text" class="form-control" id="item" placeholder="masukan nama item"
                                        value="{{$data->item??''}}" name="item" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control" id="kategori" name="kategori">
                                            {!!getKategories()!!}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            {!!getItem('status-aktif',$data->status)!!}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30"
                                            rows="5">{{$data->deskripsi??''}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="button" onclick="window.location.href='/item'"
                                        class="btn btn-danger">Kembali</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
