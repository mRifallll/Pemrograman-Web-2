<!DOCTYPE html>
<html>
<head>
    <title>Program Nilai Akhir dan Grade</title>
</head>
<body>

<?php
// Fungsi untuk menghitung nilai akhir
function hitungNilaiAkhir($kehadiran, $nilaiTugas, $nilaiUTS, $nilaiUAS) {
    $bobotKehadiran = 0.1;
    $bobotTugas = 0.2;
    $bobotUTS = 0.3;
    $bobotUAS = 0.4;

    // Maksimal kehadiran adalah 18
    if ($kehadiran > 18) {
        $kehadiran = 18;
    }

    $nilaiAkhir = ($kehadiran * $bobotKehadiran) + ($nilaiTugas * $bobotTugas) + ($nilaiUTS * $bobotUTS) + ($nilaiUAS * $bobotUAS);
    return $nilaiAkhir;
}

// Fungsi untuk mendapatkan grade
function dapatkanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 80) {
        return 'A';
    } elseif ($nilaiAkhir >= 70) {
        return 'B';
    } elseif ($nilaiAkhir >= 60) {
        return 'C';
    } elseif ($nilaiAkhir >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}

// Fungsi untuk mendapatkan keterangan lulus/tidak lulus
function dapatkanKeterangan($nilaiAkhir) {
    if ($nilaiAkhir > 65) {
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}

// Ambil data dari form jika metode pengiriman adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $matakuliah = $_POST["matakuliah"];
    $kehadiran = $_POST["kehadiran"];
    $nilaiTugas = $_POST["nilaiTugas"];
    $nilaiUTS = $_POST["nilaiUTS"];
    $nilaiUAS = $_POST["nilaiUAS"];

    // Hitung nilai akhir
    $nilaiAkhir = hitungNilaiAkhir($kehadiran, $nilaiTugas, $nilaiUTS, $nilaiUAS);
    // Dapatkan grade
    $grade = dapatkanGrade($nilaiAkhir);
    // Dapatkan keterangan lulus/tidak lulus
    $keterangan = dapatkanKeterangan($nilaiAkhir);
}
?>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br>
    NIM: <input type="text" name="nim"><br>
    Matakuliah: <input type="text" name="matakuliah"><br>
    Jumlah Kehadiran: <input type="number" name="kehadiran"><br>
    Nilai Tugas: <input type="number" name="nilaiTugas"><br>
    Nilai UTS: <input type="number" name="nilaiUTS"><br>
    Nilai UAS: <input type="number" name="nilaiUAS"><br>
    <input type="submit" value="Hitung">
</form>

<?php
// Tampilkan nilai akhir dan grade jika sudah dihitung
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Matakuliah: " . $matakuliah . "<br>";
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Grade: " . $grade . "<br>";
    echo "Keterangan: " . $keterangan . "<br>";
}
?>

</body>
</html>
