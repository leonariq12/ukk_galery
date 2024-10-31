<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            color: white; /* Mengubah warna teks menjadi putih */
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
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }
        .btn-custom {
            background-color: #ff4081; 
            border: none;
        }
        .btn-custom:hover {
            background-color: #e91e63;
        }
    </style>
</head>
<body>

<video autoplay muted loop>
    <source src="assets/video/video.mp4" type="video/mp4"> <!-- Ganti dengan path video Anda -->
    Your browser does not support the video tag.
</video>
<div class="container mt-4">
    <h1 class="mt-4 text-center">Kategori</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card profile-card">
                <img src="assets/img/smkn4.jpg" class="card-img-top" alt="SMKN 4 BOGOR">
                <div class="card-body">
                    <h5 class="card-title">SMKN 4 BOGOR</h5>
                    <p class="card-text">Deskripsi SMKN 4 BOGOR yang lebih mendalam.</p>
                    <ul>
                        <li>Gambar Logo Sekolah</li>
                    </ul>
                    <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#imageModal" data-image="assets/img/smkn4.jpg">Lihat Gambar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card profile-card">
                <img src="assets/img/rpl.jpg" class="card-img-top" alt="JURUSAN PPLG">
                <div class="card-body">
                    <h5 class="card-title">JURUSAN PPLG</h5>
                    <p class="card-text">Deskripsi Jurusan PPLG yang lebih mendalam.</p>
                    <ul>
                        <li>Siswa-Siswa PPLG</li>
                        <li>Gambar Lab PPLG</li>
                    </ul>
                    <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#imageModal" data-image="assets/img/rpl.jpg">Lihat Gambar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card profile-card">
                <img src="assets/img/transkrab.jpg" class="card-img-top" alt="Kegiatan Dari Osis">
                <div class="card-body">
                    <h5 class="card-title">Trans 4 Krab</h5>
                    <p class="card-text">Deskripsi Keseruan Acara Ini.</p>
                    <ul>
                        <li>Sub-Kategori F</li>
                        <li>Sub-Kategori G</li>
                        <li>Sub-Kategori H</li>
                    </ul>
                    <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#imageModal" data-image="assets/img/transkrab.jpg">Lihat Gambar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Gambar" />
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Mengupdate gambar modal saat tombol diklik
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang memicu modal
        var imageUrl = button.data('image'); // Mengambil URL gambar dari data atribut
        var modalImage = $('#modalImage'); // Mengambil elemen gambar modal
        modalImage.attr('src', imageUrl); // Mengatur src gambar modal
    });
</script>
</body>
</html>
