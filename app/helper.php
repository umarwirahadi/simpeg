<?php
use Illuminate\Support\Facades\DB;

if(!function_exists('getProfile')){
    function getProfile(){
        $companyName="PUSKESMAS PASIRKALIKI";
        return $companyName;
    }
}

if(!function_exists('getItem')){
    function getItem($categories='',$default=''){
        if(!empty($categories)){
            $item=DB::table('items')->where('status',1)->where('kategori',$categories)->get();
            $dataItem="";
            if(isset($default)){
                foreach ($item as $key) {
                    if($default==$key->kode){
                        $dataItem .="<option value='".$key->kode."' selected='selected'>".$key->item."</option>";
                    }else{
                        $dataItem .="<option value='".$key->kode."'>".$key->item."</option>";
                    }
                }
                return $dataItem;
            }else{
                foreach ($item as $key) {
                    $dataItem .="<option value='".$key->kode."'>".$key->item."</option>";
                }
                return $dataItem;
            }
        }else{
            $dataItem="";
            $dataItem .="<option selected>Pilih</option>";
            return $dataItem;
        }
    }
}

if(!function_exists('getKategories')){
    function getKategories(){
        $item=DB::table('items')->select('kategori')->groupBy('kategori')->get();
        $dataItem="";
        foreach ($item as $key) {
            $dataItem .="<option value='".$key->kategori."'>".$key->kategori."</option>";
        }
        return $dataItem;
    }
}
?>

