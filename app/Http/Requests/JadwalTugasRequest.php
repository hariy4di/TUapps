<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalTugasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_kegiatan' => 'required|max:255',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'pegawai_id' => 'required',
            'penjelasan' => 'required',
            'nomor' => 'required',
            'is_kepala' => 'required',
            'pejabat_ttd' => 'required',
            'is_lpd' => 'required',
            'is_kelengkapan' => 'required',
            'is_lunas' => 'required',

        ];
    }

    public function messages()
    {
        return [
        ];
    }

     
    public function attributes()
    {
        return [
            'nama_kegiatan' => 'Nama Kegiatan',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'penjelasan' => 'Penjelasan',

            'nomor' => 'Nomor Surat',
            'pejabat_ttd' => 'Pejabat Pemberi Tanda Tangan',
            'is_kepala' => 'Apakah persetujuan kepala?',
    
            'is_lpd' => 'Kelengkapan LPD',
            'is_kelengkapan' => 'Kelengkapan Dokumen Lainnya',
            'is_lunas' => 'Pelunasan Pembayaran',
            'created_by' => 'Dibuat oleh',
            'upated_by' => 'Terakhir diperbaharui oleh',
            'pegawai_id' => 'Pegawai',
        ];
    }
}
