
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- memanggil css dari asset -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Malas Ngoding</h1>
                <h2>belajar Template pada code igniter</h2>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web'?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about'?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>