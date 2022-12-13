<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use DataTables;

class VideoController extends Controller
{
    public function index()
    {
        return view('admin.video.index');
    }

    public function getVideo()
    {
        $video = Video::all();
        return Datatables::of($video)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($video) {

                return date('d-m-Y h:i', strtotime($video->updated_at));
            })
            ->addColumn('video', function ($video) {
                $url = asset('video/'.$video->video);
                $img = '';
                $img = $img . '<video src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                return $img;
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['video','action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $video = $request->video;
        $video_ext = $video->getClientOriginalExtension();
        $name = $video->getClientOriginalName();
        '.' . $video_ext;
        $path = public_path() . '/video';
        $upload = $video->move($path, $name);


       $video = new Video;
       $video->judul = $request->judul;
       $video->video = $name;
       $video->save();
        return response()->json([
            'message' => 'Video Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
       $video = Video::find($id);
        return response()->json([
            'message' => 'Edit Video',
            'data' =>$video,
        ]);
    }

    public function update(Request $request, $id)
    {
       
        if ($request->hasFile('video')) {
            $video = $request->video;
            $video_ext = $video->getClientOriginalExtension();
            $name = $video->getClientOriginalName();
            '.' . $video_ext;
            $path = public_path() . '/video';
            $upload = $video->move($path, $name);

           $video = Video::find($id);
           $video->judul = $request->judul;
           $video->video = $name;
           $video->save();
        }else{
           $video = Video::find($id);
           $video->judul = $request->judul;
           $video->save();
        }

        
        return response()->json([
            'message' => 'Data Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
       $video = Video::find($id);
       $video->delete();
        return response()->json([
            'message' => 'Video Deleted',
        ], 200);
    }
}
