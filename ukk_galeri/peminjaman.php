<?php
class Sekolah {
    public $nama;
    public $lokasi;
    public $tahunDidirikan;
    public $jenis;
    public $visi;
    public $misi;
    public $programKeahlian;
    public $fasilitas;
    public $prestasi;
    public $komunitas;
    public $kontak;

    public function __construct($nama, $lokasi, $tahunDidirikan, $jenis, $visi, $misi, $programKeahlian, $fasilitas, $prestasi, $komunitas, $kontak) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->tahunDidirikan = $tahunDidirikan;
        $this->jenis = $jenis;
        $this->visi = $visi;
        $this->misi = $misi;
        $this->programKeahlian = $programKeahlian;
        $this->fasilitas = $fasilitas;
        $this->prestasi = $prestasi;
        $this->komunitas = $komunitas;
        $this->kontak = $kontak;
    }

    public function tampilkanInfo() {
        echo "<div class='container'>";
        echo "<h1 class='title'>{$this->nama}</h1>";
        echo "<p class='info'><strong>Lokasi:</strong> {$this->lokasi}</p>";
        echo "<p class='info'><strong>Tahun Didirikan:</strong> {$this->tahunDidirikan}</p>";
        echo "<p class='info'><strong>Jenis Sekolah:</strong> {$this->jenis}</p>";
        
        echo "<h2>Visi</h2><p class='visi'>{$this->visi}</p>";
        echo "<h2>Misi</h2><ul class='list'>";
        foreach ($this->misi as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
        
        echo "<h2>Program Keahlian</h2><ul class='list'>";
        foreach ($this->programKeahlian as $program) {
            echo "<li>$program</li>";
        }
        echo "</ul>";
        
        echo "<h2>Fasilitas</h2><ul class='list'>";
        foreach ($this->fasilitas as $fasilitasItem) {
            echo "<li>$fasilitasItem</li>";
        }
        echo "</ul>";
        
        echo "<h2>Prestasi</h2><p>{$this->prestasi}</p>";
        echo "<h2>Komunitas</h2><p>{$this->komunitas}</p>";
        echo "<h2>Kontak</h2><p>{$this->kontak}</p>";
        echo "</div>";
    }
}

$smkn4Bogor = new Sekolah(
    "Sekolah Menengah Kejuruan Negeri 4 Bogor",
    " KP. BUNTAR KELURAHAN MUARASARI, Muarasari, Kec. Kota Bogor Selatan, Kota Bogor Prov. Jawa Barat",
    2002,
    "Sekolah Menengah Kejuruan (SMK)",
    "Menjadi lembaga pendidikan yang unggul dalam bidang kejuruan dan berorientasi pada kebutuhan industri.",
    [
        "Menyelenggarakan pendidikan kejuruan yang berkualitas.",
        "Meningkatkan kompetensi siswa sesuai dengan perkembangan industri.",
        "Mendorong siswa untuk berinovasi dan berkreasi.",
        "Menjalin kemitraan dengan dunia usaha dan industri."
    ],
    [
        "Teknik Komputer dan Jaringan",
        "Pengembangan Perangkat Lunak dan Gim",
        "Teknik Fabrikasi Logam dan Manufaktur",
        "Teknik Otomotif"
    ],
    [
        "Laboratorium komputer",
        "Studio desain",
        "Ruang praktik ",
        "Ruang kelas yang nyaman",
        "Bengkel Pengelasan dan Otomotif"
    ],
    "Telah meraih berbagai prestasi di tingkat regional dan nasional.",
    "Aktif dalam berbagai kegiatan ekstrakurikuler seperti OSIS, Pramuka, Seni dan Budaya, dan Olahraga.",
    "Telepon: (021) 1234567 | Email: smkn4bogor@example.com | Website: www.smkn4bogor.sch.id"
);

$smkn4Bogor->tampilkanInfo();
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 20px;
        max-width: 800px;
        margin: auto;
    }

    .title {
        text-align: center;
        color: #333;
        font-size: 2em;
        margin-bottom: 20px;
    }

    .info {
        color: #555;
        font-size: 1.1em;
    }

    h2 {
        color: #007BFF;
        margin-top: 20px;
    }

    .visi {
        background: #e7f1ff;
        padding: 10px;
        border-left: 4px solid #007BFF;
        margin-bottom: 20px;
    }

    .list {
        list-style-type: disc;
        margin-left: 20px;
    }

    .list li {
        margin-bottom: 5px;
    }
</style>
