<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Konten;
use App\Models\Menu;
use App\Models\Program;
use App\Models\Sosmed;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function index(Request $request)
    {
        // return view('fe_brosur.index');
        $sosmed  = Sosmed::get();
        $profile = Profile::first();
        $menu    = Menu::get();
        return view('fe_brosur.menu',compact('profile','menu','sosmed'));
    }

    public function pendaftaran_sukses(Request $request)
    {
        return view('fe_brosur.sukses_pendaftaran');
    }

    public function brosur(Request $request, $url) {

        if ($url == 'form' || $url == 'form-pendaftaran') {
            # code...
            $menu = Menu::where('menu_link',$url)->first();
            $konten = Konten::where('menu_id', $menu->id)->first();
            $profile = Profile::first();
            $program = Program::where('program_name','tahfidz')->first();
            return view('fe_brosur.detail', compact('konten','menu','profile','url','program'));
        }else {
            # code...
            $menu = Menu::where('menu_link',$url)->first();
            $konten = Konten::where('menu_id', $menu->id)->first();
            $profile = Profile::first();
            return view('fe_brosur.detail', compact('konten','menu','profile','url'));
        }
       
    }
}
