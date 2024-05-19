<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    public function list()
    {
        $pengajuans = Pengajuan::with('mahasiswa')->get();
        return view('dosen.jumlahBimbingan', compact('pengajuans'));
    }

    public function rinci(Pengajuan $pengajuan)
    {
        return view('dosen.rincian', compact('pengajuan'));
    }

    public function terima(Request $request, Pengajuan $pengajuan)
    {
        $pengajuan->status = 'Diterima';
        $pengajuan->save();

        return redirect()->route('list_mahasiswa')->with('success', 'Pengajuan diterima.');
    }

    public function tolak(Request $request, Pengajuan $pengajuan)
    {
        $pengajuan->status = 'Ditolak';
        $pengajuan->save();

        return redirect()->route('list_mahasiswa')->with('error', 'Pengajuan ditolak.');
    }
}
