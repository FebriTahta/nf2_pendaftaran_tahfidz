<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index_profile(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $exist = Profile::first();
            if ($exist !== null) {
                # code...
                
            }else {
                # code...
                return response()->json(
                    [
                        'status' => 400,
                        'message' => ['profile kosong'],
                    ]
                );
            }

        }
        return view('be_page.profile');
    }

    public function post_profile(Request $request)
    {
        
    }
}
