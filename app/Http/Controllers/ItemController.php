<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $validasi_data=Validator::make($request->all(),[
                'kode'=>['required'],
                'item'=>['required'],
                'kategori'=>['required'],
                'status'=>['required']
                ]);

            if($validasi_data->fails()){
                return response()->json(['message'=>'validasi data','status'=>'error','data'=>$validasi_data->errors()],422);
            }else{
                $item=new Item();
                $item->kode          =$request->kode;
                $item->item         =$request->item;
                $item->kategori        =$request->kategori;
                $item->deskripsi       =$request->deskripsi;
                $item->status   =$request->status;
                $item->save();
                if($item){
                    return response()->json(['message'=>'data item berhasil disimpan','status'=>1],200);
                }else{
                    return response()->json(['message'=>'data item gagal disimpan','status'=>0]);
                }
            }
        }else{
            redirect('item');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit',['data'=>$item,'title'=>'EDIT DATA ITEM']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        if($request->ajax()){
            $validasi_data=Validator::make($request->all(),[
                'kode'=>['required'],
                'item'=>['required'],
                'kategori'=>['required'],
                'status'=>['required']
                ]);

            if($validasi_data->fails()){
                return response()->json(['message'=>'validasi data','status'=>'error','data'=>$validasi_data->errors()],422);
            }else{
                $item->kode         =$request->kode;
                $item->item         =$request->item;
                $item->kategori     =$request->kategori;
                $item->deskripsi    =$request->deskripsi;
                $item->status       =$request->status;
                $item->update();
                if($item){
                    return response()->json(['message'=>'data item berhasil diupdate','status'=>1],200);
                }else{
                    return response()->json(['message'=>'data item gagal diupdate','status'=>0]);
                }
            }
        }else{
            redirect('item');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if($item){
            $hapus=$item->delete();
            if($hapus){
                return response()->json(['message'=>'data item berhasil dihapus','status'=>1],200);
            }else{
                return response()->json(['message'=>'data item gagal dihapus','status'=>0],200);
            }
        }else{
            redirect('/item');
        }
    }

    public function fetch()
    {
        $items=DB::table('items')->select('id','kode','item','kategori','status')->orderBy('id','desc');
        return Datatables::of($items)
                        ->addIndexColumn()
                        ->editcolumn('status',function($data){
                            return $data->status==1?'Aktif':'Tidak aktif';
                        })
                        ->addColumn('aksi', function($data){
                            $btn='<div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-arrow-circle-down"></i>
                            </button>
                            <div class="dropdown-menu bg-gray" role="menu" style="">
                              <a class="dropdown-item" href="item/'.$data->id.'"><i class="fa fa-user"></i> Detail</a>
                              <a class="dropdown-item" href="item/'.$data->id.'/edit" ><i class="fa fa-id-card"></i> Edit</a>
                              <a class="dropdown-item delete-data-item" href="javascript:void(0)" data-id="'.$data->id.'" ><i class="fa fa-trash"></i> Hapus</a>
                            </div>
                          </div>';
                            return $btn;
                        })
                        ->rawColumns(['aksi'])
                        ->toJson();
    }
}
