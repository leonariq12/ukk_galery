<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
        font-family: 'Arial', sans-serif;
        background-color: #ff4c4c; /* Change background to red */
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
        color: #34495e; /* Darker text color */
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
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3); /* Increased shadow for more depth */
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .bg-sky-blue {
        background-color: #3498db !important; /* Blue background */
        color: white; /* White text for contrast */
    }

    .bg-turquoise-green {
        background-color: #1abc9c !important; /* Turquoise background */
        color: white; /* White text for contrast */
    }

    .bg-pink {
        background-color: #e91e63 !important; /* Pink background */
        color: white; /* White text for contrast */
    }

    .bg-light-gray {
        background-color: #ffffff !important; /* White background for light gray card */
        color: #34495e; /* Dark text */
    }

    .card-body {
        padding: 15px;
        text-align: center;
    }

    footer {
        background-color: #343a40;
        text-align: center;
        padding: 10px;
    }

    .footer-text {
        color: #adb5bd;
    }
</style>

</head>
<body>
    <div class="background-container"></div>
    <div class="content">
        <h1 class="mt-4"></h1>
        <div class="row">
            <!-- Total User Card -->
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

            <!-- Total Kategori Card -->
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

            <!-- Total Album Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-turquoise-green text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM petugas"));
                        ?>
                        <h5>Total Album</h5>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Total Komentar Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink text-dark mb-4">
                    <div class="card-body">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM komentar"));
                        ?>
                        <h5>Total Komentar</h5>
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
