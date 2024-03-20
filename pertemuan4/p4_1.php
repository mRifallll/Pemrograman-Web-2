<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian 1-20</h2>
    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 20; $j++) {
                echo "<td>" . ($i * $j) . "</td>"; 
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>