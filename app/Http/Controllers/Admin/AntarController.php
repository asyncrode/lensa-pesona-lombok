<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Antar;
use DataTables;

class AntarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.antar.index');
    }

    public function getAntar()
    {
        $antar = Antar::all();
        return Datatables::of($antar)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($antar) {

                return date('d-m-Y h:i', strtotime($antar->updated_at));
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $antar = new Antar;
        $antar->dari = $request->dari;
        $antar->menuju = $request->menuju;
        $antar->avanza = $request->avanza;
        $antar->innova = $request->innova;
        $antar->save();
        return response()->json([
            'message' => 'Data Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $antar = Antar::find($id);
        return response()->json([
            'message' => 'Edit Paket',
            'data' => $antar,
        ]);
    }

    public function update(Request $request, $id)
    {
        $antar = Antar::find($id);
        $antar->dari = $request->dari;
        $antar->menuju = $request->menuju;
        $antar->avanza = $request->avanza;
        $antar->innova = $request->innova;
        $antar->save();
        return response()->json([
            'message' => 'Data Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $antar = Antar::find($id);
        $antar->delete();
        return response()->json([
            'message' => 'Data Deleted',
        ], 200);
    }
}
