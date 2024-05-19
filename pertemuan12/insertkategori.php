<?php
include "dbkoneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan dan membersihkan data dari form
    $id_kategori = trim($_POST['id_kategori']);
    $nama_kategori = trim($_POST['nama_kategori']);

    // Memeriksa apakah data tidak kosong
    if (!empty($id_kategori) && !empty($nama_kategori)) {
        // Persiapkan statement SQL
        $stmt = $conn->prepare("INSERT INTO tblkategori (idkategori, nama_kategori) VALUES (?, ?)");

        // Memeriksa apakah prepare berhasil
        if ($stmt === false) {
            die("Error prepare: " . $conn->error);
        }

        // Bind parameter ke query SQL (diasumsikan keduanya adalah string)
        $stmt->bind_param("ss", $id_kategori, $nama_kategori);

        // Eksekusi statement
        if ($stmt->execute()) {
            header("location: insertberita.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "ID Kategori dan Nama Kategori tidak boleh kosong.";
    }

    // Tutup koneksi
    $conn->close();
}
