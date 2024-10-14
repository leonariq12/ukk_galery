<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

<div class="container mt-4">
    <h1 class="mt-4 text-center">Profile</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 profile-card">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="assets/img/anime.jpg" class="img-fluid rounded-circle" alt="Gambar Profil">
                </div>
                <div class="col-md-8">
                    <h2>Therry Leon Henry</h2>
                    <h3>XII PPLG 3</h3>
                    <h3>SMKN 4 BOGOR</h3>
                    <p><strong>Email:</strong> leonhenry1601@gmail.com</p>
                    <h3>Media Sosial</h3>
                    <a href="https://www.instagram.com/1eon.06/" class="btn btn-custom mr-2">Instagram</a>
                    <a href="https://www.youtube.com/@leonhenry7643" class="btn btn-custom">Youtube</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
