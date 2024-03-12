<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 2</title>
</head>
<body>

<?php
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
?>

</body>
</html>
