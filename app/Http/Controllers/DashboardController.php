<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Keahlian;
use App\Models\Art;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalsewa = Penyewaan::count();
        $jumlahart = Art::count();
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('admin.pages.dashboard',[
            'domisili' => $domisili,
            'keahlian' => $keahlian,
            'jumlahart' => $jumlahart,
            'totalsewa' => $totalsewa
        ]);
    }
}
