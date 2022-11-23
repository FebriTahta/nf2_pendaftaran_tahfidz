@extends('fe_layouts.master')

@section('fe_content')
    <style>
        .content {
            margin: auto;
            max-width: 600px;
        }
        .top {
            margin-top: 50px;
        }
        .midle {
            margin-top: 50px;
        }
        .bottom {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
    

    <div class="content">
        <div class="top">
            <img src="{{asset('1a.jpg')}}" alt="">
        </div>
        <div class="midle">
            <img src="{{asset('2.jpg')}}" alt="">
        </div>
        <div class="bottom">
            <img src="{{asset('3a.jpg')}}" alt="">
        </div>
         <div class="bottom">
            <img src="{{asset('4.jpg')}}" alt="">
        </div>
    </div>

    <section class="service-section">

        <div class="container">
           
            <div class="grid grid-cols-1 formpendaftaran">
                <div class="col-span">
                    <div
                        class="flex flex-wrap items-center justify-between py-[30px] xl:py-[40px] px-[30px] xl:px-[55px] shadow-[0px_10px_20px_rgba(196,196,196,0.5)] rounded-[15px] border border-[rgba(1,100,80,0.25)] bg-white mb-[80px] lg:mb-[-75px]">
                        <div class="w-full lg:w-auto">
                            <h3
                                class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-[36px] leading-[1.277] mb-[10px]">
                                DAFTAR MENJADI SANTRI TAHFIDZ 2023 - 2024</h3>
                        </div>
                        <div class="w-full lg:w-auto mt-5 lg:mt-0">
                            <form id="mc-form" class="relative w-full">
                                <a href="/form-pendaftaran-tahfidz" id="mc-submit" type="submit"
                                    class="text-white font-medium text-[16px] leading-none tracking-[0.02em] bg-primary py-[15px] px-[20px] mt-5 sm:mt-0 rounded-[10px] hover:bg-secondary transition-all sm:absolute sm:right-[5px] sm:top-1/2 sm:-translate-y-1/2">FORM
                                    PENDAFTARAN</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-1 map">
                <div class="col-span">
                    <div style="height: 400px"
                        class="flex flex-wrap items-center justify-between py-[10px] xl:py-[20px] px-[10px] xl:px-[20px] shadow-[0px_10px_20px_rgba(196,196,196,0.5)] rounded-[15px] border border-[rgba(1,100,80,0.25)] bg-white mb-[80px] lg:mb-[-75px]">
                        <iframe class="w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.1699944792135!2d112.6998479!3d-7.6648654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d9b22f61b971%3A0x6fe7f5d0adf7b901!2sPesantren%20Al-Qur&#39;an%20Nurul%20Falah%202%20Pandaan!5e0!3m2!1sid!2sid!4v1668586885594!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection