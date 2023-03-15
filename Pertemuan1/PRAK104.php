<?php

$DaftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: sans-serif;
            color: black;
        }
        table, th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>

    <!-- Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <!-- foreach -->
        <?php foreach($DaftarSmartphone as $DS) : ?>
        <tr>
            <td> <?= $DS; ?> </td>
        </tr>
        <?php endforeach ?>
        <!-- foreach -->

    </table>
    <!-- Tabel -->

</body>
</html>