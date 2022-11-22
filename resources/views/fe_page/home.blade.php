@extends('fe_layouts.master')

@section('fe_content')
    <section class="about-section py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
                <div class="col-span-12 lg:col-span-6 relative mb-[30px]">
                    {{-- <div class="scene absolute top-0 right-[5%] xl:right-[10%]" data-relative-input="true">
                        <img data-depth="0.2" src="assets/images/about/dot-with-line.png" width="48" height="158"
                            alt="image">
                    </div>

                    <div class="scene absolute bottom-[10%] lg:bottom-[25%] xl:bottom-[15%] left-[10%]"
                        data-relative-input="true">
                        <img data-depth="0.3" src="assets/images/about/star.png" width="85" height="64"
                            loading="lazy" alt="image">
                    </div> --}}


                    <div class="scene" data-relative-input="true">
                        <img class="block mx-auto" data-depth="0.1" src="assets/images/bg2.png" loading="lazy" width="520"
                            height="467" alt="about Image">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 mb-[30px]">
                    <span class="text-secondary text-tiny inline-block mb-2">SELAMAT DATANG</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl max-w-[500px] mb-3"
                        style="text-transform: capitalize">
                        Portal Informasi Pendaftaran Santri Tahfidz 2023 - 2024 <span class="text-secondary">.
                        </span></span><br><br>
                        <p style="font-size: 18px; line-height: 25px">PESANTREN AL QUR'AN NURUL FALAH 2 <br>
                            PANDAAN - PASURUAN - JAWA TIMUR
                        </p>
                    </h2>

                    <p class="max-w-[480px]"> </p>

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

                </div>
            </div>
        </div>
    </section>

    <section class="service-section">

        <div class="container">
            <div class="grid grid-cols-12 text-center">
                <div class="col-span-12 text-center mb-[55px]">
                    <div class="max-w-[460px] mx-auto">
                        <span class="text-secondary text-tiny inline-block mb-2"></span>
                        <h2
                            class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-3">
                            Pendaftaran Santri Tahfidz 2023 - 2024<span class="text-secondary">.</span></h2>

                        <p>Klik informasi lebih lengkap mengenai Pendaftaran Santri Tahfidz 2023 - 2024</p>
                    </div>
                </div>
            </div>

            <div class="grid gap-x-[50px] grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mb-[-30px] xl:px-[35px]">
                <a href="/visi-misi">
                    <div
                        class="relative p-[20px] xl:p-[30px] mb-[30px] bg-[#F5F9F8] hover:bg-[#FFF6F0] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px] skew-left">
                        <div class="flex flex-wrap justify-between">
                            <span class="font-recoleta text-[28px] leading-none text-secondary mb-[10px] block">01.</span>
                            <img class="self-start mb-[-20px] md:mb-[0] lg:mb-[-20px]"
                                src="assets/images/service-icon/chart.png" alt="image" width="50" height="50"
                                loading='lazy' />
                        </div>
                        <h3 class="font-recoleta text-base text-primary mb-[5px]">Visi - Misi</h3>
                        <p class="font-light text-[14px] max-w-[250px]">Ketahui visi dan misi kami untuk membangun
                            kepercayaan anda</p>
                    </div>
                </a>
                <a href="/jaminan-mutu">
                    <div
                        class="relative p-[20px] xl:p-[30px] mb-[30px] hover:bg-[#FFF6F0] bg-[#FFF6F0] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px]">
                        <div class="flex flex-wrap justify-between">
                            <span class="font-recoleta text-[28px] leading-none text-secondary mb-[10px] block">02.</span>
                            <img class="self-start mb-[-20px] md:mb-[0] lg:mb-[-20px]"
                                src="assets/images/service-icon/note.png" alt="image" width="50" height="50"
                                loading='lazy' />
                        </div>
                        <h3 class="font-recoleta text-base text-primary mb-[5px]">Jaminan Mutu</h3>
                        <p class="font-light text-[14px] max-w-[250px]">memberikan jaminan mutu
                            yang
                            terjamin untuk setiap santri</p>
                    </div>
                </a>
                <a href="#">
                    <div
                        class="relative p-[20px] xl:p-[30px] mb-[30px] bg-[#F5F9F8] hover:bg-[#FFF6F0] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px] skew-right">
                        <div class="flex flex-wrap justify-between">
                            <span class="font-recoleta text-[28px] leading-none text-secondary mb-[10px] block">03.</span>
                            <img class="self-start mb-[-20px] md:mb-[0] lg:mb-[-20px]"
                                src="assets/images/service-icon/key.png" alt="image" width="50" height="54"
                                loading='lazy' />
                        </div>
                        <h3 class="font-recoleta text-base text-primary mb-[5px]">Syarat Pendaftaran</h3>
                        <p class="font-light text-[14px] max-w-[250px]">Syarat yang wajib dipatuhi terkait dengan
                            pendaftaran</p>
                    </div>
                </a>
            </div>


            <style>
                @media only screen and (max-width: 600px) {
                    .cardinfo {
                        margin-top: 30px !important;
                    }

                    .gedung {
                        margin-top: -100px !important;
                    }
                }
            </style>
            <div class="grid grid-col-1 cardinfo" style="margin-top: 100px">
                <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                    <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">INFORMASI
                        PENDAFTARAN<span class="text-secondary">.</span></h3>
                    <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                        <li class="my-[7px] mx-[5px]"><a href="/"
                            class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Home Page</a>
                    </li>
                        <li class="my-[7px] mx-[5px]"><a href="/visi-misi"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Visi
                                - Misi</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/jaminan-mutu"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Jaminan
                                Mutu</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/kegiatan-harian"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Kegiatan
                                Harian</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/rincian-dana"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Rincian
                                Dana</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/pendaftaran"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Pendaftaran</a>
                        </li>

                        <li class="my-[7px] mx-[5px]"><a href="/syarat-pendaftaran"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Syarat
                                Pendaftaran</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/tes-seleksi"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Tes Seleksi</a>
                        </li>
                        <li class="my-[7px] mx-[5px]"><a href="/alur-pendaftaran"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Alur
                                Pendaftaran</a>
                        </li>

                        <li class="my-[7px] mx-[5px]"><a href="/sekretariat"
                                class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Sekretariat
                                & Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
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

    <section class="properties-grids-section pt-[80px] lg:py-[120px] gedung" style="margin-top: 100px">
        <div class="container">
            <div class="grid grid-cols-12">
                {{-- <div class="col-span-12"> <span class="text-secondary text-tiny inline-block mb-2">DISPLAY GAMBARAN RUANG </span></div> --}}
                <div class="col-span-12">
                    <div class="flex flex-col sm:flex-row items-start justify-between mb-[50px]">
                        <div>
                            <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize"
                                style="line-height: 25px">
                                Gedung Nurul Falah 2 Pandaan<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-x-[15px] lg:gap-x-[30px] mb-[-30px]">
                <div class="mb-[30px] col-span-12 sm:col-span-4"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/1-ok.jpg" alt="gallery image" loading="lazy" width="370" height="281">
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-5"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/3-ok.png" alt="gallery image" loading="lazy" width="470" height="281">
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-3"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/2-ok.png" alt="gallery image" loading="lazy" width="272" height="281">
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-4"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/4-ok.png" alt="gallery image" loading="lazy" width="370" height="281">
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-3"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/5-ok.png" alt="gallery image" loading="lazy" width="270" height="281">
                </div>
                <div class="mb-[30px] col-span-12 sm:col-span-5"><img class="object-cover w-full h-full rounded-[8px]"
                        src="assets/images/6-ok.png" alt="gallery image" loading="lazy" width="470" height="281">
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
