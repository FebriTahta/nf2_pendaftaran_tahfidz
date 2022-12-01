<?php

namespace App\Http\Controllers;
use App\Models\Sosmed;
use Validator;
use DataTables;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    public function index_sosmed(Request $request) 
    {
        if ($request->ajax()) {
            # code...
            $data = Sosmed::get();
            return DataTables::of($data)
            ->addColumn('opsi', function($data){
                $actionBtn = ' <a href="#"class="delete btn btn-info btn-sm" data-id="'.$data->id.'" data-sosmed_name="'.$data->sosmed_name.'"
                data-sosmed_link="'.$data->sosmed_link.'"
                data-toggle="modal" data-target="#modaledit"><i class="text-white fa fa-pencil"></i></a>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
                
            })
            ->rawColumns(['opsi'])
            ->make(true);
        }
        $sosmed = Sosmed::get();
        return view('be_page.sosmed',compact('sosmed'));
    }   

    public function post_sosmed(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'sosmed_name'=> 'required',
            'sosmed_link'=> 'required'
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message' => $validator->messages(),
            ]);
        }else {
            # code...
            $link = '';
            if (substr($request->sosmed_link, 0, 8) !== 'https://') {
                # code...
                $link = 'https://'.$request->sosmed_link;
            }else {
                # code...
                $link = $request->sosmed_link;
            }

            $exist = Sosmed::where('sosmed_name',$request->sosmed_name)->first();
            if ($exist !== null) {
                # code...

                if ($exist->id == $request->id) {
                    # code...
                    $data = Sosmed::updateOrCreate(
                        [
                            'id' => $request->id,
                        ],
                        [
                            'sosmed_name' => $request->sosmed_name,
                            'sosmed_link' => $link,
                        ]
                    );
    
                    return response()->json([
                        'status' => 200,
                        'message' => ['sosmed has been updated'],
                    ]);
                }else {
                    # code...
                    return response()->json([
                        'status' => 400,
                        'message' => ['sosmed tersebut sudah tersedia'],
                    ]);
                }

            }else {
                # code...
                $data = Sosmed::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'sosmed_name' => $request->sosmed_name,
                        'sosmed_link' => $link,
                    ]
                );

                return response()->json([
                    'status' => 200,
                    'message' => ['sosmed has been updated'],
                ]);
            }
        }
    }

    public function delete_sosmed(Request $request) {
        $data = Sosmed::findOrFail($request->id);
        if ($data !== null) {
            # code...
            $data->delete();
            return response()->json(
                [
                    'status' => 200,
                    'message' => ['sosmed has been deleted']
                ]
            );
        }else {
            # code...
            return response()->json(
                [
                    'status' => 200,
                    'message' => ['data sosmed undefined']
                ]
            );
        }
    }
}
