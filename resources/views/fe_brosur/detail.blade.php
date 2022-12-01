@extends('fe_layouts.master')

@section('fe_content')

<style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }

    .brosur .card {
        margin: 0 auto;
    }

    .deskripsi .card {
        margin: 0 auto;
    }

    .foot img {
        margin: 0 auto;
    }

    .foot p {
        font-size: 15px !important;
        text-align: center;
        margin-top: 10px;
    }

    .profile {
        padding-top: 65px;
        text-align: center;
    }
    .profile img {
        margin: 0 auto;
        text-align: center;
        border-radius: 50%;
        max-width: 100px;
        margin-bottom: 10px !important;
    }

    .profile span {
        margin-top: 20px !important;
        font-size: 18px !important;
        color: white;
        font-weight: 700 !important;
    }

    .profile p {
        font-size: 18px !important;
        font-weight: 600;
    }

    .sosmed {
        padding-top: 20px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
    }
</style>

<div class="konten" style="min-height: 1000px; background-color: #6D9886; width: 100%">
    <div class="profile">
        @if ($profile !== null)
            <img src="{{$profile->image}}" alt="">
            <span>Pesantren Nurul Falah 2</span>
            <p style="color: white">{{$profile->profile_desc}}</p>
        @else
            <img src="{{asset('assets_be/images/user.png')}}" alt="">
        @endif
    </div>

    <div class="sosmed" style="max-width: 220px">
        @foreach ($sosmed as $item)
            @if ($item->sosmed_name == 'whatsapp')
                <a href="{{$item->sosmed_link}}">
                    <i class="fab fa-whatsapp" style="color: white; font-size: 30px;"></i>
                </a>
            @endif
            @if ($item->sosmed_name == 'facebook')
                <a href="{{$item->sosmed_link}}">
                    <i class="fab fa-facebook" style="color: white; font-size: 30px;"></i>
                </a>
            @endif
            @if ($item->sosmed_name == 'instagram')
                <a href="{{$item->sosmed_link}}">
                    <i class="fab fa-instagram" style="color: white; font-size: 30px;"></i>
                </a>
            @endif
        @endforeach
    </div>

    @if ($url == 'form' || $url == 'form-pendaftaran')
        <div class="deskripsi" style="padding: 3%">
            <div class="card" style="padding: 20px; background-color: white; max-width: 600px; border-radius: 10px">
                <h2 style="font-size: 18px">Form Pendaftaran</h2>
                <br>
                <p style="line-height: 20px; font-size: 18px">Lengkapi data berikut ini dan pastikan anda telah membaca serta mengetahui persyaratan pendaftaran</p>
                <div class="kembali" style="margin-top: 20px">
                    <a href="/" class="btn btn-primary bg-primary" style="color: white; padding: 7px; border-radius: 5px;">
                        <i class="fa fa-undo"></i>  kembali
                    </a>
                </div>
            </div>
        </div>


        <section class="popular-properties pt-[50px] lg:pt-[20px]" style="margin-bottom: 100px; padding: 10px">
            <div class="container" style="background-color: white; border-radius: 15px">
                <div class=" add-properties-form-select" style="padding-top: 20px">
                    <div class="container">
                        <form id="formsubmit" method="POST"> @csrf
                            @if ($program !== null)
                                <div class="grid grid-cols-12 gap-x-[30px]">
                                    <div class="mb-[45px] col-span-12 md:col-span-12">
                                        <input id="property-title" name="program_id"
                                            class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                            type="hidden" placeholder="..." value="{{$program->id}}">
                                    </div>
                                </div>
                            @endif
                            
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                        for="property-title"> DATA SANTRI</label>
                                    
                                    <input id="property-title" name="santri_name"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Nama lengkap santri">
                                </div>
                            </div>
                           
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="Propertyinfo1" name="santri_nik"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="NIK..." >
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="Propertyinfo1" name="santri_nisn"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="NISN..." >
                                </div>
                            </div>
    
    
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input id="Propertyinfo1" name="tgl_santri"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Tgl Lahir" >
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="bln_santri">
                                            <option value="">Bln Lahir</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input name="thn_santri"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Thn Lahir" min="1996" max="{{date('Y')}}">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="santri_tempatlahir"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tempat Lahir">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="santri_gender">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="L">Laki - laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-[30px]">
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_anaknomor"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Anak Ke ...">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_bersaudara"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Dari ... Bersaudara">
                                </div>
                            </div>
    
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-12">
                                        <textarea
                                        class="h-[196px] xl:h-[360px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none"
                                        name="santri_alamat" id="textarea" cols="30" rows="10" placeholder="Tulis alamat lengkap calon santri ..."></textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-[30px]">
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_tinggibadan"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tinggi Badan ... cm">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_beratbadan"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Berat Badan ... kg">
                                </div>
                            </div>
    
                            <div class="grid grid-cols-12 gap-x-[30px]">
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_riwayatsakit"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Riwayat Penyakit ...">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="property-title" name="santri_riwayatopname"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Riwayat Opname ...">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="santri_statuskeluarga">
                                            <option value="">Status Di Keluarga</option>
                                            <option value="K">Kandung</option>
                                            <option value="A">Angkat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <input id="property-title" name="santri_asalsekolah"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Asal Sekolah : SD/MI ...">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <input id="property-title" name="santri_alamatsekolah"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Alamat Asal Sekolah ...">
                                </div>
                            </div>
    
                            {{-- Ortu --}}
                            <hr>
                            <div class="grid grid-cols-12 gap-x-[30px]" style="margin-top: 50px">
                                <div class="col-span-12">
                                    <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                        for="Location">DATA WALI SANTRI AYAH</label>
                                </div>
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="Location" name="ayah_name"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Nama Ayah...">
                                </div>
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ayah_nik"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="NIK">
                                </div>                            
                            </div>
    
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input id="Propertyinfo1" name="tgl_ayah"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tgl Lahir" >
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="bln_ayah">
                                            <option value="">Bln Lahir</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input name="thn_ayah"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Thn Lahir"  max="{{date('Y')}}">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ayah_tempatlahir"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tempat Lahir">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="ayah_pendidikan">
                                            <option value="">Pendidikan </option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ayah_pekerjaan"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Pekerjaan">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="ayah_penghasilan">
                                            <option value="">Penghasilan </option>
                                            <option value="1-3">1-3 JT</option>
                                            <option value="4-6">4-6 JT</option>
                                            <option value="7-9">7-9 JT</option>
                                            <option value="10>">10 JT Keatas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ayah_nohp"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="No HP">
                                </div>
                            </div>
    
                            <div class="grid grid-cols-12 gap-x-[30px]" style="margin-top: 50px">
                                <div class="col-span-12">
                                    <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                        for="Location">DATA WALI SANTRI IBU</label>
                                </div>
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input id="Location" name="ibu_name"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Nama Ibu...">
                                </div>
    
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ibu_nik"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="NIK">
                                </div>
                            </div>
    
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input id="Propertyinfo1" name="tgl_ibu"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tgl Lahir" >
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="bln_ibu">
                                            <option value="">Bln Lahir</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-4 md:col-span-4">
                                    <input name="thn_ibu"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="Thn Lahir"  max="{{date('Y')}}">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ibu_tempatlahir"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Tempat Lahir">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="ibu_pendidikan">
                                            <option value="">Pendidikan </option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ibu_pekerjaan"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="text" placeholder="Pekerjaan">
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <div class="relative">
                                        <select class="nice-select form-select" name="ibu_penghasilan">
                                            <option value="">Penghasilan </option>
                                            <option value="1-3">1-3 JT</option>
                                            <option value="4-6">4-6 JT</option>
                                            <option value="7-9">7-9 JT</option>
                                            <option value="10>">10 JT Keatas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <input name="ibu_nohp"
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                        type="number" placeholder="No HP">
                                </div>
                            </div>
    
                            <hr>
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="col-span-12">
                                    <label style="margin-top: 50px" class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                        for="Location">SCAN BERKAS PERSYARATAN</label>
                                </div>
                                <div class="mb-[45px] col-span-12">
                                    <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary">Upload Dokumen Lampiran Sesuai Syarat Pendaftaran</label>
                                    <div class="form-group" style="margin-bottom: 20px">
                                        <label class="text-primary">1. Scan Raport Kelas 6 & Ijazah SKHUS / N</label><br>
                                        <input type="file" name="dokumen_rapot" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">2. Scan KK </label><br>
                                        <input type="file" name="dokumen_kk" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">3. Scan Akta </label><br>
                                        <input type="file" name="dokumen_akta" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">4. Scan KTP Ayah & Ibu </label><br>
                                        <input type="file" name="dokumen_ktp" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">5. Foto Full Body (<i> Seluruh Badan </i>) </label><br>
                                        <input type="file" name="dokumen_foto" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">6. Scan surat keterangan sehat dari dokter </label><br>
                                        <input type="file" name="dokumen_suratsehat" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">7. Surat Keterangan baik dari sekolah </label><br>
                                        <input type="file" name="dokumen_suratbaik" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">8. Scan sertifikat vaksin 1 dan 2 </label><br>
                                        <input type="file" name="dokumen_vaksin" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">9. Scan sertifikat prestasi </label><br>
                                        <input type="file" name="dokumen_prestasi" class="form-control">
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 20px">
                                        <label class="text-primary">10. Scan bukti transfer pembayaran formulir </label><br>
                                        <input type="file" name="dokumen_tfformulir" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="kembali" style="width: 300px">
                                            <button href="#" type="submit" class="btn btn-primary bg-primary" style="color: white; padding: 10px; border-radius: 5px;">
                                                <i class="fa fa-submit"></i>  Daftar Sekarang
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit" style="min-width: 200px; text-align: center" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                                    Daftar Sekarang
                                </button> --}}

                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @else
        @if ($konten !== null)
            <div class="deskripsi" style="padding: 3%">
                <div class="card" style="padding: 20px; background-color: white; max-width: 600px; border-radius: 10px">
                    <h2 style="font-size: 18px">{{$konten->menu->menu_name}}</h2><br>
                    <p style="line-height: 20px; font-size: 18px">{!!$konten->konten_desc!!}</p>
                    <div class="kembali" style="margin-top: 20px">
                        <a href="/" class="btn btn-primary bg-primary" style="color: white; padding: 7px; border-radius: 5px;">
                            <i class="fa fa-undo"></i>  kembali
                        </a>
                    </div>
                </div>
            </div>


            <div class="brosur" style="padding: 3%">
                <div class="card" style="background-color: white; max-width: 600px;  border-radius: 20px; padding: 1%">
                    <img style="padding-top: 20px; margin-bottom: 10px" src="{{$konten->image}}" alt="">
                </div>
            </div>

        @else
            <div class="deskripsi" style="padding: 3%">
                <div class="card" style="padding: 20px; background-color: white; max-width: 600px; border-radius: 10px">
                    <h2 style="font-size: 18px">Halaman ini belum tersedia</h2>
                    <p style="line-height: 20px; font-size: 18px">Harap menunggu mengenai info ini</p>
                    <div class="kembali" style="margin-top: 20px">
                        <a href="/" class="btn btn-primary bg-primary" style="color: white; padding: 7px; border-radius: 5px;">
                            <i class="fa fa-undo"></i>  kembali
                        </a>
                    </div>
                </div>
            </div>
        @endif
    @endif

    
    
    
    <div class="foot" style="margin-top: 80px">
        <img src="{{asset('assets/images/logo/nf22.png')}}" style="max-width: 150px" alt="">
        <p style="color: white;">Nurul Falah 2 Pandaan {{date('Y')}}</p>
    </div>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script>
    $('#formsubmit').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/submit-form-tahfidz",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function() {
                //     $('#id_button').attr('disabled', 'disabled');
                //     $('#id_button').val('Processing');
                // },
                success: function(response) {
                    if (response.status == 200) {
                        // swal({
                        //     title: "SUCCESS!",
                        //     text: response.message,
                        //     type: "success"
                        // })
                        // .then(okay => {
                        //     if (okay) {
                        //         window.location.href = "/admin/list-posting";
                        //     }
                        // });
                        toastr.success(response.message);
                        swal({
                            title:"Ok",
                            text : response.message,
                            type :"success",
                        });
                        
                    } else {
                        var values = '';
                        jQuery.each(response.message, function (key, value) {
                            values += '<p>'+ value +'</p>'
                        });
                        swal({
                            title : "Maaf",
                            html : values,
                            type : "error",
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
</script>

@endsection