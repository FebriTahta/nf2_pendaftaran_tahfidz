<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Santri;
use App\Models\Dokumentahfidz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormPendaftaran extends Controller
{
    public function form_pendaftaran_tahfidz(Request $request)
    {
        return view('fe_page.formpendaftaran');
    }

    public function submit_form_tahfidz(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $validator = Validator::make($request->all(), [
                'santri_name'=> 'required',
                'tgl' => 'required',
                'bln' => 'required',
                'thn' => 'required',
                'santri_gender' => 'required',
                'santri_alamat' => 'required',
                'santri_tempatlahir' => 'required',
            ]);
        }

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal Lengkapi Pertanyaan Jangan Ada yang Kosong / Kembar',
                'errors' => $validator->messages(),
            ]);
        }else {
            # code...

            return response()->json([
                'status' => 200,
                'message'  => 'Form Pendaftaran Belum Siap, Tunggu Beberapa Saat',
            ]);

            DB::beginTransaction();

            try {
                //code...
                $tanggal_lahir = $request->thn.'-'.$request->bln.'-'.$request->tgl;
                DB::table('santris')->updateOrCreate(
                    [
                        'id'=> $request->id,
                    ],
                    [
                        'santri_name' => $request->santri_name,
                        'santri_tanggallahir' => $tanggal_lahir,
                        'santri_tempatlahir' => $request->santri_tempatlahir,
                        'santri_alamat' => $request->santri_alamat,
                        'santri_gender' => $request->santri_gender
                    ]
                );


            } catch (\Throwable $th) {
                //throw $th;
                
            }
        }
    }
}