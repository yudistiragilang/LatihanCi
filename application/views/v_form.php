
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Validasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Membuat Form Validasi dengan CodeIgniter</h1>
    <!-- menampilkan error validasi keseluruhan -->
    <?php echo validation_errors(); ?>
    <!-- form_open(nama class/nama method pada controler) -->
    <?php echo form_open('form/aksi'); ?>
        <label for="">Nama</label><br>
        <input type="text" name="nama"><br>
        <?php echo form_error('nama'); ?> <!-- digunakan untuk manual eror.. hanya untuk nama -->
        <label for="">Email</label><br>
        <input type="text" name="email"><br>
        <label for="">Konfirmasi Email</label><br>
        <input type="text" name="konfir_email">
        <input type="submit" value="simpan">
</body>
</html>