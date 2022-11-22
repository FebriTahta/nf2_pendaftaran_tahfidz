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
                        <p class="max-w-[767px]">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-x-[20px] -mb-[30px] mt-[45px]">
                                <a href="tel:+6285731885420">
                                    <div class="mb-[30px] lg:mb-10 border border-[#FFF6F0] p-[20px] rounded-[8px] transition-all hover:drop-shadow-[0px_10px_20px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8]"
                                        style="background-color: #f5f9f8">
                                        <img src="assets/images/icon/phone.png" class="max-w-[38px] self-start mb-[15px]"
                                            loading="lazy" width="50" height="50" alt="about Image">
                                        <div>
                                            <h3 class="font-recoleta text-primary text-base capitalize mb-[5px]">Kontak Telepon</h3>
        
                                            <p class="text-[14px]">Klik untuk telp : <br> +6285 731 885 420</p>
                                        </div>
        
                                    </div>
                                </a>
                                <a href="https://www.google.co.id/maps/place/Pesantren+Al-Qur'an+Nurul+Falah+2+Pandaan/@-7.6648654,112.6998479,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7d9b22f61b971:0x6fe7f5d0adf7b901!8m2!3d-7.6648654!4d112.6998479"
                                    target="_blank">
        
                                    <div class="mb-[30px] lg:mb-10 border border-[#FFF6F0] p-[20px] rounded-[8px] transition-all hover:drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] hover:bg-[#F5F9F8]"
                                        style="background-color: #f5f9f8">
                                        <img src="assets/images/icon/location.png" class="max-w-[38px] self-start mb-[15px]"
                                            loading="lazy" width="50" height="50" alt="about Image">
                                        <div>
                                            <h3 class="font-recoleta text-primary text-base capitalize mb-[5px]">Lokasi Map</h3>
                                            <p class="text-[14px]">Dsn Kalitengah RT 3 / Rw 4 Ds Karangjati Pasuruan Jawa Timur</p>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
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
