<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Santri;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\Dokumentahfidz;
use App\Models\Dokumen;
use DB;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index_santri_baru(Request $request) {
        return view('be_page.santri_baru');
    }

    public function post_santri(Request $request)
    {
        $validator = Validator([
            //Santri
            'program_id' => 'required',
            'santri_name' => 'required',
            'santri_nik' => 'required',
            'santri_nisn' => 'required',
            'santri_tempatlahir' => 'required',
            'tgl' => 'required',
            'bln' => 'required',
            'thn' => 'required',
            'santri_gender' => 'required',
            'santri_anaknomor' => 'required',
            'santri_bersaudara' => 'required',
            'santri_alamat' => 'required',
            'santri_tinggibadan' => 'required',
            'santri_beratbadan' => 'required',
            'santri_riwayatsakit' => 'required',
            'santri_riwayatopname' => 'required',
            'santri_statuskeluarga' => 'required',
            'santri_asalsekolah' => 'required',
            'santri_alamatsekolah' => 'required',
            //Dokumen
            'dokumen_rapot'=> 'required',
            'dokumen_kk'=> 'required',
            'dokumen_akta'=> 'required',
            'dokumen_ktp'=> 'required',
            'dokumen_foto'=> 'required',
            'dokumen_vaksin'=> 'required',
            'dokumen_tfformulir'=> 'required',
            //Untuk data ayah dan ibu tidak perlu di validasi karena tidak wajib 
            //takutnya tidak pynya salah satu maupun keduanya
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json(
                [
                    'status' =>400,
                    'message'=>$validator->messages(),
                    'errors' =>$validator->messages(),
                ]
            );
        }else {
            # code...
            DB::beginTransaction();

            try {
                // code...
                // CREATE SANTRI
                $tgl_lahir_santri = $request->thn_santri.'-'.$request->bln_santri.'-'.$request->tgl_santri;  
                $santri  = DB::table('santris')
                ->updateOrCreate(
                    [
                        'id'=> $request->id,
                    ],
                    [
                        'program_id' => $request->program_id,
                        'santri_name' => $request->santri_name,
                        'santri_nik' => $request->santri_nik,
                        'santri_nisn' => $request->santri_nisn,
                        'santri_tempatlahir' => $request->santri_tempatlahir,
                        'santri_tanggallahir' => $tgl_lahir_santri,
                        'santri_gender' => $request->santri_gender,
                        'santri_anaknomor' => $request->santri_anaknomor,
                        'santri_bersaudara' => $request->santri_bersaudara,
                        'santri_alamat' => $request->santri_alamat,
                        'santri_tinggibadan' => $request->santri_tinggibadan,
                        'santri_beratbadan' => $request->santri_beratbadan,
                        'santri_riwayatsakit' => $request->santri_riwayatsakit,
                        'santri_riwayatopname' => $request->santri_riwayatopname,
                        'santri_statuskeluarga' => $request->santri_statuskeluarga,
                        'santri_asalsekolah' => $request->santri_asalsekolah,
                        'santri_alamatsekolah' => $request->alamat_sekolah,
                    ]
                );

                // CREATE AYAH
                $tgl_lahir_ayah     = '';
                if ($request->tgl_ayah !== null && $request->bln_ayah !== null && $request->thn_ayah !== null) {
                    # code...
                    $tgl_lahir_ayah = $request->thn_ayah.'-'.$request->bln_ayah.'-'.$request->tgl_ayah;
                }else {
                    # code...
                    $tgl_lahir_ayah = '';
                }

                $ayah = DB::table('ayahs')
                ->updateOrCreate(
                    [
                        'id' => $request->ayah_id,
                    ],
                    [
                        'ayah_name' => $request->ayah_name,
                        'ayah_nik' => $request->ayah_nik,
                        'ayah_tgllahir' => $tgl_lahir_ayah,
                        'ayah_tempatlahir' => $request->ayah_tempatlahir,
                        'ayah_pendidikan' => $request->ayah_pendidikan,
                        'ayah_pekerjaan' => $request->ayah_pekerjaan,
                        'ayah_penghasilan' => $request->ayah_penghasilan,
                        'ayah_nohp' => $request->ayah_nohp,
                        'santri_id' => $santri->id,
                    ]
                );

                // CREATE IBU
                $tgl_lahir_ibu     = '';
                if ($request->tgl_ibu !== null && $request->bln_ibu !== null && $request->thn_ibu !== null) {
                    # code...
                    $tgl_lahir_ibu = $request->thn_ibu.'-'.$request->bln_ibu.'-'.$request->tgl_ibu;
                }else {
                    # code...
                    $tgl_lahir_ibu = '';
                }
                
                $ibu = DB::table('ibus')
                ->updateOrCreate(
                    [
                        'id' => $request->ibu_id,
                    ],
                    [
                        'ibu_name' => $request->ibu_name,
                        'ibu_nik' => $request->ibu_nik,
                        'ibu_tgllahir' => $tgl_lahir_ibu,
                        'ibu_tempatlahir' => $request->ibu_tempatlahir,
                        'ibu_pendidikan' => $request->ibu_pendidikan,
                        'ibu_pekerjaan' => $request->ibu_pekerjaan,
                        'ibu_penghasilan' => $request->ibu_penghasilan,
                        'ibu_nohp' => $request->ibu_nohp,
                        'santri_id' => $santri->id,
                    ]
                );

                // CREATE DOKUMEN
               
                

                $dokumen = DB::table('dokumens')
                ->updateOrCreate(
                    [
                        'id' => $request->dokumen_id,
                    ],
                    [
                        'program_id' => $request->program_id,
                        'santri_id' => $santri->id,
                        'dokumen_rapot' => $request->dokumen_rapot,
                        'dokumen_kk' => $request->dokumen_kk,
                        'dokumen_akta' => $request->dokumen_akta,
                        'dokumen_ktp' => $request->dokumen_ktp,
                        'dokumen_foto' => $request->dokumen_foto,
                        'dokumen_suratsehat' => $request->dokumen_suratsehat,
                        'dokumen_suratbaik' => $request->dokumen_suratbaik,
                        'dokumen_vaksin' => $request->dokumen_vaksin,
                        'dokumen_prestasi' => $request->dokumen_prestasi,
                        'dokumen_tfformulir' => $request->dokumen_tfformulir,
                    ]
                );

                // commit semua perintah insert
                DB::commit();

                return response()->json(
                    [
                        'status'  => 200,
                        'message' => ['Data santri berhasil disimpan'],
                    ]
                );

            } catch (\Exception $e) {
                //throw $e;
                //rollback semua data yang diinsert sebelumnya karena terdapat error
                DB::rollback();
                
                return response()->json(
                    [
                        'status'  => 400,
                        'message' => ['Kesalahan input. Mohon periksa kembali inputan anda'],
                    ]
                );
            }
        }
    }
}
