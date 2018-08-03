
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload File</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center><h1>Membuat Upload Gambar dengan CodeIgniter</h1></center>
    <?php echo $error; ?>

    <?php echo form_open_multipart('upload/aksi_upload'); ?>

    <input type="file" name="berkas"><br><br>
    <input type="submit" value="upload">
    </form>
</body>
</html>