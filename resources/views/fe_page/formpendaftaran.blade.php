@extends('fe_layouts.master')

@section('fe_content')
    <section class="bg-no-repeat bg-center bg-cover flex flex-wrap items-center relative before:absolute before:inset-0"
        style="background-color: white">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[700px]  mx-auto text-center relative z-[1]">
                        <h1 class="font-recoleta leading-tight " style="font-size: 40px; margin-top:50px ">
                            FORM PENDAFTARAN
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center" style="font-size: 15px">
                            Pastikan anda sudah membaca alur & syarat pendaftaran sebelum mengisi form pendaftaran berikut
                            ini
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-properties pt-[50px] lg:pt-[20px]" style="margin-bottom: 100px">
        <div class="container">

            <div class="pt-[50px] lg:pt-[50px] add-properties-form-select">
                <div class="container">
                    <form id="formsubmit" method="POST"> @csrf

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
                            <div class="mb-[45px] col-span-12 md:col-span-4">
                                <input id="Propertyinfo1" name="NIK"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="NIK..." >
                            </div>
                            <div class="mb-[45px] col-span-12 md:col-span-4">
                                <input id="Propertyinfo1" name="NISN"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="NISN..." >
                            </div>
                        </div>


                        <div class="grid grid-cols-12 gap-x-[30px]">
                            <div class="mb-[45px] col-span-4 md:col-span-4">
                                <input id="Propertyinfo1" name="tgl"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Tgl Lahir" >
                            </div>
                            <div class="mb-[45px] col-span-4 md:col-span-4">
                                <div class="relative">
                                    <select class="nice-select form-select" name="bln">
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
                                <input name="thn"
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

                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Anak Ke ...</label> --}}
                                <input id="property-title" name="santri_nomoranak"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="number" placeholder="Anak Ke ...">
                            </div>
                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Dari ... Bersaudara</label> --}}
                                <input id="property-title" name="santri_nomoranak"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="number" placeholder="Dari ... Bersaudara">
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-x-[30px]">
                            <div class="mb-[45px] col-span-12">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="textarea">Alamat Lengkap</label> --}}
                                    <textarea
                                    class="h-[196px] xl:h-[360px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none"
                                    name="textarea" id="textarea" cols="30" rows="10" placeholder="Tulis alamat lengkap calon santri ..."></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-x-[30px]">

                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Tinggi Badan</label> --}}
                                <input id="property-title" name="santri_tinggi"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Tinggi Badan ... cm">
                            </div>
                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Berat Badan</label> --}}
                                <input id="property-title" name="santri_berat"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Berat Badan ... kg">
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-x-[30px]">

                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Riwayat Penyakit</label> --}}
                                <input id="property-title" name="santri_riwayatsakit"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Riwayat Penyakit ...">
                            </div>
                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Riwayat Opname</label> --}}
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
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Asal Sekolah</label> --}}
                                <input id="property-title" name="santri_asalsekolah"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Asal Sekolah : SD/MI ...">
                            </div>
                            <div class="mb-[45px] col-span-12 md:col-span-12">
                                {{-- <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="property-title"> Alamat Asal Sekolah</label> --}}
                                <input id="property-title" name="santri_asalsekolah"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Asal Sekolah ...">
                            </div>
                        </div>

                        {{-- Ortu --}}
                        <div class="grid grid-cols-12 gap-x-[30px]">
                            <div class="col-span-12">
                                <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary"
                                    for="Location">DATA WALI SANTRI</label>
                            </div>

                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                <input id="Location"
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="Nama Ayah...">
                            </div>

                            <div class="mb-[45px] col-span-6 md:col-span-6">
                                <input
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="text" placeholder="NIK">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <input
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="number" placeholder="No Telp Ayah (Whatsapp / Aktif) ...">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <input
                                    class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "
                                    type="number" placeholder="No Telp Bunda (Whatsapp / Aktif) ...">
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-x-[30px]">
                            <div class="mb-[45px] col-span-12">
                                <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary">Upload Dokumen Lampiran Sesuai Syarat Pendaftaran</label>
                                <div class="form-group" style="margin-bottom: 20px">
                                    <label class="text-primary">1. Scan Raport Kelas 6 & Ijazah SKHUS / N</label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">2. Scan KK </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">3. Scan Akta </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">4. Scan KTP Ayah & Ibu </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">5. Pas Photo 3x4 <i>background biru</i> </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">6. Scan surat keterangan sehar dari dokter </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">7. Scan surat keterangan berkelakukan baik di sekolah </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">8. Scan sertifikat vaksin 1 dan 2 </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">9. Scan sertifikat prestasi </label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group"  style="margin-bottom: 20px">
                                    <label class="text-primary">10. Scan bukti transfer pembayaran formulir ( <i>mengisi surat pernyataan tinggal di pesantren selama 6 tahun</i> ) </label><br>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <button type="submit" style="min-width: 200px; text-align: center" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                                Daftar Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]" style="margin-top: 100px">
                <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">INFORMASI
                    PENDAFTARAN<span class="text-secondary">.</span></h3>
                <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                    <li class="my-[7px] mx-[5px]"><a href="/"
                            class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Home
                            Page</a>
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
                    <li class="my-[7px] mx-[5px]"><a href="/alur-pendaftaran"
                            class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Alur
                            Pendaftaran</a>
                    </li>
                    <li class="my-[7px] mx-[5px]"><a href="/tes-seleksi"
                            class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Tes
                            Seleksi</a>
                    </li>

                    <li class="my-[7px] mx-[5px]"><a href="#"
                            class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Sekretariat
                            & Kontak</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </section>
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
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: response.message,
                            type: "success"
                        })
                        // .then(okay => {
                        //     if (okay) {
                        //         window.location.href = "/admin/list-posting";
                        //     }
                        // })
                        ;
                    } else {
                        swal({
                            title: "MAAF",
                            text: "FORM BELUM DAPAT DIGUNAKAN",
                            type: "warning"
                        })
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
</script>

@endsection