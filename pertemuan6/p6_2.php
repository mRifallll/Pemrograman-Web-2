<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    <h2>Hitung Luas Segitiga (Cara Ke-2)</h2>
    <form method="post" action="">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "Segitiga ke-" . ($i+1) . ":<br>";
            echo "Alas: <input type='text' name='alas[]'><br>";
            echo "Tinggi: <input type='text' name='tinggi[]'><br><br>";
        }
        ?>
        <input type="submit" name="submit" value="Hitung">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        
        // Menghitung luas segitiga dan menampilkannya
        for ($i = 0; $i < count($alas); $i++) {
            $luas = 0.5 * $alas[$i] * $tinggi[$i];
            echo "Luas segitiga dengan alas {$alas[$i]} dan tinggi {$tinggi[$i]} adalah: " . $luas . "<br>";
        }
    }
    ?>
</body>
</html>
