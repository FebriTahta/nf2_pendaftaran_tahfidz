<?php

namespace App\Http\Controllers;
use Validator;
use DataTables;
use App\Models\Konten;
use App\Models\Menu;
use Illuminate\Http\Request;

class KontenController extends Controller
{

    public function index_konten(Request $request) 
    {
        if ($request->ajax()) {
            # code...
            $data = Konten::with('menu')->get();
            return DataTables::of($data)
            ->addColumn('opsi', function($data){
                
                if (substr($data->menu->menu_name,0,6) !== 'lokasi') {
                    # code...
                    $actionBtn = ' <a href="#"class="delete btn btn-info btn-sm" data-id="'.$data->id.'" data-konten_desc="'.$data->konten_desc.'" data-menu_id="'.$data->menu_id.'" data-image="'.$data->image.'"
                    data-toggle="modal" data-target="#modaledit"><i class="text-white fa fa-pencil"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                }else {
                    # code...
                    $actionBtn = ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                }
                
                return $actionBtn;
            })
            ->addColumn('images', function($data){
                $images = '<img src="'.$data->image.'" style="max-width:50px" alt="">';
                return $images;
                
            })
            ->addColumn('menu', function($data){
               return $data->menu->menu_name;
            })
            ->rawColumns(['opsi','images','menu'])
            ->make(true);
        }
        $konten = Konten::get();
        $menu = Menu::get();
        return view('be_page.konten',compact('konten','menu'));
    }

    public function total()
    {
        $total = Konten::count();
        return response()->json([
            'status' => 200,
            'total' => $total,
            'message' => ['menampilkan data']
        ]);
    }

    public function post_konten(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_id' => 'required',
            'konten_desc' => 'required',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message' => $validator->messages(),
            ]);
        }else {
            # code...
            if($request->hasFile('image')) {

                if ($request->id !== null) {

                    $exist = Konten::where('menu_id', $request->menu_id)->first();
                    if ($exist !== null) {
                        # code jika ada konten serupa maka...
                        if ($request->id == $exist->id) {
                            # code...
                            $datas = Konten::find($request->id);
                            $images = substr($datas->image, -27);
                            unlink($images);

                            // mode image to directory
                            $filename    = time().'.'.$request->image->getClientOriginalExtension();
                            $request->file('image')->move('konten_image/',$filename);

                            $data = Konten::updateOrCreate(
                                [
                                    'id' => $request->id,
                                ],
                                [
                                    'menu_id' => $request->menu_id,
                                    'konten_desc' => $request->konten_desc,
                                    'image' => $filename,
                                ]
                            );

                            return response()->json([
                                'status' => 200,
                                'message' => ['Konten brosur has been updated'],
                            ]);
                        }else {
                            # code...
                            return response()->json([
                                'status' => 400,
                                'message' => ['sudah terdapat konten sejenis, hanya bisa menambahkan 1 konten pada tiap 1 menu'],
                            ]);
                        }
                    }else {
                            # code...
                            $datas = Konten::find($request->id);
                            $images = substr($datas->image, -27);
                            unlink($images);

                            // mode image to directory
                            $filename    = time().'.'.$request->image->getClientOriginalExtension();
                            $request->file('image')->move('konten_image/',$filename);

                            $data = Konten::updateOrCreate(
                                [
                                    'id' => $request->id,
                                ],
                                [
                                    'menu_id' => $request->menu_id,
                                    'konten_desc' => $request->konten_desc,
                                    'image' => $filename,
                                ]
                            );

                            return response()->json([
                                'status' => 200,
                                'message' => ['Konten brosur has been updated'],
                            ]);
                    }

                    
                }else {
                    # code...
                    $exist = Konten::where('menu_id', $request->menu_id)->first();
                    if ($exist !== null) {
                        # code...
                        return response()->json([
                            'status' => 400,
                            'message' => ['sudah terdapat konten sejenis, hanya bisa menambahkan 1 konten pada tiap 1 menu'],
                        ]);
                    }else {
                        # code...
                        // mode image to directory
                        $filename    = time().'.'.$request->image->getClientOriginalExtension();
                        $request->file('image')->move('konten_image/',$filename);

                        $data = Konten::updateOrCreate(
                        [
                            'id' => $request->id,
                        ],
                        [
                            'menu_id' => $request->menu_id,
                            'konten_desc' => $request->konten_desc,
                            'image' => $filename,
                        ]
                        );

                        return response()->json([
                        'status' => 200,
                        'message' => ['Konten brosur has been updated'],
                        ]);
                    }
                    
                }
            }else {
                # code...
                if ($request->id !== null) {

                    $exist = Konten::where('menu_id', $request->menu_id)->first();
                    if ($exist !== null) {
                        # code jika ada konten serupa maka...
                        if ($request->id == $exist->id) {
                            # code...
                           
                            $data = Konten::updateOrCreate(
                                [
                                    'id' => $request->id,
                                ],
                                [
                                    'menu_id' => $request->menu_id,
                                    'konten_desc' => $request->konten_desc,
                                    
                                ]
                            );

                            return response()->json([
                                'status' => 200,
                                'message' => ['Konten brosur has been updated'],
                            ]);
                        }else {
                            # code...
                            return response()->json([
                                'status' => 400,
                                'message' => ['sudah terdapat konten sejenis, hanya bisa menambahkan 1 konten pada tiap 1 menu'],
                            ]);
                        }
                    }else {
                            

                            $data = Konten::updateOrCreate(
                                [
                                    'id' => $request->id,
                                ],
                                [
                                    'menu_id' => $request->menu_id,
                                    'konten_desc' => $request->konten_desc,
                                    
                                ]
                            );

                            return response()->json([
                                'status' => 200,
                                'message' => ['Konten brosur has been updated'],
                            ]);
                    }

                    
                }else {
                    # code...
                    $exist = Konten::where('menu_id', $request->menu_id)->first();
                    if ($exist !== null) {
                        # code...
                        return response()->json([
                            'status' => 400,
                            'message' => ['sudah terdapat konten sejenis, hanya bisa menambahkan 1 konten pada tiap 1 menu'],
                        ]);
                    }else {
                        # code...
                       
                        $data = Konten::updateOrCreate(
                        [
                            'id' => $request->id,
                        ],
                        [
                            'menu_id' => $request->menu_id,
                            'konten_desc' => $request->konten_desc,
                           
                        ]
                        );

                        return response()->json([
                        'status' => 200,
                        'message' => ['Konten brosur has been updated'],
                        ]);
                    }
                    
                }
            }
        }
    }

    public function delete_konten(Request $request) 
    {
        $data = Konten::findOrFail($request->id);
        $images = substr($data->image, -27);
        unlink($images);
        $data->delete();

        return response()->json(
            [
                'status' => 200,
                'message' => ['konten has been deleted']
            ]
        );
    }
    
}
