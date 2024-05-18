<?php
// Strlen
$mystring1 = "Apa kabar";
echo "Jumlah karakter pada $mystring1 adalah : " . strlen($mystring1) . "<br>";
//menghitung panjang string dalam $mystring
$mystring2 = "Menghitung panjang string";
echo "Jumlah karakter pada $mystring2 adalah : " . strlen($mystring2) . "<br>";
echo "Jumlah karakter semua : ";
echo strlen($mystring1) + strlen($mystring2) . "<br>";

echo "<br/>";

// Strtoupper
$string = "jangan lelah karena error";
echo strtoupper($string) . "<br>";
echo strtoupper("Belajar pemrograman perlu banyak berlatih");

echo "<br/>";
echo "<br/>";
//strtolower
$string = "LATIHAN FUNGSI STRING";
echo strtolower($string) . "<br>";
echo strtolower("MENGUBAH MENJADI HURUF KECIL");

echo "<br/>";
echo "<br/>";
// ucfirst & ucwords

$string = "selamat mengerjakan tugas";
echo ucwords($string) . "<br>";
echo ucfirst("huruf pertama besar");

echo "<br/>";
echo "<br/>";

// rtrim, ltrim, trim
$nama11 = "  Endar Nirmala  ";
$nama12 = "   Hai apa kabar ";
$nama13 = " Selamat datang ";
echo trim($nama11) . "<br>";
echo ltrim($nama12) . "<br>";
echo rtrim($nama13) . "<br>";


echo "<br/>";
// Substring

$string1 = "Belajar PHP Menyenangkan";
$sub_string1 = substr($string1, 8);
$sub_string2 = substr($string1, 3, 10);
echo $sub_string1 . "<br>";
echo $sub_string2 . "<br>";
$string3 = "6734569";
$sub_string3 = substr($string3, 3);
echo $sub_string3 . "<br>";

echo "<br/>";

// substr count
$string = "This is nice today";
echo strlen($string) . "<br>"; //panjangstring
echo substr_count($string, "nice") . "<br>";
echo substr_count($string, "is", 2) . "<br>";
echo substr_count($string, "is", 3) . "<br>";
echo substr_count($string, "is", 3, 3) . "<br>";

date_default_timezone_set('Asia/Jakarta');
echo "Sekarang tanggal ";
echo date('d-F-Y');
echo "<br> dan jam ";
echo date('h:i:sA');
