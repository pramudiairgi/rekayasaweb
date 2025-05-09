<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
// alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/rekayasaweb/prak2/json/getWisata.php");
// mengubah JSON menjadi array
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID Wisata</th>
            <th>Kota</th>
            <th>Landmark</th>
            <th>Tarif</th>
        </tr>
        <tr>
            <?php foreach ($data as $row) : ?>
                <td><?php echo $row["id_wisata"] . "<br />"; ?></td>
                <td><?php echo $row["kota"] . "<br />"; ?></td>
                <td><?php echo $row["landmark"] . "<br />"; ?></td>
                <td><?php echo $row["tarif"] . "<br /><hr />"; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>

</html>