<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
        }

        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('latarbelakang.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(8px);
            z-index: -1;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-xl-3, .col-md-6 {
            flex: 1;
            margin: 10px;
            min-width: 220px;
            max-width: 300px;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .bg-sky-blue { background-color: #87CEEB !important; }
        .bg-turquoise-green { background-color: #40E0D0 !important; }
        .bg-pink { background-color: #FFC0CB !important; }
        .bg-light-gray { background-color: #D3D3D3 !important; color: #333; }

        .card-body { padding: 15px; text-align: center; }
        footer {
            background-color: #343a40;
            text-align: center;
            padding: 10px;
        }
        .footer-text { color: #adb5bd; }

        /* Gallery Styles */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 10px;
            margin: 20px;
        }
        .gallery img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="content">
        <h1 class="mt-4">Album</h1>
        <div class="row">
            <!-- Existing card elements -->
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
            <!-- More card elements here -->
        </div>

       

        <!-- Album Gallery Section -->
        <div class="card mt-4" style="border-radius: 10px;">
            <div class="card-header" style="background-color: #007bff; color: white; text-align: center; font-size: 1.5em; padding: 15px;">
                Album Gallery
            </div>
            <div class="card-body">
                <div class="gallery">
                    <?php
                    $result = mysqli_query($koneksi, "SELECT * FROM album");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
