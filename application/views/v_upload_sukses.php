
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center><h1>Hasil Upload dengan CodeIgniter</h1></center>
        <ul>
            <?php foreach ($upload_data as $item => $value):?>
                <li><?php echo $item; ?>:<?php echo $value; ?> </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>