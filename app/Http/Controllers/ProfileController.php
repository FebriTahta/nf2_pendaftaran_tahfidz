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
                
                return response()->json([
                    'status' => 200,
                    'message' => ['menampilkan profile info'],
                    'data' => [
                        'image' => $exist->image,
                        'profile_desc' => $exist->profile_desc,
                        'id' => $exist->id,
                        'label' => substr($exist->image,-14),
                        'profile_nomor_admin' => $exist->profile_nomor_admin
                    ]
                ]);

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
        $validator = Validator::make($request->all(),
        [
            'profile_desc' => 'required',
            'profile_nomor_admin' => 'required',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message' => $validator->messages()
            ]);
        }else {
            # code...
            if($request->hasFile('image')) {

                if ($request->id !== null) {
                    # update with image code...
                    $datas = Profile::find($request->id);
                    $images = substr($datas->image, -28);
                    unlink($images);
                }
    
    
                // mode image to directory
                $filename    = time().'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move('profile_image/',$filename);
    
                $data = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'image' => $filename,
                        'profile_desc' => $request->profile_desc,
                        'profile_nomor_admin' => $request->profile_nomor_admin,
                    ]
                );
    
                return response()->json([
                    'status' => 200,
                    'message' => ['profile has been updated']
                ]);
    
            }else {
                # code...
                $data = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'profile_desc' => $request->profile_desc,
                        'profile_nomor_admin' => $request->profile_nomor_admin
                    ]
                );
    
                return response()->json([
                    'status' => 200,
                    'message' => ['profile has been updated']
                ]);
            }
        }
    }

    public function delete_profile(Request $request) 
    {
        $data = Profile::findOrFail($request->id);
        if (file_exists(substr($data->image, -28))) {  
            $images = substr($data->image, -28);
            unlink($images);
            $data->delete() ;

            return response()->json([
                'status' => 200,
                'message' => ['profile has been reseted / deleted'],
            ]);                
        }else {
            # code...
            $data->delete() ;
            return response()->json([
                'status' => 200,
                'message' => ['profile has been reseted / deleted'],
            ]);
        };
    }
}
