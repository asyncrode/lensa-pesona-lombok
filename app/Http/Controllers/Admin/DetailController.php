<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Detail_harga;
use App\Wisata;
use DataTables;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.detail.index');
    }

    public function getDetail()
    {
        $detail = Detail_harga::with('wisata')->latest()->get();
        return Datatables::of($detail)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($detail) {

                return date('d-m-Y h:i', strtotime($detail->updated_at));
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

    public function getWisata()
    {
        $wisata = Wisata::all();
        return response()->json($wisata, 200);
    }

    public function store(Request $request)
    {
        $detail = new Detail_harga;
        $detail->jmlPeserta = $request->peserta;
        $detail->hrgTour = $request->harga;
        $detail->hrgTourHotel = $request->harga_hotel;
        $detail->wisata_id = $request->wisata;
        $detail->save();
        return response()->json([
            'message' => 'Detail_harga Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $detail = Detail_harga::find($id);
        $wisata = Wisata::all();
        return response()->json([
            'message' => 'Edit Paket',
            'data' => $detail,
            'wisata' => $wisata,
        ]);
    }

    public function update(Request $request, $id)
    {
        $detail = Detail_harga::find($id);
        $detail->jmlPeserta = $request->peserta;
        $detail->hrgTour = $request->harga;
        $detail->hrgTourHotel = $request->harga_hotel;
        $detail->wisata_id = $request->wisata;
        $detail->save();
        return response()->json([
            'message' => 'Data Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $detail = Detail_harga::find($id);
        $detail->delete();
        return response()->json([
            'message' => 'Paket Deleted',
        ], 200);
    }
}
