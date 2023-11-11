<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Dosen Wali</title>
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
        <span class="navbar-brand">Dosen Wali</span>
    </nav>

    <div class="sidenav" id="mySidenav">
        <h2 style="color: #fff; text-align: center; padding: 15px;">Dashboard Dosen Wali</h2>
        <a href="javascript:void(0);" onclick="showFeature('dashboard')"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="javascript:void(0);" onclick="showFeature('users')"><i class="fa fa-user"></i> Users</a>
        <a href="javascript:void(0);" onclick="showFeature('reports')"><i class="fa fa-file"></i> Akademik</a>
        <a href="javascript:void(0);" onclick="showFeature('settings')"><i class="fa fa-cog"></i> Settings</a>
    </div>

    <div class="content" id="content">
        <div id="dashboard" class="feature-content">
            <div class="container mt-5">
                <h2 class="mb-4">Daftar Mahasiswa</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456</td>
                            <td>John Doe</td>
                            <td>
                                <a href="javascript:void(0);" onclick="showVerification('123456')">Cek Progres Studi</a>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain untuk mahasiswa lainnya -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="verification" class="feature-content" style="display: none;">
            <div class="container mt-5">
                <h2 class="mb-4">Verifikasi Progress Studi Mahasiswa</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>IRS</th>
                            <th>KHS</th>
                            <th>PKL</th>
                            <th>Skripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456</td>
                            <td>John Doe</td>
                            <td>IRS.pdf</td>
                            <td>KHS.pdf</td>
                            <td>PKL.pdf</td>
                            <td>Skripsi.pdf</td>
                            <td>
                                <button class="btn btn-success">Approve</button>
                                <button class="btn btn-danger">Tolak</button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain untuk mahasiswa lainnya -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="users" class="feature-content">
            <div class="container mt-5">
                <h2 class="mb-4">Pencarian Progress Studi Mahasiswa</h2>
                <form action="search.php" method="get">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>

                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>

                <!-- Hasil pencarian akan ditampilkan di sini -->
                <div class="mt-4">
                    <h4>Hasil Pencarian</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Semester</th>
                                <th>Progress Studi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Tambahkan data hasil pencarian di sini -->
                            <tr>
                                <td>123456</td>
                                <td>John Doe</td>
                                <td>3</td>
                                <td><a href="progress.php">Lihat Progress</a></td>
                            </tr>
                            <!-- Tambahkan baris lain sesuai hasil pencarian -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="reports" class="feature-content">

            <div class="container mt-5">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="irs-tab" data-toggle="tab" href="#irs">IRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="khs-tab" data-toggle="tab" href="#khs">KHS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pkl-tab" data-toggle="tab" href="#pkl">PKL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skripsi-tab" data-toggle="tab" href="#skripsi">Skripsi</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabsContent">
                    <div class="tab-pane fade show active" id="profile">
                        <!-- <h2 class="mt-5">Profil Mahasiswa</h2> -->
                        <div class="container mt-5">
                            <h2>Profil Mahasiswa</h2>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{URL::asset('images/image1.jpg')}}" alt="Foto Mahasiswa" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Risqy</h3>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>NIM:</td>
                                                        <td>123456</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat:</td>
                                                        <td>Jl. Contoh Alamat No. 123</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kab/Kota:</td>
                                                        <td>Contoh Kota</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Propinsi:</td>
                                                        <td>Contoh Propinsi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Angkatan:</td>
                                                        <td>2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jalur Masuk:</td>
                                                        <td>SNMPTN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email:</td>
                                                        <td>mahasiswa@email.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Handphone:</td>
                                                        <td>081234567890</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status:</td>
                                                        <td>Aktif</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="irs">

                        <div class="container mt-5">
                            <h4>Verifikasi IRS</h4>

                            <!-- Tabel IRS -->
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Semester</th>
                                        <th>Jumlah SKS</th>
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
                                        <td><a href="irs_file.pdf" target="_blank">IRS.pdf</a></td>
                                        <td>Belum divalidasi</td>
                                        <td>
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Tolak</button>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris lainnya sesuai data IRS yang perlu divalidasi -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="khs">

                        <div class="container mt-5">
                            <h4>Verifikasi KHS</h4>

                            <!-- Tabel KHS -->
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Semester</th>
                                        <th>Jumlah SKS</th>
                                        <th>File KHS</th>
                                        <th>Status Validasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Semester 1</td>
                                        <td>20</td>
                                        <td><a href="khs_file.pdf" target="_blank">KHS.pdf</a></td>
                                        <td>Belum divalidasi</td>
                                        <td>
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Tolak</button>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris lainnya sesuai data IRS yang perlu divalidasi -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pkl">


                        <div class="container mt-5">
                            <h4>Verifikasi PKL</h4>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <div class="col-md-4">
                                            <img src="{{URL::asset('images/image1.jpg')}}" alt="Foto Mahasiswa" class="img-fluid">
                                        </div> -->
                                        <div class="col-md-8">
                                            <h3>Risqy</h3>
                                            <h3>24060121100000</h3>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Berkas PKL:</td>
                                                        <td>PKL.pdf</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai:</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <!-- Tambahkan elemen data PKL sesuai kebutuhan -->
                                                    <tr>
                                                        <td>Status PKL:</td>
                                                        <td>Lulus</td>
                                                    </tr>
                                                    <!-- Tambahkan elemen data validasi PKL sesuai kebutuhan -->

                                                </tbody>
                                            </table>
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Tolak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skripsi">
                        <div class="container mt-5">
                            <h4>Verifikasi Skripsi</h4>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <div class="col-md-4">
                                            <img src="{{URL::asset('images/image1.jpg')}}" alt="Foto Mahasiswa" class="img-fluid">
                                        </div> -->
                                        <div class="col-md-8">
                                            <h3>Risqy</h3>
                                            <h3>24060121100000</h3>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Berkas Skripsi:</td>
                                                        <td>Skripsi.pdf</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai:</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <!-- Tambahkan elemen data Skripsi sesuai kebutuhan -->
                                                    <tr>
                                                        <td>Status Skripsi:</td>
                                                        <td>Lulus</td>
                                                    </tr>
                                                    <!-- Tambahkan elemen data validasi Skripsi sesuai kebutuhan -->

                                                </tbody>
                                            </table>
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Tolak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                $('#myTabs a').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
            </script>
        </div>

        <div id="settings" class="feature-content">
            <h1>Welcome to the Operator Dashboard - Settings</h1>
            <p>This is the Settings feature.</p>
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

        function showVerification(nim) {
            showFeature('verification');
        }
    </script>

</body>

</html>