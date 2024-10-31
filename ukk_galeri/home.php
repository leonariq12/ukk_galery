<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            color: white;
            font-family: Arial, sans-serif;
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
        .content {
            height: 100%;
            overflow-y: auto;
            padding: 20px;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff4081; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #e91e63;
        }

        .footer {
            background: rgba(51, 153, 255, 0.05);
            padding: 40px;
            text-align: center;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
            margin-top: auto;
        }

        .footer h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffffff;
            background: linear-gradient(45deg, #3399FF, #00ff88);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Card styles */
        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 10px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.5em;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        table {
            width: 100%;
            color: white;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<video autoplay muted loop>
    <source src="assets/video/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="content">
    <h1 class="mt-4">Dashboard</h1>

    <div class="profile-card">
        <div class="card-header">Profil Pengguna</div>
        <div class="card-body">
            <table>
                <tr>
                    <td><strong>Nama</strong></td>
                    <td><?php echo $_SESSION['user']['nama']; ?></td>
                </tr>
                <tr>
                    <td><strong>Level User</strong></td>
                    <td><?php echo $_SESSION['user']['level']; ?></td>
                </tr>
                <tr>
                    <td><strong>Tanggal Login</strong></td>
                    <td><?php echo date('d-m-Y'); ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="footer">
        <h2>Peta Sekolah</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.049882521654!2d106.82211897590344!3d-6.640728064919521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1730167081485!5m2!1sid!2sid"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

</body>
</html>
