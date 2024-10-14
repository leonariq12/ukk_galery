<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
    <h1 class="text-center mb-4">Daftar Album</h1>
    
    <!-- Form untuk menambahkan album -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="text-dark">Tambah Album Baru</h3>
            <form id="albumForm">
                <div class="form-group">
                    <label for="albumName" class="text-dark">Nama Album</label>
                    <input type="text" class="form-control" id="albumName" placeholder="Masukkan nama album" required>
                </div>
                <div class="form-group">
                    <label for="albumImage" class="text-dark">URL Gambar Album</label>
                    <input type="url" class="form-control" id="albumImage" placeholder="Masukkan URL gambar album" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Album</button>
            </form>
        </div>
    </div>
    
    <!-- Tempat untuk menampilkan album -->
    <div class="row" id="albumList">
        <!-- Album akan ditambahkan di sini menggunakan JavaScript -->
    </div>
</div>

<script>
    // Ambil elemen form dan daftar album
    const albumForm = document.getElementById('albumForm');
    const albumList = document.getElementById('albumList');

    // Event listener untuk menambah album
    albumForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil nilai dari form
        const albumName = document.getElementById('albumName').value;
        const albumImage = document.getElementById('albumImage').value;

        // Buat elemen baru untuk album
        const albumCard = document.createElement('div');
        albumCard.classList.add('col-md-4', 'album-card');
        albumCard.innerHTML = `
            <div class="card">
                <img src="${albumImage}" class="card-img-top album-image" alt="${albumName}">
                <div class="card-body">
                    <h5 class="card-title">${albumName}</h5>
                    <button class="btn btn-danger btn-sm delete-button">Hapus Album</button>
                </div>
            </div>
        `;

        // Tambahkan event listener untuk tombol hapus
        albumCard.querySelector('.delete-button').addEventListener('click', function() {
            albumList.removeChild(albumCard);
        });

        // Tambahkan album ke daftar
        albumList.appendChild(albumCard);

        // Reset form setelah submit
        albumForm.reset();
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
