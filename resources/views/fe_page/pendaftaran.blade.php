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

                        <img src="assets/images/pendaftaran1.png" style="max-width: 200px; margin-left: 20px" alt="mutu">
                        
                        <p class="max-w-[767px]" style="margin-left: 30px">
                            <u> 1 DESEMBER 2022 S.D. 31 JANUARI 2023 </u>
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
