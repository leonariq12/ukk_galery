<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            color: white;
            font-family: 'Roboto', sans-serif; /* Set font family */
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
        .container {
            position: relative;
            z-index: 1;
            padding-top: 20px;
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }
        .btn-custom {
            background-color: #ff4081; 
            border: none;
        }
        .btn-custom:hover {
            background-color: #e91e63;
        }
        .btn-delete {
            background-color: #f44336;
            border: none;
            color: white;
            margin-top: 10px;
        }
        h1 {
            margin-bottom: 20px; /* Add space below headings */
        }
        label {
            margin-bottom: 5px; /* Add space below labels */
        }
    </style>
</head>
<body>

<video autoplay muted loop>
    <source src="assets/video/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="container mt-4">
    <h1 class="text-center">Komentar</h1>

    <div class="list-group" id="commentList">
        <div class="profile-card">
            <h5 class="mb-1">Fauzan Raja Budin</h5>
            <p class="mb-1">Komentar pertama dari Fauzan. Sangat menarik!</p>
            <small>Waktu: 01 Oktober 2024</small>
            <button class="btn btn-delete" onclick="deleteComment(this)">Hapus</button>
        </div>

        <div class="profile-card">
            <h5 class="mb-1">Syahrial Sydik</h5>
            <p class="mb-1">Komentar kedua dari Aril. Saya setuju dengan pendapat ini.</p>
            <small>Waktu: 02 Oktober 2024</small>
            <button class="btn btn-delete" onclick="deleteComment(this)">Hapus</button>
        </div>
    </div>

    <h1 class="text-center">Tambahkan Komentar</h1>

    <form id="commentForm">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="comment">Komentar:</label>
            <textarea class="form-control" id="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-custom btn-block">Kirim</button>
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
            <button class="btn btn-delete" onclick="deleteComment(this)">Hapus</button>
        `;

        commentList.appendChild(newComment);

        // Reset form fields
        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';
    });

    function deleteComment(button) {
        const commentCard = button.parentElement; // Get the parent profile-card
        commentCard.remove(); // Remove the comment card from the DOM
    }
</script>
</body>
</html>
