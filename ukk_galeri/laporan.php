<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .profile {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="profile">
    <?php
    class Profile {
        private $name;
        private $class;
        private $date;
        private $hobbies;

        public function __construct($name, $class, $date, $hobbies) {
            $this->name = $name;
            $this->class = $class;
            $this->date = $date;
            $this->hobbies = $hobbies;
        }

        public function displayProfile() {
            echo "<h2>Profil Diri</h2>";
            echo "<p><strong>Nama: Therry Leon Henry</strong> " . $this->name . "</p>";
            echo "<p><strong>Kelas: XII PPLG 3</strong> " . $this->class . " kelas</p>";
            echo "<p><strong>TTL: Bogor, 16 Januari 2006</strong> " . $this->date . "</p>";
            echo "<p><strong>Hobi: Futsal</strong> " . implode(", ", $this->hobbies) . "</p>";
        }
    }

    // Contoh penggunaan
    $myProfile = new Profile(
        "Therry Leon Henry",
        3,
        "Bogor, 16 Januari 2006",
        ["Futsal"]
    );

    $myProfile->displayProfile();
    ?>
</div>

</body>
</html>
