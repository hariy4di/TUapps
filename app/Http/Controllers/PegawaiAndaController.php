<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiAndaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = '';

        $user = Auth::user();
        $user_id =  Auth::user()->email;
        $model = \App\User::where('email', '=', $user_id)->first();

        $datas = $model->getPegawaiAnda();
        // print_r($datas);die();
        // if(count($datas)>0){
            $datas->withPath('pegawai_anda');
            $datas->appends($request->all());
        // }

        return view('pegawai_anda.index',compact('datas', 'keyword'));
    }

    public function profile($id)
    {
        $model = \App\User::find($id);

        $datas=array();
        $month = date('m');
        $year = date('Y');
        $type = 1;

        $ckp = new \App\Ckp;

        $lb_datas=array();

        $start = date('m/d/Y');
        $end = date('m/d/Y');

        $lb_model = new \App\LogBook;

        return view('pegawai_anda.profile',compact('model','id', 'ckp', 'month', 
            'year', 'type',
            'start', 'end', 'lb_model'));
    }
}