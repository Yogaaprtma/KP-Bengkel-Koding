<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Daftar Dosen</title>
</head>
<body>
    <div class="container mt-5 pt-3">
        <div class="row ms-1">
            <div class="col-auto bg-info pe-0"></div>
            <div class="col bg-light">
                <p class="pt-4">Klik tombol <img src="{{ asset('assets/buttonAksi.jpg') }}" alt="buttonAksi" width="30px"> untuk memilih dosen pembimbing.</p>
            </div>
        </div>
        <div class="col mt-5">
            <h3>Daftar Dosen</h3>
            <p class="pt-4 fs-4">Berikut ini adalah daftar dosen.</p>
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <th class="bg-primary pt-4" colspan="4">
                        <form class="row g-3 justify-content-end">
                            <div class="col-auto me-3">
                                <div class="input-group">
                                    <input class="mb-2 form-control" type="text" name="search" id="search" placeholder="Search..." style="height: 100%">
                                    <div style="position: absolute; right: 8px; top: 40%; transform: translateY(-50%);">
                                        <img src="{{ asset('assets/searchLogo.jpg') }}" alt="buttonSearch" width="20" style="height: 20px">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </th>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">1</th>
                        <td class="text-start">0606107401</td>
                        <td class="text-start">YANI PARTI ASTUTI, S.Si, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="text-start">0613128502</td>
                        <td class="text-start">DEFRI KURNIAWAN, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="text-start">0618038701</td>
                        <td class="text-start">ADHITYA NUGRAHA, S.Kom, M.CS</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="text-start">0625078504</td>
                        <td class="text-start">ARDYTHA LUTHFIARTA, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td class="text-start">0612029001</td>
                        <td class="text-start">EGIA ROSI SUBHIYAKTO, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td class="text-start">0615127404</td>
                        <td class="text-start">AJIB SUSANTO, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td class="text-start">0616088801</td>
                        <td class="text-start">DANANG WAHYU UTOMO, M.Kom</td>
                        <td>
                            <button type="button" onclick="selectLecturer(this)" class="btn border-0">
                                <img src="assets/buttonAksi.jpg" alt="buttonAksi" width="30px">
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav class="mt-4 d-flex justify-content-end" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div id="selected-lecturer-section" style="display: none;">
            <div class="row ms-1 mt-4">
                <div class="col-auto bg-info pe-0"></div>
                <div class="col bg-light">
                    <p class="pt-4">Dosen yang dipilih</p>
                </div>
            </div>
            <div class="col mt-5" id="selected-lecturer">
                <!-- Data dosen yang dipilih akan ditampilkan di sini -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Fungsi untuk menampilkan data dosen yang dipilih
        function selectLecturer(button) {
            // Mendapatkan data dosen dari baris tempat tombol ditekan
            var row = button.parentNode.parentNode;
            var nidn = row.cells[1].textContent;
            var nama = row.cells[2].textContent;
    
            // Buat objek untuk menyimpan data dosen yang dipilih
            var selectedLecturer = {
                nidn: nidn,
                nama: nama
            };
    
            // Simpan data dosen yang dipilih ke penyimpanan lokal (localStorage)
            localStorage.setItem('selectedLecturer', JSON.stringify(selectedLecturer));
    
            // Tampilkan data dosen yang dipilih
            displaySelectedLecturer(selectedLecturer);
        }
    
        // Fungsi untuk menampilkan data dosen yang dipilih
        function displaySelectedLecturer(selectedLecturer) {
            // Buat sebuah elemen tabel untuk data dosen yang dipilih
            var selectedLecturerTable = `
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td class="text-start">${selectedLecturer.nidn}</td>
                            <td class="text-start">${selectedLecturer.nama}</td>
                            <td>
                                <button type="button" onclick="deselectLecturer()" class="btn border-0">
                                    <img src="assets/deleteButton.jpg" alt="buttonAksi" width="50px">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('page_tambah_pengajuan') }}" class="btn btn-primary mt-3 mb-3 me-5" style="width: 100px">Lanjutkan</a>
            `;
    
            // Tampilkan bagian "Dosen yang dipilih" dan masukkan tabel data dosen yang dipilih ke dalam div dengan id "selected-lecturer"
            document.getElementById('selected-lecturer-section').style.display = 'block';
            document.getElementById('selected-lecturer').innerHTML = selectedLecturerTable;
        }
    
        // Fungsi untuk menyembunyikan data dosen yang dipilih
        function deselectLecturer() {
            // Hapus data dosen yang dipilih dari penyimpanan lokal
            localStorage.removeItem('selectedLecturer');
    
            // Sembunyikan bagian "Dosen yang dipilih"
            document.getElementById('selected-lecturer-section').style.display = 'none';
        }
    
        // Fungsi untuk memeriksa apakah ada data dosen yang dipilih saat halaman dimuat
        window.onload = function() {
            var selectedLecturerJson = localStorage.getItem('selectedLecturer');
            if (selectedLecturerJson) {
                var selectedLecturer = JSON.parse(selectedLecturerJson);
                displaySelectedLecturer(selectedLecturer);
            }
        };
    </script>
</body>
</html>