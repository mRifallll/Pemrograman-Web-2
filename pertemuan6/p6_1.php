<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Luas Segitiga - Cara 1</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    h2 {
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table th, table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    table th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <h2>menghitung Luas Segitiga - Cara 1</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php
        // Mendefinisikan data alas dan tinggi dalam array secara langsung
        $data_segitiga = array(
            array('alas' => 5, 'tinggi' => 3),
            array('alas' => 7, 'tinggi' => 4),
            array('alas' => 10, 'tinggi' => 6),
            array('alas' => 8, 'tinggi' => 5),
            array('alas' => 6, 'tinggi' => 2)
        );

        // Fungsi untuk menghitung luas segitiga
        function hitungLuasSegitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }

        // Menampilkan hasil perhitungan luas segitiga dalam tabel HTML
        foreach ($data_segitiga as $index => $segitiga) {
            $luas = hitungLuasSegitiga($segitiga['alas'], $segitiga['tinggi']);
            echo "<tr>";
            echo "<td>".($index+1)."</td>";
            echo "<td>{$segitiga['alas']}</td>";
            echo "<td>{$segitiga['tinggi']}</td>";
            echo "<td>$luas</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>