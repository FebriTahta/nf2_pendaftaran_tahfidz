<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function index(Request $request)
    {
        return view('fe_brosur.index');
    }

    public function pendaftaran_sukses(Request $request)
    {
        return view('fe_brosur.sukses_pendaftaran');
    }
}
