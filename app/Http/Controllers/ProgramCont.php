<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;
use DataTables;

class ProgramCont extends Controller
{
    public function index_program(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Program::get();
            return DataTables::of($data)
            ->addColumn('opsi', function($data){
                $actionBtn = ' <a href="#"class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                $actionBtn.= ' <a href="#" class="delete btn btn-success btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['opsi'])
            ->make(true);
        }
        return view('be_page.program');
    }
}
