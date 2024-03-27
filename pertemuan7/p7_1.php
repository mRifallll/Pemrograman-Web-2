<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program PHP dengan Function</title>
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
    <h2>Menu:</h2>
    <ul>
        <li><a href="p7_1.php?menu=1" target="result">Penggunaan if</a></li>
        <li><a href="p7_1.php?menu=2" target="result">Penggunaan switch ... case</a></li>
        <li><a href="p7_1.php?menu=3" target="result">Penggunaan looping</a></li>
        <li><a href="p7_1.php?menu=4" target="result">Penggunaan array</a></li>
    </ul>
    <!-- <iframe name="result" width="600" height="400" frameborder="0"></iframe> -->

    <?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        switch ($menu) {
            case 1:
                penggunaan_if();
                break;
            case 2:
                penggunaan_switch();
                break;
            case 3:
                penggunaan_looping();
                break;
            case 4:
                penggunaan_array();
                break;
            default:
                echo "<p>Pilihan tidak valid.</p>\n";
        }
    }

    function penggunaan_if() {
        $nama = "";
        $jurusan = "";
        $tugas = "";
        $uts = "";
        $uas = "";
        $total = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST ["nama"];
            $jurusan = $_POST ["jurusan"];
            $tugas = floatval($_POST ["tugas"]); // Mengubah input menjadi tipe data float
            $uts = floatval($_POST ["uts"]); // Mengubah input menjadi tipe data float
            $uas = floatval($_POST ["uas"]); // Mengubah input menjadi tipe data float

            $total= ($tugas + $uts + $uas) / 3;   
}
?>

<form method="post" action="">
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
    }

    
    function penggunaan_switch() {
$angka1 = "";
$angka2 = "";
$operator = "";
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operator = $_POST["operator"];

    // Melakukan operasi penjumlahan
    switch ($operator) {
        case "+":
            $hasil = $angka1 + $angka2;
            break;
        case "-":
            $hasil = $angka1 - $angka2;
            break;
        case "*":
            $hasil = $angka1 * $angka2;
            break;
        case "/":
            $hasil = $angka1 / $angka2;
            break;
    }
}
?>

<form method="post" action="">
Angka 1:<br><input type="text" name="angka1" value="<?php echo $angka1; ?>">Angka 2 :
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>  
    </select>
    <input type="text" name="angka2" value="<?php echo $angka2; ?>"> 
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($hasil !== "") {
        echo "<h3>Hasil:</h3>";
        echo "Angka 1: " . $angka1 . "<br>";
        echo "Operator: " . $operator . "<br>";
        echo "Angka 2: " . $angka2 . "<br>";
        echo "Hasil: " . $hasil . "<br>";
    } else {
        echo "<p>Silakan masukkan angka dan pilih operator untuk melakukan perhitungan.</p>";
         }
    }   

    }

    function penggunaan_looping() {
 ?>
       <h2>Program PHP: Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form method="post">
        <label for="awal">Masukkan nilai awal:</label>
        <input type="text" id="awal" name="awal"><br><br>
        <label for="akhir">Masukkan nilai akhir:</label>
        <input type="text" id="akhir" name="akhir"><br><br>
        <input type="submit" value="Hitung">
    </form>

 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $awal = (int)$_POST["awal"];
        $akhir = (int)$_POST["akhir"];

        function deret_bilangan_ganjil_dibagi_3($awal, $akhir) {
            $jumlah = 0;
            $banyak = 0;
            echo "Deret bilangan ganjil yang habis dibagi 3 dari $awal sampai $akhir adalah:<br>";
            for ($i = $awal; $i <= $akhir; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) {
                    echo $i . " ";
                    $jumlah += $i;
                    $banyak++;
                }
            }
            echo "<br>Banyaknya deret bilangan: $banyak<br>";
            echo "Jumlah deret bilangan: $jumlah";
        }

        deret_bilangan_ganjil_dibagi_3($awal, $akhir);
    }
    }

    function penggunaan_array() {
        ?>
        <h2>menghitung Luas Segitiga</h2>
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
        
    }
    ?>
</body>
</html>
