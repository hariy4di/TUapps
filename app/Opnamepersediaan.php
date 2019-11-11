<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Opnamepersediaan extends Model
{
    protected $table = 'opname_persediaan';

    public function attributes()
    {
        return (new \App\Http\Requests\OpnamepersediaanRequest())->attributes();
    }

    public function triggerNextMonth($month, $year, $id_barang, $saldo, $harga, $nama){
        $model_next = \App\Opnamepersediaan::where('id_barang', '=' ,$id_barang)
                        ->where('bulan', '=', ($month+1))
                        ->where('tahun', '=', $year)
                        ->first();

        if($month==12){
            $model_next = \App\Opnamepersediaan::where('id_barang', '=' ,$id_barang)
                            ->where('bulan', '=', 1)
                            ->where('tahun', '=', ($year+1))
                            ->first();
        }
        
        if($model_next==null) {
            $model_next= new \App\Opnamepersediaan;
            $model_next->id_barang = $id_barang;

            if($month==12){
                $model_next->bulan = 1;
                $model_next->tahun = ($year+1);
            }
            else{
                $model_next->bulan = ($month+1);
                $model_next->tahun = $year;
            }

            $model_next->created_by=Auth::id();
            $model_next->saldo_tambah = 0;
            $model_next->harga_tambah = 0;
        }

        $model_next->nama_barang = $nama;

        $model_next->saldo_awal = $saldo;
        $model_next->harga_awal = $saldo*$harga;
        $model_next->updated_by=Auth::id();

        $model_next->save();

    }

    public function OpnameRekap($i, /*$end_month,*/ $year){
        $label_select = "";
        $label_join = "";

        // for($i=$start_month;$i<=$end_month;$i++){
            $label_select .= ", IFNULL(op.sa_$i,0) as op_awal_$i, IFNULL(op.st_$i,0) as op_tambah_$i";

            $label_join .= ",SUM(CASE WHEN o.bulan =  $i THEN o.saldo_awal ELSE 0 END) sa_$i,
                SUM(CASE WHEN o.bulan =  $i THEN o.saldo_tambah ELSE 0 END) st_$i";
        // }

        $sql = "SELECT mb.id, mb.nama_barang, mb.harga_satuan, mb.satuan,
            IFNULL((SELECT SUM(jumlah_kurang) FROM opname_pengurangan WHERE id_barang=mb.id AND 
                bulan= $i AND tahun= $year),0) as pengeluaran  
            $label_select
                
            FROM master_barangs mb
            LEFT JOIN (
                SELECT o.id_barang $label_join 
                FROM opname_persediaan as o 
                WHERE tahun = $year 
                GROUP BY o.id_barang
            ) op ON op.id_barang=mb.id";

        // dd($sql);
        $result = DB::select(DB::raw($sql));

        return $result;
    }
}
