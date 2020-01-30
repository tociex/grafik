<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style type="text/css">.highcharts-credits {
display: none !important;
}</style>
    <title>Dashboard - Sales Channel</title>

</head>

<body>

<div class="container" style="margin-top:2em">
<div class="row">   
<a href="index.php" class="btn btn-primary btn-sm">Data Daily Cash In</a> &nbsp;
<a href="purchase.php" class="btn btn-success btn-sm">Data Daily Purchase</a>
</div>
</div>


    <?php
    require('connection/db.php');
    require('layout/header.php');
    ?>

    <div class="container">
        <div class="row">
            <?php
             require('layout/pencapaian.php');
            require('layout/data-daily.php');
            require('layout/data-pilar.php');
            require('layout/data-mau.php');
            require('layout/data-merchant.php');


            // require('layout/daily.php');
            // require('layout/comparing.php');
            // require('layout/mau.php');
            // require('layout/merchant.php');
            ?>
        </div>
        <hr>
    </div>

    <?php
        // require('base/script.php');
        // require('base/script_process.php');
    ?>
    
</body>


</html>