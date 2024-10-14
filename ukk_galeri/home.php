<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-image: url('assets/img/bg.jpg'); /* Ganti dengan path gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Mengubah warna teks agar kontras dengan latar belakang */
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang setengah transparan */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        .btn-custom {
            background-color: #ff4081; /* Warna tombol khusus */
            border: none;
        }
        .btn-custom:hover {
            background-color: #e91e63; /* Warna tombol saat hover */
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="content">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-sky-blue text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
                        ?>
                        <h5>Total Kategori</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-turquoise-green text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM album"));
                        ?>
                        <h5>Total Album</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan"));
                        ?>
                        <h5>Total Komentar</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light-gray text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                        ?>
                        <h5>Total User</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-lg" style="border-radius: 10px; overflow: hidden;">
            <div class="card-header" style="background-color: #007bff; color: white; text-align: center; font-size: 1.5em; padding: 15px;">
                Profil Pengguna
            </div>
            <div class="card-body" style="background-color: #f8f9fa;">
                <table class="table table-bordered">
                    <tr>
                        <td width="200"><strong>Nama</strong></td>
                        <td width="1">:</td>
                        <td><?php echo $_SESSION['user']['nama']; ?></td>
                    </tr>
                    <tr>
                        <td width="200"><strong>Level User</strong></td>
                        <td width="1">:</td>
                        <td><?php echo $_SESSION['user']['level']; ?></td>
                    </tr>
                    <tr>
                        <td width="200"><strong>Tanggal Login</strong></td>
                        <td width="1">:</td>
                        <td><?php echo date('d-m-Y'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
