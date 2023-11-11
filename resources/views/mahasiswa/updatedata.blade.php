<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Operator</title>
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
        <span class="navbar-brand">Operator</span>
    </nav>

    <div class="sidenav" id="mySidenav">
        <h2 style="color: #fff; text-align: center; padding: 15px;">Admin Dashboard</h2>
        <a href="javascript:void(0);" onclick="showFeature('dashboard')"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="javascript:void(0);" onclick="showFeature('users')"><i class="fa fa-user"></i> Users</a>
        <a href="javascript:void(0);" onclick="showFeature('reports')"><i class="fa fa-file"></i> Reports</a>
        <a href="javascript:void(0);" onclick="showFeature('settings')"><i class="fa fa-cog"></i> Settings</a>
    </div>

    <div class="content" id="content">
        <div id="dashboard" class="feature-content">
            <div class="container mt-5">
                <h2 class="mb-4">Update Data Pribadi Mahasiswa</h2>
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="123456" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>

                    <div class="form-group">
                        <label for="kabKota">Kab/Kota</label>
                        <select class="form-control" id="kabKota" name="kabKota" required>
                            <!-- Opsi berdasarkan data dari dukcapil -->
                            <option value="kabkota1">Kab/Kota 1</option>
                            <option value="kabkota2">Kab/Kota 2</option>
                            <!-- Tambahkan opsi lain sesuai data dukcapil -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="propinsi">Propinsi</label>
                        <select class="form-control" id="propinsi" name="propinsi" required>
                            <!-- Opsi berdasarkan data dari dukcapil -->
                            <option value="propinsi1">Propinsi 1</option>
                            <option value="propinsi2">Propinsi 2</option>
                            <!-- Tambahkan opsi lain sesuai data dukcapil -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="2023" readonly>
                    </div>

                    <div class="form-group">
                        <label for="jalurMasuk">Jalur Masuk</label>
                        <select class="form-control" id="jalurMasuk" name="jalurMasuk" required>
                            <option value="snmptn">SNMPTN</option>
                            <option value="sbmptn">SBMPTN</option>
                            <option value="mandiri">Mandiri</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="handphone">Handphone</label>
                        <input type="text" class="form-control" id="handphone" name="handphone" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="aktif">Aktif</option>
                            <option value="cuti">Cuti</option>
                            <option value="mangkir">Mangkir</option>
                            <option value="do">DO</option>
                            <option value="undurDiri">Undur Diri</option>
                            <option value="lulus">Lulus</option>
                            <option value="meninggal">Meninggal Dunia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="foto">Unggah Foto Mahasiswa</label>
                        <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
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
    </script>

</body>

</html>