<?php
include "dbkoneksi.php";

if (isset($_GET['id'])) {
    $idberita = $_GET['id'];

    // Persiapkan statement SQL untuk delete
    $stmt = $conn->prepare("DELETE FROM tblBerita WHERE idberita = ?");

    // Memeriksa apakah prepare berhasil
    if ($stmt === false) {
        die("Error prepare: " . $conn->error);
    }

    // Bind parameter ke query SQL
    $stmt->bind_param("s", $idberita);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Berita berhasil dihapus.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>
<br>
<a href="insertberita.php">Kembali ke daftar berita</a>