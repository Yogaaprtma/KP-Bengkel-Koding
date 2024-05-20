<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.daftarDosen');
    }

    public function pageAdd()
    {
        return view('mahasiswa.form_tambahPengajuan');
    }

    public function create(Request $request)
    {
        // Misalnya, Anda menetapkan ID Mahasiswa secara statis
        $mhs_id = 1; // ID Mahasiswa yang valid

        $pengajuan = Pengajuan::create([
            'judul' => $request->judul,
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'bidang_kajian' => $request->bidang_kajian,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'catatan' => $request->catatan,
            'mhs_id' => $mhs_id, // Pastikan 'mhs_id' diisi dengan ID Mahasiswa yang valid
        ]);

        return redirect()->route('draft_pengajuan', ['id' => $pengajuan->id])->with('success', 'Draft created successfully.');
    }

    public function draft($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('mahasiswa.form_draftPengajuan', compact('pengajuan'));
    }

    public function edit(Request $request, Pengajuan $pengajuan)
    {
        $pengajuan->update([
            'judul' => $request->judul,
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'bidang_kajian' => $request->bidang_kajian,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('draft_pengajuan', ['id' => $pengajuan->id])->with('success', 'Data Mahasiswa berhasil diperbarui.');
    }

    public function delete(Pengajuan $pengajuan)
    {
        $pengajuan->delete();

        return redirect()->route('tambah_pengajuan')->with('success', 'Data Mahasiswa berhasil dihapus.');
    }

    public function ajukan($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        // $pengajuan->update(['status' => 'Disetujui']);
    
        return redirect()->route('list_mahasiswa')->with('success', 'Pengajuan berhasil diajukan.');
    }

    public function dashboard()
    {
        return view('mahasiswa.home');
    }

    public function history()
    {
        $riwayat_pengajuan = Pengajuan::all();
        $status = $riwayat_pengajuan->contains('status', 'Diterima') ? 'Diterima' : 'Ditolak';
        return view('mahasiswa.riwayat', compact('riwayat_pengajuan', 'status'));
    }

    public function hasil()
    {
        return view('mahasiswa.review');
    }

    public function tolak()
    {
        return view('mahasiswa.rejected');
    }

    public function bio()
    {
        return view('mahasiswa.profilMhs');
    }
}
