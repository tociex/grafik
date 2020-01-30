<?php
require('./connection/db.php');
//do get data daily
$getMonth = date('m');
$getYear = date('Y');
$getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));


$getDaily = $connect->prepare("SELECT outlet, date FROM mtd WHERE date='" . $getNow . "' and jenis='cash-in'");
$getDaily->execute();
$daily = $getDaily->fetch();

$getDailyuser = $connect->prepare("SELECT user, date FROM mtd WHERE date='" . $getNow . "' and jenis='cash-in'");
$getDailyuser->execute();
$dailyuser = $getDailyuser->fetch();

$getDailytrx = $connect->prepare("SELECT trx, date FROM mtd WHERE date='" . $getNow . "' and jenis='cash-in'");
$getDailytrx->execute();
$dailytrx = $getDailytrx->fetch();

$getDailygtv = $connect->prepare("SELECT volume, date FROM mtd WHERE date='" . $getNow . "' and jenis='cash-in'");
$getDailygtv->execute();
$dailygtv = $getDailygtv->fetch();

?>

<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading" align="center">Active Outlet (4x)
                </h4>
				<h4 class="alert-heading" align="center" >Tgl : <?php echo $daily["date"];?></h4>
				<h4 class="alert-heading" align="center" ><b><?php echo number_format($daily["outlet"],0,",",".");?>
                </b></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading" align="center">Active User</h4>
				<h4 class="alert-heading" align="center" >Tgl : <?php echo $dailyuser["date"];?></h4>
				<h4 class="alert-heading" align="center" ><b><?php echo number_format($dailyuser["user"],0,",",".");?>
                </b></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading" align="center">TRX</h4>
				<h4 class="alert-heading" align="center" >Tgl : <?php echo $dailytrx["date"];?></h4>
				<h4 class="alert-heading" align="center" ><b><?php echo number_format($dailytrx["trx"],0,",",".");?>
                </b></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading" align="center">Volume</h4>
				<h4 class="alert-heading" align="center" >Tgl : <?php echo $dailygtv["date"];?></h4>
				<h4 class="alert-heading" align="center" ><b><?php echo number_format($dailygtv["volume"],0,",",".");?>
                </b></h4>
            </div>
        </div>
    </div>
</div>