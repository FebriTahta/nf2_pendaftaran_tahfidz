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

                        <img src="assets/images/visi.png" style="max-width: 120px" alt="visi">
                        <blockquote class="italic text-primary leading-[2] mb-[25px]">
                            “Menyiapkan Calon Pemimpin yang Hafidz Sehat dan Berakhlaq Mulia.”
                        </blockquote>
                        <img src="assets/images/misi.png" style="max-width: 120px" alt="misi">
                        <p class="max-w-[767px]">

                        <ul>
                            <li><span class="text-secondary">1. </span> Menyelenggarakan pendidikan Pesantren yang
                                sistematis</li>
                            <li><span class="text-secondary">2. </span> Menyiapkan calon pemimpin yang 'alim</li>
                            <li><span class="text-secondary">3. </span> Mendidik santri yang hafidz qur'an</li>
                            <li><span class="text-secondary">4. </span> Mendidik santri sehat jasmani, rohani dan Cinta
                                Tanah Air Indonesia</li>
                            <li><span class="text-secondary">5. </span> Mendidik santri yang berakhlaqul karimah dan
                                beraqidah ahlusunnah wal jama'ah, berlandaskan al qur'an dan hadits serta Ijma' Qiyas ulama
                            </li>
                        </ul>
                        </p>
                    </div>

                    <div
                        class="flex flex-wrap items-center justify-between mt-[25px] mb-[-15px] pt-[20px] border-t border-[#E0E0E0]">
                        <div class="flex flex-wrap mb-[15px]">
                            <span class="text-secondary">Tags:</span>
                            <a class="font-light hover:text-secondary ml-[5px]" href="#">Visi</a>
                            <a class="font-light hover:text-secondary ml-[5px]" href="#"> Misi</a>

                        </div>

                        <div class="flex flex-wrap mb-[15px]">
                            <span class="text-secondary">Share:</span>
                            <ul class="inline-flex items-center justify-center">
                                {{-- <li class="ml-[15px]"><a href="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"
                                        class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                        <i class="fab fa-facebook"></i>

                                    </a></li> --}}
                                <li class="ml-[15px]"><a href="whatsapp://send?text=https://nf2.nurulfalah.org/visi-misi"
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
