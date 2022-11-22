@extends('fe_layouts.master')

@section('fe_content')
    <section class="popular-properties pt-[80px] lg:pt-[120px]" style="margin-bottom: 100px">
        <div class="container">

            <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                    <img src="assets/images/bg3.png" class="w-auto h-auto" loading="lazy" alt="Elite Garden Resedence."
                        width="770" height="465">
                    <img src="assets/images/diskon.png" style="max-width: 130px; float: right" alt="">

                    <div class="mt-[55px] mb-[35px]">

                        <img src="assets/images/syarat.png" style="max-width: 270px" alt="mutu">
                        <p class="max-w-[767px]">
                           <ul>
                                <li><span class="text-secondary">- </span> Laki - laki</li>
                                <li><span class="text-secondary">- </span> Lulus SD / MI / Sederajat</li>
                                <li><span class="text-secondary">- </span> Mengisi surat peryataan (Tinggal di Pesantren selama 6 Tahun) </li>
                                <li><span class="text-secondary">- </span> Melampirakan <b class="text-secondary"><i> berkas scan </i></b> antara lain : </li>
                           </ul>
                        </p>
                        <br>
                        <p class="max-w-[767px]">
                            <ul>
                                 <li>1.<span class="text-secondary"> Scan Raport Kelas 6 Dan  Ijazah SKHUS/N </span></li>
                                 <li>2.<span class="text-secondary"> Scan KK</span></li>
                                 <li>3.<span class="text-secondary"> Scan Akte </span></li>
                                 <li>4.<span class="text-secondary"> Scan KTP Bapak Dan Ibu </span></li>
                                 <li>5.<span class="text-secondary"> Scan Pas Photo (3x4) Background Biru</span></li>
                                 <li>6.<span class="text-secondary"> Scan Surat Keterangan Sehat Dari Dokter / Rumah Sakit</span></li>
                                 <li>7.<span class="text-secondary"> Scan Surat Keterangan Kelakuan Baik Sekolah</span></li>
                                 <li>8.<span class="text-secondary"> Scan Sertifikat Vaksin 1 Dan 2</span></li>
                                 <li>9.<span class="text-secondary"> Scan Sertifikat-Sertifikat Prestasi</span></li>
                                 <li>10.<span class="text-secondary"> Scan Bukti Transfer Pembayaran Formulir</span></li>
                            </ul>
                         </p>
                        
                    </div>

                    <div
                        class="flex flex-wrap items-center justify-between mt-[25px] mb-[-15px] pt-[20px] border-t border-[#E0E0E0]">
                        <div class="flex flex-wrap mb-[15px]">
                            <span class="text-secondary">Tags:</span>
                            <a class="font-light hover:text-secondary ml-[5px]" href="#">Jaminan Mutu</a>
                        </div>

                        <div class="flex flex-wrap mb-[15px]">
                            <span class="text-secondary">Share:</span>
                            <ul class="inline-flex items-center justify-center">
                                <li class="ml-[15px]"><a href="whatsapp://send?text=https://nf2.nurulfalah.org/jaminan-mutu"
                                        class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                        <i class="fab fa-whatsapp"></i>

                                    </a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                    @include('fe_layouts.asideinfo')
                </div>
            </div>

        </div>
    </section>
@endsection
