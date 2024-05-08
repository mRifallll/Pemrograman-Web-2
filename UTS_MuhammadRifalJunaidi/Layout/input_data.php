<?php
// Ambil data dari form
$team = $_POST['negara'];
$played = $_POST['pertandingan'];
$won = $_POST['menang'];
$drawn = $_POST['seri'];
$lost = $_POST['kalah'];
$points = $_POST['point'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$points = $won * 3 + $drawn;

// Format data
$data = "$team, $played, $won, $drawn, $lost, $points, $nama,$nim";

// Tulis data ke dalam file
$file = fopen("data.txt", "a");
fwrite($file, $data . "\n");
fclose($file);

echo "Data berhasil dimasukkan ke dalam file.";
?>
