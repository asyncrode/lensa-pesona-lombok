<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Foto;
use DataTables;

class FotoController extends Controller
{
    public function index()
    {
        return view('admin.foto.index');
    }

    public function getFoto()
    {
        $foto = Foto::all();
        return Datatables::of($foto)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($foto) {

                return date('d-m-Y h:i', strtotime($foto->updated_at));
            })
            ->addColumn('foto', function ($foto) {
                $url = asset('foto/'.$foto->foto);
                $img = '';
                $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                return $img;
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['foto','action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $gambar = $request->foto;
        $gambar_ext = $gambar->getClientOriginalExtension();
        $name = $gambar->getClientOriginalName();
        '.' . $gambar_ext;
        $path = public_path() . '/foto';
        $upload = $gambar->move($path, $name);


        $foto = new Foto;
        $foto->lokasi = $request->lokasi;
        $foto->foto = $name;
        $foto->save();
        return response()->json([
            'message' => 'Foto Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $foto = Foto::find($id);
        return response()->json([
            'message' => 'Edit Foto',
            'data' => $foto,
        ]);
    }

    public function update(Request $request, $id)
    {
       
        if ($request->hasFile('foto')) {
            $gambar = $request->foto;
            $gambar_ext = $gambar->getClientOriginalExtension();
            $name = $gambar->getClientOriginalName();
            '.' . $gambar_ext;
            $path = public_path() . '/foto';
            $upload = $gambar->move($path, $name);

            $foto = Foto::find($id);
            $foto->lokasi = $request->lokasi;
            $foto->foto = $name;
            $foto->save();
        }else{
            $foto = Foto::find($id);
            $foto->lokasi = $request->lokasi;
            $foto->save();
        }

        
        return response()->json([
            'message' => 'Data Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return response()->json([
            'message' => 'Foto Deleted',
        ], 200);
    }
}
