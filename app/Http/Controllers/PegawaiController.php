<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use DataTables;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.index');
    }


    public function create()
    {
        return view('pegawai.add');
    }


    public function store(Request $request)
    {
        if($request->ajax()){
            $customMessage=['required'=>'kolom :attribute wajib diisi'];
            $validasi_data=Validator::make($request->all(),[
                'nip'=>['required','unique:Pegawais'],
                'nama_lengkap'=>['required'],
                'no_ktp'=>['required','max:16'],
                'jenis_kelamin'=>['required'],
                'tanggal_lahir'=>['required'],
                'agama'=>['required'],
                'gol_darah'=>['required'],
                'status_pernikahan'=>['required'],
                'no_hp'=>['required'],
                'email'=>['required'],
                'alamat'=>['required'],
                'rt'=>['required'],
                'rw'=>['required'],
                'status_pegawai'=>['required'],
                'posisi'=>['required'],
                'tmt_awal_masuk'=>['required'],
                'no_sk'=>['required'],
                'str'=>['required'],
                'status_aktif'=>['required'],
            ],$customMessage);

            if($validasi_data->fails()){
                return response()->json(['message'=>'validasi data','status'=>'error','data'=>$validasi_data->errors()],422);
            }else{
                $pegawai=new Pegawai();
                $pegawai->nip=$request->nip;
                $pegawai->nama_lengkap=$request->nama_lengkap;
                $pegawai->no_kk=$request->no_kk;
                $pegawai->no_ktp=$request->no_ktp;
                $pegawai->jenis_kelamin=$request->jenis_kelamin;
                $pegawai->tempat_lahir=$request->tempat_lahir;
                $pegawai->tanggal_lahir=$request->tanggal_lahir;
                $pegawai->agama=$request->agama;
                $pegawai->gol_darah=$request->gol_darah;
                $pegawai->status_pernikahan=$request->status_pernikahan;
                $pegawai->gelar_depan=$request->gelar_depan;
                $pegawai->gelar_belakang=$request->gelar_belakang;
                $pegawai->no_hp=$request->no_hp;
                $pegawai->no_telp_rumah=$request->no_telp_rumah;
                $pegawai->email=$request->email;
                $pegawai->alamat=$request->alamat;
                $pegawai->rt=$request->rt;
                $pegawai->rw=$request->rw;
                $pegawai->kelurahan=$request->kelurahan;
                $pegawai->kecamatan=$request->kecamatan;
                $pegawai->kota_kab=$request->kota_kab;
                $pegawai->provinsi=$request->provinsi;
                $pegawai->kode_pos=$request->kode_pos;
                $pegawai->status_pegawai=$request->status_pegawai;
                $pegawai->posisi=$request->posisi;
                $pegawai->tmt_awal_masuk=$request->tmt_awal_masuk;
                $pegawai->no_sk=$request->no_sk;
                $pegawai->str=$request->str;
                $pegawai->status_aktif=$request->status_aktif;
                $pegawai->deskripsi=$request->deskripsi;
                $pegawai->save();
                if($pegawai){
                    return response()->json(['message'=>'data pegawai berhasil disimpan','status'=>1],200);
                }else{
                    return response()->json(['message'=>'data pegawai gagal disimpan','status'=>0]);
                }
            }
        }else{
            redirect('pegawai');
        }
    }

    public function show(Pegawai $pegawai)
    {
       return view('pegawai.show',['data'=>$pegawai,'title'=>'SHOW DATA PEGAWAI']);
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit',['data'=>$pegawai,'title'=>'EDIT DATA PEGAWAI']);
    }


    public function update(Request $request, Pegawai $pegawai)
    {
        if($request->ajax()){
            $validasi_data=Validator::make($request->all(),[
                'nip'=>['required'],
                'nama_lengkap'=>['required'],
                'no_ktp'=>['required','max:16'],
                'jenis_kelamin'=>['required'],
                'tanggal_lahir'=>['required'],
                'agama'=>['required'],
                'gol_darah'=>['required'],
                'status_pernikahan'=>['required'],
                'no_hp'=>['required'],
                'email'=>['required'],
                'alamat'=>['required'],
                'rt'=>['required'],
                'rw'=>['required'],
                'status_pegawai'=>['required'],
                'posisi'=>['required'],
                'tmt_awal_masuk'=>['required'],
                'no_sk'=>['required'],
                'str'=>['required'],
                'status_aktif'=>['required'],
            ]);

            if($validasi_data->fails()){
                return response()->json(['message'=>'validasi data','status'=>'error','data'=>$validasi_data->errors()],422);
            }else{
                $pegawai->nip=$request->nip;
                $pegawai->nama_lengkap=$request->nama_lengkap;
                $pegawai->no_kk=$request->no_kk;
                $pegawai->no_ktp=$request->no_ktp;
                $pegawai->jenis_kelamin=$request->jenis_kelamin;
                $pegawai->tempat_lahir=$request->tempat_lahir;
                $pegawai->tanggal_lahir=$request->tanggal_lahir;
                $pegawai->agama=$request->agama;
                $pegawai->gol_darah=$request->gol_darah;
                $pegawai->status_pernikahan=$request->status_pernikahan;
                $pegawai->gelar_depan=$request->gelar_depan;
                $pegawai->gelar_belakang=$request->gelar_belakang;
                $pegawai->no_hp=$request->no_hp;
                $pegawai->no_telp_rumah=$request->no_telp_rumah;
                $pegawai->email=$request->email;
                $pegawai->alamat=$request->alamat;
                $pegawai->rt=$request->rt;
                $pegawai->rw=$request->rw;
                $pegawai->kelurahan=$request->kelurahan;
                $pegawai->kecamatan=$request->kecamatan;
                $pegawai->kota_kab=$request->kota_kab;
                $pegawai->provinsi=$request->provinsi;
                $pegawai->kode_pos=$request->kode_pos;
                $pegawai->status_pegawai=$request->status_pegawai;
                $pegawai->posisi=$request->posisi;
                $pegawai->tmt_awal_masuk=$request->tmt_awal_masuk;
                $pegawai->no_sk=$request->no_sk;
                $pegawai->str=$request->str;
                $pegawai->status_aktif=$request->status_aktif;
                $pegawai->deskripsi=$request->deskripsi;
                $pegawai->update();
                if($pegawai){
                    return response()->json(['message'=>'data pegawai berhasil diupdate','status'=>1],200);
                }else{
                    return response()->json(['message'=>'data pegawai gagal diupdate','status'=>0]);
                }
            }
        }else{
            redirect('pegawai');
        }
    }

    public function destroy(Pegawai $pegawai)
    {
        if($pegawai){
            $hapus=$pegawai->delete();
            if($hapus){
                return response()->json(['message'=>'data pegawai berhasil dihapus','status'=>1],200);
            }else{
                return response()->json(['message'=>'data pegawai gagal dihapus','status'=>0],200);
            }
        }else{
            redirect('/pegawai');
        }
    }


    public function createPDF($id)
    {
        $data=Pegawai::find($id);
        $pdf=PDF::loadView('pegawai.viewpdf',['pegawai'=>$data]);
        return $pdf->download('data_pegawai.pdf');

    }

    public function fetch()
    {
        $pasien=DB::table('pegawais')->select('id','nip','nama_lengkap','no_ktp','jenis_kelamin','status_pegawai','no_hp')->orderBy('id');
        return Datatables::of($pasien)
                        ->addIndexColumn()
                        ->addColumn('aksi', function($data){
                            $btn='<div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-arrow-circle-down"></i>
                            </button>
                            <div class="dropdown-menu bg-gray" role="menu" style="">
                              <a class="dropdown-item" href="pegawai/'.$data->id.'" title="show pegawai"><i class="fa fa-user"></i> Detail</a>
                              <a class="dropdown-item" href="keluarga/'.$data->id.'" title="data keluarga"><i class="fa fa-users"></i> Data Keluarga</a>
                              <a class="dropdown-item" href="create-pdf/'.$data->id.'" data-id="'.$data->id.'" ><i class="fa fa-print"></i> print</a>
                              <a class="dropdown-item" href="pegawai/'.$data->id.'/edit" ><i class="fa fa-id-card"></i> Edit</a>
                              <a class="dropdown-item delete-data-pegawai" href="javascript:void(0)" data-id="'.$data->id.'" ><i class="fa fa-id-card"></i> Hapus</a>
                            </div>
                          </div>';
                            return $btn;
                        })
                        ->rawColumns(['aksi'])
                        ->toJson();
    }
}
