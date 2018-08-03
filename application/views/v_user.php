
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menghubungkan CI dengan Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Belajar Model Pada Code Igniter</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach($user as $u){ ?>
        <tr>
            <!-- $u adalah variabel foreach -> nama field dalam tabel -->
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>