<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Wisata;
use DataTables;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.wisata.index');
    }

    public function getWisata()
    {
        $wisata = Wisata::all();
        return Datatables::of($wisata)
            ->addIndexColumn()
            ->addColumn('created_at', function ($wisata) {

                return date('d-m-Y h:i', strtotime($wisata->created_at));
            })
            ->addColumn('deskripsi', function ($wisata) {

                return strip_tags($wisata->deskripsi);
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
        $wisata = new Wisata;
        $wisata->nama = $request->nama;
        $wisata->harga = $request->harga;
        $wisata->tujuan = $request->tujuan;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->save();
        return response()->json([
            'message' => 'Wisata Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return response()->json([
            'message' => 'Edit Wisata',
            'data' => $wisata,
        ]);
    }

    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        $wisata->nama = $request->nama;
        $wisata->harga = $request->harga;
        $wisata->tujuan = $request->tujuan;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->save();
        return response()->json([
            'message' => 'Wisata Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return response()->json([
            'message' => 'Wisata Deleted',
        ], 200);
    }
}
