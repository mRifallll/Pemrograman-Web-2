<!DOCTYPE html>
<html>
<head>
    <title>Klasemen Piala Asia U-23</title>
</head>
<body>
    <h2>Data Group A Piala Asian Qatar U-23</h2>
    <p> Per <?php echo date("d-m-Y H:i:s"); ?></p>
    <p>Muhammad Rifal Junaidi / 211011401710</p>
    <table border = "1">
        <tr>
            <th>Nama Negara</th>
            <th>P</th>
            <th>M</th>
            <th>S</th>
            <th>K</th>
            <th>Points</th>
        </tr>
        <?php
        // Baca data dari file
        $file = fopen("data.txt", "r");
        while (!feof($file)) {
            $line = fgets($file);
            $data = explode(", ", $line);
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>
</body>
</html>
