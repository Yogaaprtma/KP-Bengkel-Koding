@extends('layout.sidebar')
@extends('layout.template')
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ route('profile') }}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-left">
                <h1 class="pt-2"><img src="{{ asset('assets/udinus.jpg') }}" alt="buttonAksi" width="60px">
                    Bengkel Koding
                </h1>
                <h2 class="rev">
                    
                </h2>
            </div>
            
            <!-- START FORM -->
            <div class="container mt-5">
                <h4>Profil Pemagang</h4>
                <form action='' method='post'>
                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nama' id="nama"  placeholder="Masukkan Nama Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='posisi' id="posisi" placeholder="Masukkan Posisi Kerja Praktek Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Departemen Kerja Praktek Anda">
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
                    <!-- AKHIR FORM -->

                                <!-- START FORM -->
            <div class="container mt-5">
                <h4>Detail Penilaian</h4>
                <form action='' method='post'>
                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Deskripsi Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nama' id="nama"  placeholder="Masukkan Nama Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="posisi" class="col-sm-2 col-form-label">Prestasi dan Kontribusi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='posisi' id="posisi" placeholder="Masukkan Prestasi dan Kontribusi Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Keterampilan dan Kemampuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Keterampilan dan Kemampuan Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Kerjasama Dan Keterlibatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Kerjasama Dan Keterlibatan Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Komentar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Komentar Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Departemen Kerja Praktek Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Perkembangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Perkembangan Kerja Praktek Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Kesimpulan dan Saran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Kesimpulan dan Saran Anda">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departemen" class="col-sm-2 col-form-label">Score</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='departemen' id="departemen" placeholder="Masukkan Score Anda">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukan File</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                          </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary mt-5 mb-3" style="width: 100px" type="simpan">Simpan</button>
                            <button class="btn btn-danger mt-5 mb-3"style="width: 100px" type="batal">Batal</button>
                          </div>
                        </div>
                    </div>
                </form>
                    <!-- AKHIR FORM -->
        
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js1/script.js') }}"></script>
