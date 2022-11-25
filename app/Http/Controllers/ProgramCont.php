<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DataTables;
use Validator;

class ProgramCont extends Controller
{
    public function index_program(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Program::get();
            return DataTables::of($data)
            ->addColumn('opsi', function($data){
                $actionBtn = ' <a href="#"class="delete btn btn-info btn-sm" data-id="'.$data->id.'" data-program_name="'.$data->program_name.'"
                data-toggle="modal" data-target="#modaledit"><i class="text-white fa fa-pencil"></i></a>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
                
            })
            ->rawColumns(['opsi'])
            ->make(true);
        }
        $program = Program::get();
        return view('be_page.program',compact('program'));
    }

    public function post_program(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program_name' => 'required',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json(
                [
                    'status'=> 400,
                    'message'=> $validator->messages(),
                    'errors' => $validator->messages(),
                ]
            );
        }elseif(auth()->user()->role == 'super_admin') {
            # code...
            $data = Program::updateOrCreate(
                [
                    'id'=> $request->id,
                ],
                [
                    'program_name' => $request->program_name,
                    'slug_program' => Str::slug($request->program_name),
                ]
            );

            return response()->json(
                [
                    'status' => 200,
                    'message' => 'program has been updated',
                ]
            );
            
        }else {
            # code...
            return response()->json(
                [
                    'status' => 400,
                    'message' => ['Anda tidak dapat menambahkan program baru atau mengedit program yang sudah ada'],
                ]
            );
        }
    }

    public function delete_program(Request $request)
    {
        if (auth()->user()->role == 'super_admin') {
            # code...
            $data = Program::findOrFail($request->id);
            $data->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'program has been deleted',
            ]);
        }else {
            # code...
            return response()->json([
                'status'=> 400,
                'message'=>['anda tidak berhak menghapus program tersebut'],
            ]);
        }
       
    }
}
