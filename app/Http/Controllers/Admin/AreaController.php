<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Area;
use DataTables;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.area.index');
    }

    public function getArea()
    {
        $area = Area::all();
        return Datatables::of($area)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($area) {

                return date('d-m-Y h:i', strtotime($area->updated_at));
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
        $area = new Area;
        $area->area = $request->area;
        $area->biayaA = $request->biayaA;
        $area->biayaI = $request->biayaI;
        $area->biayaH = $request->biayaH;
        $area->save();
        return response()->json([
            'message' => 'Paket Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $area = Area::find($id);
        return response()->json([
            'message' => 'Edit Paket',
            'data' => $area,
        ]);
    }

    public function update(Request $request, $id)
    {
        $area = Area::find($id);
        $area->area = $request->area;
        $area->biayaA = $request->biayaA;
        $area->biayaI = $request->biayaI;
        $area->biayaH = $request->biayaH;
        $area->save();
        return response()->json([
            'message' => 'Paket Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $area = Area::find($id);
        $area->delete();
        return response()->json([
            'message' => 'Paket Deleted',
        ], 200);
    }
}
