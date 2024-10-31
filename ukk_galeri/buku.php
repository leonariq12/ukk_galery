<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            filter: brightness(0.5);
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }
        .album-card {
            margin-bottom: 20px;
        }
        .album-image {
            border-radius: 15px 15px 0 0;
            height: 200px;
            object-fit: cover;
        }
        .btn-custom {
            background-color: #ff4081;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e91e63;
        }
        .form-control {
            border-radius: 5px;
        }
        .card-title {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<video autoplay muted loop>
    <source src="assets/video/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Album</h1>
    
    <div class="card mb-4 profile-card">
        <div class="card-body">
            <h3 class="text-light">Tambah Album Baru</h3>
            <form id="albumForm">
                <div class="form-group">
                    <label for="albumName" class="text-light">Nama Album</label>
                    <input type="text" class="form-control" id="albumName" placeholder="Masukkan nama album" required>
                </div>
                <div class="form-group">
                    <label for="albumImage" class="text-light">Unggah Gambar Album</label>
                    <input type="file" class="form-control" id="albumImage" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-custom">Tambah Album</button>
            </form>
        </div>
    </div>
    
    <div class="row" id="albumList">
        <!-- Album akan ditambahkan di sini menggunakan JavaScript -->
    </div>
</div>

<script>
    const albumForm = document.getElementById('albumForm');
    const albumList = document.getElementById('albumList');

    albumForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman

        const albumName = document.getElementById('albumName').value;
        const albumImageInput = document.getElementById('albumImage');

        // Menggunakan FileReader untuk membaca file gambar
        const file = albumImageInput.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const albumCard = document.createElement('div');
            albumCard.classList.add('col-md-4', 'album-card');
            albumCard.innerHTML = `
                <div class="card">
                    <img src="${e.target.result}" class="card-img-top album-image" alt="${albumName}">
                    <div class="card-body">
                        <h5 class="card-title">${albumName}</h5>
                        <button class="btn btn-danger btn-sm delete-button">Hapus Album</button>
                    </div>
                </div>
            `;

            albumCard.querySelector('.delete-button').addEventListener('click', function() {
                albumList.removeChild(albumCard);
            });

            albumList.appendChild(albumCard);
            albumForm.reset();
        };

        // Memulai pembacaan file
        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
