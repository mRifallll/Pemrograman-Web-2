<?php
include "dbkoneksi.php";

// Mendefinisikan variabel pesan
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan dan membersihkan data dari form
    $idberita = trim($_POST['idberita']);
    $idkategori = trim($_POST['idkategori']);
    $judul_berita = trim($_POST['judulberita']);
    $isi_berita = trim($_POST['isiberita']);
    $penulis = trim($_POST['penulis']);
    $tgl_dipublish = trim($_POST['tgldipublish']);

    // Memeriksa apakah data tidak kosong
    if (!empty($idberita) && !empty($idkategori) && !empty($judul_berita) && !empty($isi_berita) && !empty($penulis) && !empty($tgl_dipublish)) {
        // Persiapkan statement SQL
        $stmt = $conn->prepare("INSERT INTO tblBerita (idberita, idkategori, judulberita, isiberita, penulis, tgldipublish) VALUES (?, ?, ?, ?, ?, ?)");

        // Memeriksa apakah prepare berhasil
        if ($stmt === false) {
            die("Error prepare: " . $conn->error);
        }

        // Bind parameter ke query SQL (diasumsikan semua adalah string)
        $stmt->bind_param("ssssss", $idberita, $idkategori, $judul_berita, $isi_berita, $penulis, $tgl_dipublish);

        // Eksekusi statement
        if ($stmt->execute()) {
            $message = "Berita berhasil ditambahkan.";
        } else {
            $message = "Error: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        $message = "Semua kolom harus diisi.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Berita</title>
</head>

<body>
    <h1>Tambah Berita</h1>
    <form method="POST" action="insertberita.php">
        ID Berita: <input type="text" name="idberita" required><br>
        Kategori: <select name="idkategori" required>
            <?php
            // Query untuk mengambil data kategori
            $sql_kategori = "SELECT idkategori, nama_kategori FROM tblkategori";
            $result_kategori = $conn->query($sql_kategori);

            // Memeriksa apakah hasil query mengandung baris
            if ($result_kategori && $result_kategori->num_rows > 0) {
                // Loop melalui hasil query dan buat opsi untuk setiap kategori
                while ($row_kategori = $result_kategori->fetch_assoc()) {
                    echo "<option value='{$row_kategori['idkategori']}'>{$row_kategori['nama_kategori']}</option>";
                }
            } else {
                echo "<option value=''>Tidak ada kategori tersedia</option>";
            }
            ?>
        </select><br>
        Judul Berita: <input type="text" name="judulberita" required><br>
        Isi Berita: <textarea name="isiberita" required></textarea><br>
        Penulis: <input type="text" name="penulis" required><br>
        Tanggal Publish: <input type="date" name="tgldipublish" required><br>
        <input type="submit" value="Tambah Berita">
    </form>

    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>

    <h2>Daftar Berita</h2>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Isi Berita</th>
            <th>Penulis</th>
            <th>Tanggal Publish</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        // Query untuk mengambil data berita dan kategori
        $sql = "SELECT tblberita.idberita, tblkategori.nama_kategori, tblberita.judulberita, tblberita.isiberita, tblberita.penulis, tblberita.tgldipublish 
                FROM tblberita 
                JOIN tblkategori ON tblberita.idkategori = tblkategori.idkategori
                ORDER BY tblberita.tgldipublish DESC";
        $result = $conn->query($sql);

        // Memeriksa apakah hasil query mengandung baris
        if ($result && $result->num_rows > 0) {
            // Loop melalui hasil query dan buat baris untuk setiap berita
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['idberita']) . "</td>
                        <td>" . htmlspecialchars($row['nama_kategori']) . "</td>
                        <td>" . htmlspecialchars($row['judulberita']) . "</td>
                        <td>" . htmlspecialchars($row['isiberita']) . "</td>
                        <td>" . htmlspecialchars($row['penulis']) . "</td>
                        <td>" . htmlspecialchars($row['tgldipublish']) . "</td>
                        <td><a href='updateberita.php?id=" . htmlspecialchars($row['idberita']) . "'>Edit</a></td>
                        <td><a href='deleteberita.php?id=" . htmlspecialchars($row['idberita']) . "'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada berita yang ditemukan.</td></tr>";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </table>
</body>

</html>