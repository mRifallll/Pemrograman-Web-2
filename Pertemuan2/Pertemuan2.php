<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 2</title>
</head>
<body>

<?php
$nama = "";
$jurusan = "";
$tugas = 0;
$uts = 0;
$uas = 0;
$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST ["nama"];
    $jurusan = $_POST ["jurusan"];
    $tugas = $_POST ["tugas"];
    $uts = $_POST ["uts"];
    $uas = $_POST ["uas"];

    $total= ($tugas + $uts + $uas) / 3;   
}
?>

<form method="post" action="pertemuan_2.php">
    Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br><br>
    Jurusan: <input type="text" name="jurusan" value="<?php echo $jurusan; ?>"><br><br>
    Nilai Tugas: <input type="text" name="tugas" value="<?php echo $tugas; ?>"><br><br>
    Nilai UTS: <input type="text" name="uts" value="<?php echo $uts; ?>"><br><br>
    Nilai UAS: <input type="text" name="uas" value="<?php echo $uas; ?>"><br><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Data Setelah di-Hitung:</h3>";
    echo "Nama:   $nama  ";
    echo "Jurusan:   $jurusan  <br>";
    echo "Nilai Tugas:  $tugas  ";
    echo "Nilai UTS:   $uts  <br>";
    echo "Nilai UAS:  $uas  " ;
    echo "Rata-Rata:   $total  <br>";
}
?>

</body>
</html>
