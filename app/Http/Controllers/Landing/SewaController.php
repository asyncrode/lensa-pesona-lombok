<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Sewa;
use App\Antar;
use App\Area;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sewa = Sewa::all();
        $area = Area::all();
        $antar = Antar::all();

        return view('landing.sewa', compact('sewa', 'area', 'antar'));
    }
}
