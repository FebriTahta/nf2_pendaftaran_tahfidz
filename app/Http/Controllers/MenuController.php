<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Support\Str;
use App\Models\Menu;
use Validator;
use DataTables;
use File;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index_menu(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Menu::get();
            return DataTables::of($data)
            ->addColumn('opsi', function($data){
                $actionBtn = ' <a href="#"class="delete btn btn-info btn-sm" data-id="'.$data->id.'" data-menu_name="'.$data->menu_name.'" data-image="'.$data->image.'"
                data-toggle="modal" data-target="#modaledit"><i class="text-white fa fa-pencil"></i></a>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
            })
            ->addColumn('images', function($data){
                $images = '<img src="'.$data->image.'" style="max-width:50px" alt="">';
                return $images;
            })
            ->rawColumns(['opsi','images'])
            ->make(true);
        }
        $menu = Menu::get();
        return view('be_page.menu',compact('menu'));
    }

    public function post_menu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_name' => 'required',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'status' => 400,
                'message' => $validator->messages(),
            ]);
        }else {
            # code...
            if (auth()->user()->role == 'super_admin') {
                # code...
                if($request->hasFile('image')) {
                    if ($request->id !== null) {
                        # edit pasti code...
                        //remove image menu sebelum menggantinya dengan image yang baru
                        $datas = Menu::find($request->id);
                        $images = substr($datas->image, -25);
                        unlink($images);

                        // mode image to directory
                        $filename    = time().'.'.$request->image->getClientOriginalExtension();
                        $request->file('image')->move('menu_image/',$filename);

                        $exist = Menu::where('menu_name',$request->menu_name)->first();
                        if ($exist !== null) {
                            # code...
                            if ($exist->id == $request->id && $exist->menu_name == $request->menu_name || 
                            $exist->id == $request->id && $exist->menu_name !== $request->menu_name || 
                            $exist->id !== $request->id && $exist->menu_name !== $request->menu_name) {
                                # code...
                                
                                $data = Menu::updateOrCreate(
                                    [
                                        'id' => $request->id
                                    ],
                                    [
                                        'menu_name' => $request->menu_name,
                                        'menu_link' => Str::slug($request->menu_name),
                                        'menu_view' => 0,
                                        'image'     => $filename
                                    ]
                                );
                                return response()->json([
                                    'status' => 200,
                                    'message' => ['menu pada sistem has been updated'],
                                ]);
                            }else {
                                # code...
                                return response()->json([
                                    'status' => 400,
                                    'message' => ['menu sudah terdaftar'],
                                ]);
                            }
                        }else {
                            # code...
                            // mode image to directory
                            $filename    = time().'.'.$request->image->getClientOriginalExtension();
                            $request->file('image')->move('menu_image/',$filename);

                            $data = Menu::updateOrCreate(
                                [
                                    'id' => $request->id
                                ],
                                [
                                    'menu_name' => $request->menu_name,
                                    'menu_link' => Str::slug($request->menu_name),
                                    'menu_view' => 0,
                                    'image'     => $filename
                                ]
                            );
                            return response()->json([
                                'status' => 200,
                                'message' => ['menu pada sistem has been updated'],
                            ]);
                        }
                        
    
                    }else {
                        # code... id null / create baru
                        # create new menu
                        $exist = Menu::where('menu_name',$request->menu_name)->first();
                        if ($exist !== null) {
                            # code...
                            return response()->json([
                                'status' => 400,
                                'message' => ['menu sudah terdaftar'],
                            ]);
                        }else {
                            # code...
                            // mode image to directory
                            $filename    = time().'.'.$request->image->getClientOriginalExtension();
                            $request->file('image')->move('menu_image/',$filename);
                            $data = Menu::updateOrCreate(
                                [
                                    'id' => $request->id
                                ],
                                [
                                    'menu_name' => $request->menu_name,
                                    'menu_link' => Str::slug($request->menu_name),
                                    'menu_view' => 0,
                                    'image'     => $filename
                                ]
                            );
                            return response()->json([
                                'status' => 200,
                                'message' => ['menu pada sistem has been updated'],
                            ]);
                        }
                        
                    }
                }else {
                    #tidak ada gambar code...
                    if ($request->id !== null) {
                        # pasti update code...
                        $exist = Menu::where('menu_name',$request->menu_name)->first();
                        if ($exist !== null) {
                            # code...
                            if ($exist->id == $request->id && $exist->menu_name == $request->menu_name || 
                                $exist->id == $request->id && $exist->menu_name !== $request->menu_name || 
                                $exist->id !== $request->id && $exist->menu_name !== $request->menu_name) {
                                # code...
                                
                                $data = Menu::updateOrCreate(
                                    [
                                        'id' => $request->id
                                    ],
                                    [
                                        'menu_name' => $request->menu_name,
                                        'menu_link' => Str::slug($request->menu_name),
                                        'menu_view' => 0,
                                    ]
                                );
                                return response()->json([
                                    'status' => 200,
                                    'message' => ['menu pada sistem has been updated'],
                                ]);
                            }else {
                                # code...
                                return response()->json([
                                    'status' => 400,
                                    'message' => ['menu sudah terdaftar'],
                                ]);
                            }
                        }else {
                            # code...
                            $data = Menu::updateOrCreate(
                                [
                                    'id' => $request->id
                                ],
                                [
                                    'menu_name' => $request->menu_name,
                                    'menu_link' => Str::slug($request->menu_name),
                                    'menu_view' => 0,
                                ]
                            );
                            return response()->json([
                                'status' => 200,
                                'message' => ['menu pada sistem has been updated'],
                            ]);
                        }
                        
    
                    }else {
                        # code...
                        # create new menu
                        $data = Menu::updateOrCreate(
                            [
                                'id' => $request->id
                            ],
                            [
                                'menu_name' => $request->menu_name,
                                'menu_link' => Str::slug($request->menu_name),
                                'menu_view' => 0,
                            ]
                        );
                        return response()->json([
                            'status' => 200,
                            'message' => ['menu pada sistem has been updated'],
                        ]);
                    }

                }
                
            }else {
                # code...
                return response()->json([
                    'status' => 400,
                    'message' => ['anda tidak berhak memanajemen menu pada sistem'],
                ]);
            }
        }
    }

    public function delete_menu(Request $request)
    {
        $data = Menu::findOrFail($request->id);
        $images = substr($data->image, -25);
        unlink($images);
        $data->delete();

        return response()->json(
            [
                'status' => 200,
                'message' => ['menu has been deleted']
            ]
        );
    }

    public function total()
    {
        $total = Menu::count();
        return response()->json([
            'status' => 200,
            'total' => $total,
            'message' => ['menampilkan data']
        ]);
    }
}
