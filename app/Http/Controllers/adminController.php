<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function mhsBimbingan()
    {
        $pengajuans = Pengajuan::with('mahasiswa')->get();
        return view('admin.bimbinganMhs',compact('pengajuans'));
    }
}
