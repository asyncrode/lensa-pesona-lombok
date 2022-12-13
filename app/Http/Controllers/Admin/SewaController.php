<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sewa;
use DataTables;

class SewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.sewa.index');
    }

    public function getSewa()
    {
        $sewa = Sewa::all();
        return Datatables::of($sewa)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($sewa) {

                return date('d-m-Y h:i', strtotime($sewa->updated_at));
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
        $sewa = new Sewa;
        $sewa->jenis = $request->jenis;
        $sewa->kapasitas = $request->kapasitas;
        $sewa->tarif = $request->tarif;
        $sewa->overtime = $request->overtime;
        $sewa->save();
        return response()->json([
            'message' => 'Paket Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $sewa = Sewa::find($id);
        return response()->json([
            'message' => 'Edit Paket',
            'data' => $sewa,
        ]);
    }

    public function update(Request $request, $id)
    {
        $sewa = Sewa::find($id);
        $sewa->jenis = $request->jenis;
        $sewa->kapasitas = $request->kapasitas;
        $sewa->tarif = $request->tarif;
        $sewa->overtime = $request->overtime;
        $sewa->save();
        return response()->json([
            'message' => 'Paket Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $sewa = Sewa::find($id);
        $sewa->delete();
        return response()->json([
            'message' => 'Paket Deleted',
        ], 200);
    }
}
