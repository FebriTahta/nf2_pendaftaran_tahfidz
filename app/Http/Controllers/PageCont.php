<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCont extends Controller
{
    public function visimisi()
    {
        return view('fe_page.visimisi');
    }

    public function jaminanmutu()
    {
        return view('fe_page.jaminanmutu');
    }

    public function rinciandana()
    {
        return view('fe_page.rinciandana');
    }

    public function pendaftaran()
    {
        return view('fe_page.pendaftaran');
    }

    public function syaratpendaftaran()
    {
        return view('fe_page.syaratpendaftaran');
    }

    public function alurpendaftaran()
    {
        return view('fe_page.alurpendaftaran');
    }

    public function kegiatanharian()
    {
        return view('fe_page.kegiatanharian');
    }

    public function tesseleksi()
    {
        return view('fe_page.tesseleksi');
    }

    public function sekretariat()
    {
        return view('fe_page.sekretariat');
    }
}
