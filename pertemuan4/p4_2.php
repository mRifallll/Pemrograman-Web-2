<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<body>
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
    ?>
</body>
</html>