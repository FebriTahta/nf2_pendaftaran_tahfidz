@extends('fe_layouts.master')

@section('fe_content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="grid grid-cols-12 gap-x-[30px]">
        <div class="col-span-12">
            <div class="col-span-12 mb-[70px]">
                <div class="text-center">
                    <span class="text-secondary text-tiny inline-block mb-2">
                        <img src="{{asset('assets/images/logo/sukses.png')}}" style="max-width: 200px" alt="">
                    </span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[5px]" style="margin-top: 50px">
                        Pendaftaran Berhasil<span class="text-secondary">.</span></h2>
                    <p class="mx-auto max-w-[465px]">
                        Kami menerima dokumen pendaftaran anda. <br>
                        Anda dapat melakukan registrasi ulang secara langsung di Pesantren Nurul Falah 2
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection