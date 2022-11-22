@extends('fe_layouts.master')

@section('fe_content')
    <section class="popular-properties pt-[80px] lg:pt-[120px]" style="margin-bottom: 100px">
        <div class="container">

            <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                    <img src="assets/images/bg3.png" class="w-auto h-auto" loading="lazy" alt="Elite Garden Resedence."
                        width="770" height="465">
                    <img src="assets/images/diskon.png" style="max-width: 130px; float: right" alt="">

                    <div class="mt-[55px] mb-[35px]"  style="margin-top: 100px">

                        <img src="assets/images/tesseleksi.png" style="max-width: 200px" alt="mutu">
                        
                        <p class="max-w-[767px]">
                           <ul>
                                <li style="margin-left: 20px"><span class="text-secondary">- </span> 13 FEBRUARI 2023, PUKUL 08.00 S/D SELESAI
                                </li>
                           </ul>
                        </p>
                        <img src="assets/images/materi.png" style="max-width: 150px" alt="mutu">
                        <p class="max-w-[767px]">
                            <ul>
                                 <li style="margin-left: 20px"><span class="text-secondary">- </span> BACA AL QUR’AN 
                                 </li>
                                 <li style="margin-left: 20px"><span class="text-secondary">- </span> HAFALAN AL QUR’AN 
                                 </li>
                                 <li style="margin-left: 20px"><span class="text-secondary">- </span> INTERVIEW SANTRI DAN WALISANTRI
                                 </li>
                            </ul>
                         </p>
                         <img src="assets/images/pengumuman.png" style="max-width: 200px" alt="mutu">
                         <p class="max-w-[767px]">
                            <ul>
                                 <li style="margin-left: 20px; text-transform:uppercase"><span class="text-secondary">- </span> Menunggu info Melalui Group WA Calon Wali Santri
                                 </li>
                            </ul>
                         </p>
                        <br>
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
