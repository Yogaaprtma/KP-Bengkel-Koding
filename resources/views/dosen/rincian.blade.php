<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Pengajuan KP</title>
</head>
<body>
    <div class="container mt-5">
        <h4>Pengajuan Bimbingan KP</h4>
        <div class="row mt-5">
            <form action="" method="POST">
                <div class="row">       
                    <div class="col-2 text-start">
                        <label for="judul" class="form-label">Judul</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="judul" name="judul" placeholder="Masukkan Judul Kerja Praktek Anda" value="{{ $pengajuan->judul }}" required disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 text-start">
                        <label for="perusahaan" class="form-label">Perusahaan</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="perusahaan" name="perusahaan" placeholder="Masukkan Perusahaan Kerja Praktek Anda" value="{{ $pengajuan->perusahaan }}" required disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 text-start">
                        <label for="posisi" class="form-label">Posisi</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="posisi" name="posisi" placeholder="Masukkan Posisi Kerja Praktek Anda" value="{{ $pengajuan->posisi }}" required disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 text-start">
                        <label for="posisi" class="form-label">Bidang Kajian</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="posisi" name="posisi" placeholder="Masukkan Bidang Kajian Kerja Praktek Anda" value="{{ $pengajuan->bidang_kajian }}" required disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 text-start">
                        <label for="keyword" class="form-label">Keyword</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="keyword" name="keyword" placeholder="Masukkan Keyword Kerja Praktek Anda" value="{{ $pengajuan->keyword }}" required disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 text-start">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                    </div>
                    <div class="col-10">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="6" placeholder="Masukkan Deskripsi Kerja Praktek Anda" required disabled>{{ $pengajuan->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="row mt-4 mb-5">
                    <div class="col-2 text-start">
                        <label for="catatan" class="form-label">Catatan</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" id="catatan" name="catatan" placeholder="Masukkan Catatan Kerja Praktek Anda" value="{{ $pengajuan->catatan }}" required disabled>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-1 me-4">
                    <form action="{{ route('terima_pengajuan', ['pengajuan' => $pengajuan->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-5 mb-3" style="width: 100px">Terima</button>
                    </form>
                </div>
                <div class="col">
                    <form action="{{ route('tolak_pengajuan', ['pengajuan' => $pengajuan->id]) }}" method="POST">
                    {{-- <form action="{{ route('halaman_alasan', ['pengajuan' => $pengajuan->id]) }}" method="POST"> --}}
                        @csrf
                        {{-- <button type="submit" class="btn btn-danger mt-5 mb-3" style="width: 100px">Tolak</button> --}}
                        <a href="{{ route('halaman_alasan') }}" class="btn btn-danger mt-5 mb-3" style="width: 100px">Tolak</a>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
