<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use DataTables;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.blog.index');
    }

    public function getBlog()
    {
        $blog = Blog::all();
        return Datatables::of($blog)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($blog) {

                return date('d-m-Y h:i', strtotime($blog->updated_at));
            })
            ->addColumn('foto', function ($blog) {
                $url = asset('blog/'.$blog->foto);
                $img = '';
                $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                return $img;
            })
            ->addColumn('deskripsi', function ($blog) {

                return strip_tags($blog->deskripsi);
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
        $image = $request->foto;
        $blog_ext = $image->getClientOriginalExtension();
        $name = $image->getClientOriginalName();
        '.' . $blog_ext;
        $path = public_path() . '/blog';
        $upload = $image->move($path, $name);

        $blog = new Blog;
        $blog->judul = $request->judul;
        $blog->foto = $name;
        $blog->deskripsi = $request->deskripsi;
        $blog->save();
        return response()->json([
            'message' => 'Blog Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return response()->json([
            'message' => 'Edit Blog',
            'data' => $blog,
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('foto')) {
            $image = $request->foto;
            $blog_ext = $image->getClientOriginalExtension();
            $name = $image->getClientOriginalName();
            '.' . $blog_ext;
            $path = public_path() . '/blog';
            $upload = $image->move($path, $name);

            $blog = Blog::find($id);
            $blog->judul = $request->judul;
            $blog->foto = $name;
            $blog->deskripsi = $request->deskripsi;
            $blog->save();
        }else{
            $blog = Blog::find($id);
            $blog->judul = $request->judul;
            $blog->deskripsi = $request->deskripsi;
            $blog->save();
        }

        return response()->json([
            'message' => 'Data Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return response()->json([
            'message' => 'Blog Deleted',
        ], 200);
    }
}
