<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('assets/img/bg.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        h1, h2 {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .profile-card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.6);
            margin-bottom: 15px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s, transform 0.5s;
        }
        .profile-card.show {
            opacity: 1;
            transform: translateY(0);
        }
        .btn-custom {
            background-color: #ff4081; 
            border: none;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        .btn-custom:hover {
            background-color: #e91e63; 
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <style>
        .white-text {
            color: white;
        }
    </style>

    <h1 class="mt-4 white-text">Komentar</h1>

    <div class="list-group" id="commentList">
        <div class="profile-card show">
            <h5 class="mb-1">Fauzan Raja Budin</h5>
            <p class="mb-1">Komentar pertama dari Fauzan. Sangat menarik!</p>
            <small>Waktu: 01 Oktober 2024</small>
        </div>

        <div class="profile-card show">
            <h5 class="mb-1">Syahrial Sydik</h5>
            <p class="mb-1">Komentar kedua dari Aril. Saya setuju dengan pendapat ini.</p>
            <small>Waktu: 02 Oktober 2024</small>
        </div>
    </div>

    <h1 class="mt-4 white-text">Tambahkan Komentar</h1>

    <form id="commentForm">
        <div class="form-group">
        <style>
    .white-text {
        color: white;
    }
</style>

<label for="name" class="white-text">Nama:</label>

            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
        <style>
    .white-text {
        color: white;
    }
</style>

<label for="name" class="white-text">Komentar:</label>

            <textarea class="form-control" id="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-custom">Kirim</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('commentForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const comment = document.getElementById('comment').value;
        const commentList = document.getElementById('commentList');

        const newComment = document.createElement('div');
        newComment.className = 'profile-card';
        newComment.innerHTML = `
            <h5 class="mb-1">${name}</h5>
            <p class="mb-1">${comment}</p>
            <small>Waktu: ${new Date().toLocaleString()}</small>
        `;

        commentList.appendChild(newComment);

        // Menambahkan efek transisi
        setTimeout(() => {
            newComment.classList.add('show');
        }, 10); // Menunggu sebentar agar efek terlihat

        // Reset form fields
        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';
    });
</script>
</body>
</html>
