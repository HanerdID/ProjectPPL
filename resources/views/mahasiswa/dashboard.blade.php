<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Atur gaya kustom di sini */
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: -250px;
            /* Semula sidenav tersembunyi */
            background-color: #333;
            padding-top: 20px;
            transition: left 0.3s;
        }

        .sidenav a {
            padding: 10px 15px;
            text-align: left;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
        }

        .sidenav a:hover {
            background-color: #555;
        }

        .sidenav a:active {
            border: 1px solid;
            background-color: #000;
        }

        .content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .sidenav.active {
            left: 0;
            /* Menampilkan sidenav saat active */
        }

        .content.active {
            margin-left: 250px;
            /* Geser konten saat active */
        }

        .navbar-toggler {
            color: #fff;
        }

        .navbar-toggle-btn {
            padding: 5px 15px;
            font-size: 24px;
            color: white;
            cursor: pointer;
            z-index: 2;
        }

        .navbar.active {
            margin-left: 250px;
            transition: margin-left 0.3s;
        }

        .navbar-brand {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-toggle-btn" id="toggleSidenav">
            <i class="fa fa-bars"></i>
        </div>
        <span class="navbar-brand">Mahasiswa</span>
    </nav>

    <div class="sidenav" id="mySidenav">
        <h2 style="color: #fff; text-align: center; padding: 15px;">Dashboard Mahasiswa</h2>
        <a href="javascript:void(0);" onclick="showFeature('dashboard')"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="javascript:void(0);" onclick="showFeature('users')"><i class="fa fa-user"></i> Users</a>
        <a href="javascript:void(0);" onclick="showFeature('reports')"><i class="fa fa-file"></i> Reports</a>
        <a href="javascript:void(0);" onclick="showFeature('settings')"><i class="fa fa-cog"></i> Settings</a>
        <a href="javascript:void(0);" onclick="showFeature('irs')"><i class="fa fa-cog"></i> IRS</a>
        <a href="javascript:void(0);" onclick="showFeature('khs')"><i class="fa fa-cog"></i> KHS</a>
        <a href="javascript:void(0);" onclick="showFeature('pkl')"><i class="fa fa-cog"></i> PKL</a>
        <a href="javascript:void(0);" onclick="showFeature('skripsi')"><i class="fa fa-cog"></i> Skripsi</a>
    </div>

    <div class="content" id="content">
        <div id="dashboard" class="feature-content">
            <div class="container mt-5">
                <div class="row">
                    <!-- Flexbox 1 -->
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center border p-3">
                            <img src="{{URL::asset('images/image1.jpg')}}" alt="Avatar" class="img-fluid rounded-circle" style="width: 150px;">
                            <div class="border p-3 mt-3">
                                <p class="mb-0"><strong>Nama:</strong> John Doe</p>
                                <p class="mb-0"><strong>NIM:</strong> 123456</p>
                                <p class="mb-0"><strong>Email:</strong> john.doe@example.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Flexbox 2 -->
                    <div class="col-md-8">
                        <div class="d-flex flex-column">
                            <!-- Box 1 -->
                            <div class="bg-primary text-white p-3 mb-3">
                                <h4>Profile</h4>
                            </div>

                            <!-- Box 2 -->
                            <div class="bg-secondary text-white p-3 mb-3">
                                <h4>Akademik</h4>
                            </div>

                            <!-- Box 3 -->
                            <div class="bg-info text-white p-3">
                                <h4>Generate Akun</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="users" class="feature-content">
            <div class="container">
                <h2 class="mt-5 text-center">Update Data Pribadi Mahasiswa</h2>

                <div class="row mt-4">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Data Pribadi</h4>

                                <!-- Form untuk update data pribadi -->
                                <form action="update-data.php" method="post">
                                    <div class="form-group">
                                        <label for="nim">NIM:</label>
                                        <input type="text" class="form-control" id="nim" name="nim" value="123456" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="angkatan">Angkatan:</label>
                                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="2022" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="doswal">Dosen Wali:</label>
                                        <input type="text" class="form-control" id="doswal" name="doswal" value="Bopacc Qastelo">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="reports" class="feature-content">
            <div class="container mt-5">
                <div class="col-mb-3">
                    <h1>John Doe</h1>
                    <h3>NIM: 123456</h3>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label for="semester">Pilih Semester:</label>
                        <select class="form-control" id="semester">
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <!-- Tambahkan opsi semester lainnya -->
                        </select>
                    </div>
                </div>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Semester</th>
                            <th>Jumlah SKS yang Diambil</th>
                            <th>File IRS</th>
                            <th>Status Validasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Semester 1</td>
                            <td>20</td>
                            <td><a href="#">IRS.pdf</a></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#detailModal">Detail</button>
                                <a href="download.php?file=IRS.pdf" class="btn btn-success">Download</a>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain untuk semester lainnya -->
                    </tbody>
                </table>
            </div>

            <!-- Modal untuk menampilkan file PDF -->
            <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel">Detail File PDF</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <embed src="IRS.pdf" type="application/pdf" width="100%" height="600px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="irs" class="feature-content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 class="mb-4">Input IRS</h2>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="semester">Semester Aktif</label>
                                <select class="form-control" id="semester">
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                    <option value="9">Semester 9</option>
                                    <option value="10">Semester 10</option>
                                    <option value="11">Semester 11</option>
                                    <option value="12">Semester 12</option>
                                    <option value="13">Semester 13</option>
                                    <option value="14">Semester 14</option>
                                    <!-- Tambahkan opsi semester lainnya -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sks">Total SKS</label>
                                <input type="number" class="form-control" id="sks" name="sks" placeholder="Contoh: 18" required>
                            </div>

                            <div class="form-group">
                                <label for="irsFile">Unggah File PDF IRS</label>
                                <input type="file" class="form-control-file" id="irsFile" name="irsFile" accept=".pdf" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="khs" class="feature-content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 class="mb-4">Form Entry KHS</h2>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="semester">Semester Aktif</label>
                                <input type="text" class="form-control" id="semester" name="semester" placeholder="Contoh: Ganjil 2023" required>
                            </div>

                            <div class="form-group">
                                <label for="sksSemester">Jumlah SKS Semester</label>
                                <input type="number" class="form-control" id="sksSemester" name="sksSemester" placeholder="Contoh: 18" required>
                            </div>

                            <div class="form-group">
                                <label for="sksKumulatif">Jumlah SKS Kumulatif</label>
                                <input type="number" class="form-control" id="sksKumulatif" name="sksKumulatif" placeholder="Contoh: 120" required>
                            </div>

                            <div class="form-group">
                                <label for="ipSemester">IP Semester</label>
                                <input type="number" step="0.01" class="form-control" id="ipSemester" name="ipSemester" placeholder="Contoh: 3.75" required>
                            </div>

                            <div class="form-group">
                                <label for="ipKumulatif">IP Kumulatif</label>
                                <input type="number" step="0.01" class="form-control" id="ipKumulatif" name="ipKumulatif" placeholder="Contoh: 3.50" required>
                            </div>

                            <div class="form-group">
                                <label for="khsScan">Unggah Scan KHS (PDF)</label>
                                <input type="file" class="form-control-file" id="khsScan" name="khsScan" accept=".pdf" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div id="pkl" class="feature-content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 class="mb-4">Input PKL</h2>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="statusPkl">Status PKL</label>
                                <select class="form-control" id="statusPkl" name="statusPkl" required>
                                    <option value="belum ambil">Belum Ambil</option>
                                    <option value="sedang ambil">Sedang Ambil</option>
                                    <option value="lulus">Lulus</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nilaiPkl">Nilai PKL (Jika Lulus)</label>
                                <input type="number" step="0.01" class="form-control" id="nilaiPkl" name="nilaiPkl" placeholder="Contoh: 85" disabled>
                            </div>

                            <div class="form-group">
                                <label for="beritaAcaraPkl">Unggah Scan Berita Acara Seminar PKL (PDF)</label>
                                <input type="file" class="form-control-file" id="beritaAcaraPkl" name="beritaAcaraPkl" accept=".pdf" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="skripsi" class="feature-content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 class="mb-4">Entry Skripsi</h2>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="statusSkripsi">Status Skripsi</label>
                                <select class="form-control" id="statusSkripsi" name="statusSkripsi" required>
                                    <option value="belum ambil">Belum Ambil</option>
                                    <option value="sedang ambil">Sedang Ambil</option>
                                    <option value="lulus">Lulus</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nilaiSkripsi">Nilai Skripsi (Jika Lulus)</label>
                                <input type="number" step="0.01" class="form-control" id="nilaiSkripsi" name="nilaiSkripsi" placeholder="Contoh: 85" disabled>
                            </div>


                            <div class="form-group">
                                <label for="tanggalLulusSidang">Tanggal Lulus/Sidang</label>
                                <input type="date" class="form-control" id="tanggalLulusSidang" name="tanggalLulusSidang" required>
                            </div>

                            <div class="form-group">
                                <label for="lamaStudi">Lama Studi dalam Semester</label>
                                <input type="number" class="form-control" id="lamaStudi" name="lamaStudi" placeholder="Contoh: 8" required>
                            </div>

                            <div class="form-group">
                                <label for="beritaAcaraSidang">Unggah Scan Berita Acara Sidang Skripsi (PDF)</label>
                                <input type="file" class="form-control-file" id="beritaAcaraSidang" name="beritaAcaraSidang" accept=".pdf" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="settings" class="feature-content">
            <div class="container mt-5">
                <div class="col-mb-3">
                    <h1>John Doe</h1>
                    <h3>NIM: 123456</h3>
                </div>
                <table class="table table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Semester</th>
                            <th>Jumlah SKS yang Diambil</th>
                            <th>File IRS</th>
                            <th>Status Validasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Semester 1</td>
                            <td>20</td>
                            <td><a href="#">IRS.pdf</a></td>
                            <td>Approved</td>
                            <td>
                                <button class="btn btn-success">Detail</button>
                                <button class="btn btn-primary">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Semester 2</td>
                            <td>24</td>
                            <td><a href="#">IRS.pdf</a></td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-success">Detail</button>
                                <button class="btn btn-primary">Download</button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain untuk semester lainnya -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        // Tampilkan konten Dashboard secara otomatis saat halaman dimuat
        window.onload = function() {
            showFeature('dashboard');
        };

        document.getElementById('toggleSidenav').addEventListener('click', function() {
            document.getElementById('mySidenav').classList.toggle('active');
            document.getElementsByClassName('content')[0].classList.toggle('active');
            document.getElementsByClassName('navbar')[0].classList.toggle('active');
        });

        function showFeature(feature) {
            const featureContents = document.querySelectorAll('.feature-content');
            featureContents.forEach(content => {
                content.style.display = 'none';
            });

            const contentToShow = document.getElementById(feature);
            contentToShow.style.display = 'block';
        }
    </script>

</body>

</html>