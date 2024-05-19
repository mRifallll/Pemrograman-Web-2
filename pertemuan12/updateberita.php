<?php
include "dbkoneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idberita = trim($_POST['idberita']);
    $idkategori = trim($_POST['idkategori']);
    $judul_berita = trim($_POST['judulberita']);
    $isi_berita = trim($_POST['isiberita']);
    $penulis = trim($_POST['penulis']);
    $tgl_dipublish = trim($_POST['tgldipublish']);

    // Memeriksa apakah data tidak kosong
    if (!empty($idberita) && !empty($idkategori) && !empty($judul_berita) && !empty($isi_berita) && !empty($penulis) && !empty($tgl_dipublish)) {
        // Persiapkan statement SQL untuk update
        $stmt = $conn->prepare("UPDATE tblBerita SET idkategori = ?, judulberita = ?, isiberita = ?, penulis = ?, tgldipublish = ? WHERE idberita = ?");

        // Memeriksa apakah prepare berhasil
        if ($stmt === false) {
            die("Error prepare: " . $conn->error);
        }

        // Bind parameter ke query SQL (diasumsikan semua adalah string)
        $stmt->bind_param("ssssss", $idkategori, $judul_berita, $isi_berita, $penulis, $tgl_dipublish, $idberita);

        // Eksekusi statement
        if ($stmt->execute()) {
            echo "Berita berhasil diperbarui.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Semua kolom harus diisi.";
    }
}

// Menutup koneksi
$conn->close();
?>
<br>
<a href="insertberita.php">Kembali ke daftar berita</a>