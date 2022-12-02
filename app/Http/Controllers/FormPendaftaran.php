<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Str;
use App\Models\Program;
use App\Models\Santri;
use App\Models\Dokumen;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\Dokumentahfidz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormPendaftaran extends Controller
{
    public function form_pendaftaran_tahfidz(Request $request)
    {
        $program = Program::where('program_name', 'Tahfidz')->first();
        return view('fe_page.formpendaftaran',compact('program'));
    }

    public function send_wa_admin($wa_admin, $santri_name, $total_santri_baru)
    {
        $curl = curl_init();
        $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
        $payload = [
            "data" => [
                [
                    'phone' =>  $wa_admin,
                    'message' => 'Assalamualaikum<br>santri atas nama : '.$santri_name.' telah mendaftar'.
                    '<br>'.$total_santri_baru.''.
                    '<br>*Dimohon kesediannya untuk memeriksa data santri tersebut*'.
                    '<br>*Benar atau salahnya data santri yang dikirim, mohon untuk memberikan pesan balasan kepada santri / wali santri dengan mengaudit status santri tersebut*'.
                    "<br><br>*Form :*  https://nf2.nurulfalah.org/login".
                    "<br><br>Smoga di mudahkan Alloh SWT. Aamiin YRA".
                    "<br>Terimakasih. Wassalamualaikum Wr. Wb,",
                    
                    'secret' => false, // or true
                    'retry' => false, // or true
                    'isGroup' => false, // or true
                ]
            ]
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
                "Content-Type: application/json"
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
        curl_setopt($curl, CURLOPT_URL, "https://solo.wablas.com/api/v2/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($curl);
        curl_close($curl);
    }

    public function submit_form_tahfidz(Request $request)
    {
        $validator = Validator::make($request->all(), [
             
            'program_id' => 'required',
            'santri_name' => 'required',
            'santri_nik' => 'required',
            'santri_nisn' => 'required',
            'santri_tempatlahir' => 'required',
            'tgl_santri' => 'required',
            'bln_santri' => 'required',
            'thn_santri' => 'required',
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
           
            'dokumen_rapot'=> 'required',
            'dokumen_kk'=> 'required',
            'dokumen_akta'=> 'required',
            'dokumen_ktp'=> 'required',
            'dokumen_foto'=> 'required',
            'dokumen_vaksin'=> 'required',
            'dokumen_tfformulir'=> 'required',
            
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json(
                [
                    'status' =>400,
                    'message'=>$validator->messages(),
                ]
            );
           
        }else {
            # code...
            $santri_exist_nisn = Santri::where('santri_nisn', $request->santri_nisn)
                                        ->where('santri_nik',$request->santri_nik)->first();
            if ($santri_exist_nisn !== null) {
                # code sudah ada santri dengan data nisn dan nik sebagai berikut...
                return response()->json([
                    'status' => 400,
                    'message' => ['maaf anda hanya bisa mendaftar satu kali, jika ingin merubah data anda silahkan tekan tombol audit data']
                ]);
            }else {
                # code...
                DB::beginTransaction();

                try {
                    // code...
                    // CREATE SANTRI

                    $tgl_lahir_santri = $request->thn_santri.'-'.$request->bln_santri.'-'.$request->tgl_santri;  
                    $santri  = Santri::updateOrCreate(
                        [
                            'id'=> $request->id,
                        ],
                        [
                            'program_id' => $request->program_id,
                            'santri_slug' => Str::slug($request->santri_name),
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
                            'santri_alamatsekolah' => $request->santri_alamatsekolah,
                            'status'            => $request->status,
                        ]
                    );

                    if ($request->ayah_name !== null) {
                        # code...
                        // CREATE AYAH
                        $tgl_lahir_ayah     = '';
                        if ($request->tgl_ayah !== null && $request->bln_ayah !== null && $request->thn_ayah !== null) {
                            # code...
                            $tgl_lahir_ayah = $request->thn_ayah.'-'.$request->bln_ayah.'-'.$request->tgl_ayah;
                        }else {
                            # code...
                            $tgl_lahir_ayah = '';
                        }

                        $ayah = Ayah::updateOrCreate(
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
                    }
                    

                    if ($request->ibu_name !== null) {
                        # code...
                        // CREATE IBU
                        $tgl_lahir_ibu     = '';
                        if ($request->tgl_ibu !== null && $request->bln_ibu !== null && $request->thn_ibu !== null) {
                            # code...
                            $tgl_lahir_ibu = $request->thn_ibu.'-'.$request->bln_ibu.'-'.$request->tgl_ibu;
                        }else {
                            # code...
                            $tgl_lahir_ibu = '';
                        }
                        
                        $ibu = Ibu::updateOrCreate(
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
                    }
                    

                    // CREATE DOKUMEN
                    // SIMPAN FILE DOKUMEN DI FOLDER PUBLIC
                    $filename1 = '';
                    $filename2 = '';
                    $filename3 = '';
                    $filename4 = '';
                    $filename5 = '';
                    $filename6 = '';
                    $filename7 = '';
                    $filename8 = '';
                    $filename9 = '';
                    $filename10 = '';
                    
                    if($request->hasFile('dokumen_rapot')) {
                        $filename1    = 'rapot_'.time().'.'.$request->dokumen_rapot->getClientOriginalExtension();
                        $request->file('dokumen_rapot')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename1);
                    }

                    if($request->hasFile('dokumen_kk')) {
                        $filename2    = 'kk_'.time().'.'.$request->dokumen_kk->getClientOriginalExtension();
                        $request->file('dokumen_kk')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename2);
                    }

                    if($request->hasFile('dokumen_akta')) {
                        $filename3    = 'akta_'.time().'.'.$request->dokumen_akta->getClientOriginalExtension();
                        $request->file('dokumen_akta')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename3);
                    }

                    if($request->hasFile('dokumen_ktp')) {
                        $filename4    = 'ktp_'.time().'.'.$request->dokumen_ktp->getClientOriginalExtension();
                        $request->file('dokumen_ktp')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename4);
                    }

                    if($request->hasFile('dokumen_foto')) {
                        $filename5    = 'foto_'.time().'.'.$request->dokumen_foto->getClientOriginalExtension();
                        $request->file('dokumen_foto')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename5);
                    }

                    if($request->hasFile('dokumen_suratsehat')) {
                        $filename6    = 'suratsehat_'.time().'.'.$request->dokumen_suratsehat->getClientOriginalExtension();
                        $request->file('dokumen_suratsehat')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename6);
                    }

                    if($request->hasFile('dokumen_suratbaik')) {
                        $filename7    = 'suratbaik_'.time().'.'.$request->dokumen_suratbaik->getClientOriginalExtension();
                        $request->file('dokumen_suratbaik')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename7);
                    }

                    if($request->hasFile('dokumen_vaksin')) {
                        $filename8    = 'vaksin_'.time().'.'.$request->dokumen_vaksin->getClientOriginalExtension();
                        $request->file('dokumen_vaksin')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename8);
                    }

                    if($request->hasFile('dokumen_prestasi')) {
                        $filename9    = 'prestasi_'.time().'.'.$request->dokumen_prestasi->getClientOriginalExtension();
                        $request->file('dokumen_prestasi')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename9);
                    }

                    if($request->hasFile('dokumen_tfformulir')) {
                        $filename10    = 'tfformulir_'.time().'.'.$request->dokumen_tfformulir->getClientOriginalExtension();
                        $request->file('dokumen_tfformulir')->move('dokumen_santri/'.$santri->id.'_'.$santri->slug,$filename10);
                    }

                    $dokumen = Dokumen::updateOrCreate(
                        [
                            'id' => $request->dokumen_id,
                        ],
                        [
                            'program_id' => $request->program_id,
                            'santri_id' => $santri->id,
                            'dokumen_rapot' => $filename1,
                            'dokumen_kk' => $filename2,
                            'dokumen_akta' => $filename3,
                            'dokumen_ktp' => $filename4,
                            'dokumen_foto' => $filename5,
                            'dokumen_suratsehat' => $filename6,
                            'dokumen_suratbaik' => $filename7,
                            'dokumen_vaksin' => $filename8,
                            'dokumen_prestasi' => $filename9,
                            'dokumen_tfformulir' => $filename10,
                        ]
                    );
                    

                    // commit semua perintah insert
                    DB::commit();
                    $wa_admin = '081329146514';
                    $tots     = Santri::where('status','daftar')->count() - 1;
                    $total_santri_baru = '';
                    if ($tots > 0) {
                        # code...
                        $total_santri_baru = 'dan '.$tots.' santri baru lainnya yang belum di audit';
                    }else {
                        # code...
                        $total_santri_baru = '';
                    }
                    
                    $this->send_wa_admin($wa_admin, $santri->santri_name, $total_santri_baru);
  

                    return response()->json(
                        [
                            'status'  => 200,
                            'message' => ['Data santri berhasil disimpan. Tunggu pesan balasan yang kami kirim kepada anda terkait konfirmasi pendaftaran ke nomor wali santri yang terdaftar'],
                        ]
                    );

                } catch (\Exception $e) {
                    //throw $e;
                    //rollback semua data yang diinsert sebelumnya karena terdapat error
                    DB::rollback();
                    
                    return response()->json(
                        [
                            'status'  => 400,
                            'message' => ['Pastikan anda mengisi seluruh data santri dan dokumen persyaratan'],
                        ]
                    );
                }
            }
            
        }
    }
}