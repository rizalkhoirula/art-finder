<?php

namespace App\Http\Controllers\User;

use App\Models\Art;
use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $art = Art::orderBy('id', 'DESC')->get();
        return view('user.pages.index', [
            'art' => $art
        ]);
    }

    public function detail($id)
    {
        $art = Art::find($id);
        return view('user.pages.detail', [
            'art' => $art
        ]);
    }

    public function sewa(Request $request)
    {
        // cek
        $cek_sewa_proses = Penyewaan::where('id_art', $request->id_art)->where('id_user', Auth::user()->id)->where('status', 'Proses')->first();

        if ($cek_sewa_proses) {
            return redirect()->back()->with('sewa-proses', 'Penyewaan sedang diproses, silahkan tunggu konfirmasi dari admin');
        }

        $cek_sewa_berhasil = Penyewaan::where('id_art', $request->id_art)->where('id_user', Auth::user()->id)->where('status', 'Berhasil')->first();

        if ($cek_sewa_berhasil) {
            return redirect()->back()->with('sewa-berhasil', 'Anda sedang menyewa art ini');
        }

        $cek_status_art = Art::where('id', $request->id_art)->where('status', 'Tidak Tersedia')->first();

        if ($cek_status_art) {
            return redirect()->back()->with('status-art', 'Art tidak tersedia');
        }


        $id_art = $request->id_art;
        $id_user = Auth::user()->id;

        $penyewaan = new Penyewaan;
        $penyewaan->id_art = $id_art;
        $penyewaan->id_user = $id_user;
        $penyewaan->tanggal = date('Y-m-d');
        $penyewaan->status = 'Proses';
        $penyewaan->keterangan = 'Menunggu konfirmasi dari admin';
        $penyewaan->save();

        return redirect()->back()->with('sewa', 'Data berhasil ditambahkan');
    }

    public function tidakjadisewa($id)
    {
        $penyewaan = Penyewaan::find($id);
        $penyewaan->status = 'Tidak Jadi';
        $penyewaan->keterangan = 'Penyewaan dibatalkan';
        $penyewaan->save();

        return redirect()->back()->with('tidak-jadi-sewa', 'Data berhasil dihapus');
    }

    public function penyewaan()
    {
        $penyewaan = Penyewaan::with('art')->where('id_user', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('user.pages.penyewaan', [
            'penyewaan' => $penyewaan
        ]);
    }
}
