<?php
//do get data daily

$getMonth = date('m');
$getYear = date('Y');
$getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
 

$getbulan_otlet = $connect->prepare("SELECT bulan FROM pencapaian where tipe='OUTLET' and jenis='cash-in'");
$getbulan_otlet->execute();

$getdatatotal_otlet = $connect->prepare("SELECT total FROM pencapaian where tipe='OUTLET' and jenis='cash-in'");
$getdatatotal_otlet->execute();

$getdatatarget_otlet = $connect->prepare("SELECT target FROM pencapaian where tipe='OUTLET' and jenis='cash-in'");
$getdatatarget_otlet->execute();

if(isset($_GET['ou'])){

$getpencapaian_outlet_total = $connect->prepare("SELECT total FROM pencapaian where tipe='OUTLET' and jenis='cash-in' and bulan='$_GET[ou]'");
$getpencapaian_outlet_total->execute();
$getpencapaian_outlet_target = $connect->prepare("SELECT target FROM pencapaian where tipe='OUTLET' and jenis='cash-in' and bulan='$_GET[ou]'");
$getpencapaian_outlet_target->execute();
   
}else{


$getpencapaian_outlet_total = $connect->prepare("SELECT total FROM pencapaian where tipe='OUTLET' and jenis='cash-in'");
$getpencapaian_outlet_total->execute();
$getpencapaian_outlet_target = $connect->prepare("SELECT target FROM pencapaian where tipe='OUTLET' and jenis='cash-in'");
$getpencapaian_outlet_target->execute();

}



$getbulan_user = $connect->prepare("SELECT bulan FROM pencapaian where tipe='USER' and jenis='cash-in'");
$getbulan_user->execute();

$getdatatotal_user = $connect->prepare("SELECT total FROM pencapaian where tipe='USER' and jenis='cash-in'");
$getdatatotal_user->execute();

$getdatatarget_user = $connect->prepare("SELECT target FROM pencapaian where tipe='USER' and jenis='cash-in'");
$getdatatarget_user->execute();


if(isset($_GET['os'])){

$getpencapaian_user_total = $connect->prepare("SELECT total FROM pencapaian where tipe='USER' and jenis='cash-in' and bulan='$_GET[os]'");
$getpencapaian_user_total->execute();
$getpencapaian_user_target = $connect->prepare("SELECT target FROM pencapaian where tipe='USER' and jenis='cash-in' and bulan='$_GET[os]'");
$getpencapaian_user_target->execute();

}else{

$getpencapaian_user_total = $connect->prepare("SELECT total FROM pencapaian where tipe='USER' and jenis='cash-in'");
$getpencapaian_user_total->execute();
$getpencapaian_user_target = $connect->prepare("SELECT target FROM pencapaian where tipe='USER' and jenis='cash-in'");
$getpencapaian_user_target->execute();
}



$getbulan_trx = $connect->prepare("SELECT bulan FROM pencapaian where tipe='TRX' and jenis='cash-in'");
$getbulan_trx->execute();

$getdatatotal_trx = $connect->prepare("SELECT total FROM pencapaian where tipe='TRX' and jenis='cash-in'");
$getdatatotal_trx->execute();

$getdatatarget_trx = $connect->prepare("SELECT target FROM pencapaian where tipe='TRX' and jenis='cash-in'");
$getdatatarget_trx->execute();

if(isset($_GET['trx'])){

$getpencapaian_trx_total = $connect->prepare("SELECT total FROM pencapaian where tipe='TRX' and jenis='cash-in' and bulan='$_GET[trx]'");
$getpencapaian_trx_total->execute();
$getpencapaian_trx_target = $connect->prepare("SELECT target FROM pencapaian where tipe='TRX' and jenis='cash-in' and bulan='$_GET[trx]'");
$getpencapaian_trx_target->execute();

}else{

$getpencapaian_trx_total = $connect->prepare("SELECT total FROM pencapaian where tipe='TRX' and jenis='cash-in'");
$getpencapaian_trx_total->execute();
$getpencapaian_trx_target = $connect->prepare("SELECT target FROM pencapaian where tipe='TRX' and jenis='cash-in'");
$getpencapaian_trx_target->execute();
}



$getbulan_gtv = $connect->prepare("SELECT bulan FROM pencapaian where tipe='GTV' and jenis='cash-in'");
$getbulan_gtv->execute();

$getdatatotal_gtv = $connect->prepare("SELECT total FROM pencapaian where tipe='GTV' and jenis='cash-in'");
$getdatatotal_gtv->execute();

$getdatatarget_gtv = $connect->prepare("SELECT target FROM pencapaian where tipe='GTV' and jenis='cash-in'");
$getdatatarget_gtv->execute();

if(isset($_GET['gtv'])){
$getpencapaian_gtv_total = $connect->prepare("SELECT total FROM pencapaian where tipe='GTV' and jenis='cash-in' and bulan='$_GET[gtv]'");
$getpencapaian_gtv_total->execute();
$getpencapaian_gtv_target = $connect->prepare("SELECT target FROM pencapaian where tipe='GTV' and jenis='cash-in' and bulan='$_GET[gtv]'");
$getpencapaian_gtv_target->execute();

}else{
$getpencapaian_gtv_total = $connect->prepare("SELECT total FROM pencapaian where tipe='GTV' and jenis='cash-in'");
$getpencapaian_gtv_total->execute();
$getpencapaian_gtv_target = $connect->prepare("SELECT target FROM pencapaian where tipe='GTV' and jenis='cash-in'");
$getpencapaian_gtv_target->execute();

}










?>

<style>
#myDIVotlet {
  display: none;
}

#myDIVcariotlet {
  display: none;
}

#myDIVuser {
  display: none;
}

#myDIVcariuser {
  display: none;
}
#myDIVtrx {
  display: none;
}

#myDIVcaritrx {
  display: none;
}
#myDIVgtv {
  display: none;
}

#myDIVcarigtv {
  display: none;
}

#myDIVeditanalisap{
display: none;

}
</style>


<div class="col-md-12 mb-5 ">
    <h1 class="display-6 mb-6">Pencapaian Cash In</h1>



    <div class="col-md-12" id="daily-chart">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div id="pencapaian-outlet"></div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycariotlet()">Search Bulan</button>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="myotlet()">View Data</button>

                            
                            
                        </div>
                        <!-- <div class="col-md-12 d-none" id="daily-search-form"> -->
                        
                    </div>
                <hr class="my-4">
                <div id="myDIVcariotlet">
                    <form method="GET" action="">
                    <select class="form-control mt-4" name="ou" onchange="this.form.submit()">
                        <option value="JAN">JAN</option>
                        <option value="FEB">FEB</option>
                        <option value="MAR">MAR</option>
                        <option value="APR">APR</option>
                        <option value="MAY">MAY</option>
                        <option value="JUN">JUN</option>
                        <option value="JUL">JUL</option>
                        <option value="AUG">AUG</option>
                        <option value="SEP">SEP</option>
                        <option value="OCT">OCT</option>
                        <option value="NOV">NOV</option>                                  
                        <option value="DES">DES</option>
                    
                                    
                    </select>
                    </form>
                </div>

                <div id="myDIVotlet">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">BULAN</th>
                              <?php  foreach ($getbulan_otlet as $bulan_otlet) { 

                                echo '<th scope="col">'.$bulan_otlet['bulan'].'</th>';

                                 }  ?>
    
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              
                              <td>TOTAL USER</td>
                               <?php  foreach ($getdatatotal_otlet as $tt_otlet) { 

                                echo '<td>'.$tt_otlet['total'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>TOTAL TARGET</td>
                              <?php  foreach ($getdatatarget_otlet as $tg_otlet) { 

                                echo '<td>'.$tg_otlet['target'].'</td>';

                                 }  ?>
                            </tr>
                             
                          </tbody>
                        </table>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div id="pencapaian-user"></div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycariuser()">Search Bulan</button>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="myuser()">View Data</button>

                            
                            
                        </div>
                        <!-- <div class="col-md-12 d-none" id="daily-search-form"> -->
                        
                    </div>
                <hr class="my-4">
                <div id="myDIVcariuser">
                    <form method="GET" action="">
                    <select class="form-control mt-4" name="os" onchange="this.form.submit()">
                        <option value="JAN">JAN</option>
                        <option value="FEB">FEB</option>
                        <option value="MAR">MAR</option>
                        <option value="APR">APR</option>
                        <option value="MAY">MAY</option>
                        <option value="JUN">JUN</option>
                        <option value="JUL">JUL</option>
                        <option value="AUG">AUG</option>
                        <option value="SEP">SEP</option>
                        <option value="OCT">OCT</option>
                        <option value="NOV">NOV</option>                                  
                        <option value="DES">DES</option>
                    
                                    
                    </select>
                    </form>
                </div>

                <div id="myDIVuser">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">BULAN</th>
                              <?php  foreach ($getbulan_user as $bulan_user) { 

                                echo '<th scope="col">'.$bulan_user['bulan'].'</th>';

                                 }  ?>
    
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              
                              <td>TOTAL USER</td>
                               <?php  foreach ($getdatatotal_user as $tt_user) { 

                                echo '<td>'.$tt_user['total'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>TOTAL TARGET</td>
                              <?php  foreach ($getdatatarget_user as $tg_user) { 

                                echo '<td>'.$tg_user['target'].'</td>';

                                 }  ?>
                            </tr>
                             
                          </tbody>
                        </table>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div id="pencapaian-trx"></div>
                      <div class="row">
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycaritrx()">Search Bulan</button>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mytrx()">View Data</button>

                            
                            
                        </div>
                        <!-- <div class="col-md-12 d-none" id="daily-search-form"> -->
                        
                    </div>
                <hr class="my-4">
                <div id="myDIVcaritrx">
                    <form method="GET" action="">
                    <select class="form-control mt-4" name="trx" onchange="this.form.submit()">
                        <option value="JAN">JAN</option>
                        <option value="FEB">FEB</option>
                        <option value="MAR">MAR</option>
                        <option value="APR">APR</option>
                        <option value="MAY">MAY</option>
                        <option value="JUN">JUN</option>
                        <option value="JUL">JUL</option>
                        <option value="AUG">AUG</option>
                        <option value="SEP">SEP</option>
                        <option value="OCT">OCT</option>
                        <option value="NOV">NOV</option>                                  
                        <option value="DES">DES</option>
                    
                                    
                    </select>
                    </form>
                </div>

                <div id="myDIVtrx">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">BULAN</th>
                              <?php  foreach ($getbulan_trx as $bulan_trx) { 

                                echo '<th scope="col">'.$bulan_trx['bulan'].'</th>';

                                 }  ?>
    
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              
                              <td>TOTAL USER</td>
                               <?php  foreach ($getdatatotal_trx as $tt_trx) { 

                                echo '<td>'.$tt_trx['total'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>TOTAL TARGET</td>
                              <?php  foreach ($getdatatarget_trx as $tg_trx) { 

                                echo '<td>'.$tg_trx['target'].'</td>';

                                 }  ?>
                            </tr>
                             
                          </tbody>
                        </table>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div id="pencapaian-gtv"></div>
                      <div class="row">
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycarigtv()">Search Bulan</button>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mygtv()">View Data</button>

                            
                            
                        </div>
                        <!-- <div class="col-md-12 d-none" id="daily-search-form"> -->
                        
                    </div>
                <hr class="my-4">
                <div id="myDIVcarigtv">
                    <form method="GET" action="">
                    <select class="form-control mt-4" name="gtv" onchange="this.form.submit()">
                        <option value="JAN">JAN</option>
                        <option value="FEB">FEB</option>
                        <option value="MAR">MAR</option>
                        <option value="APR">APR</option>
                        <option value="MAY">MAY</option>
                        <option value="JUN">JUN</option>
                        <option value="JUL">JUL</option>
                        <option value="AUG">AUG</option>
                        <option value="SEP">SEP</option>
                        <option value="OCT">OCT</option>
                        <option value="NOV">NOV</option>                                  
                        <option value="DES">DES</option>
                    
                                    
                    </select>
                    </form>
                </div>

                <div id="myDIVgtv">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">BULAN</th>
                              <?php  foreach ($getbulan_gtv as $bulan_gtv) { 

                                echo '<th scope="col">'.$bulan_gtv['bulan'].'</th>';

                                 }  ?>
    
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              
                              <td>TOTAL USER</td>
                               <?php  foreach ($getdatatotal_gtv as $tt_gtv) { 

                                echo '<td>'.$tt_gtv['total'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>TOTAL TARGET</td>
                              <?php  foreach ($getdatatarget_gtv as $tg_gtv) { 

                                echo '<td>'.$tg_gtv['target'].'</td>';

                                 }  ?>
                            </tr>
                             
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-6 mt-3">
            <button class="btn btn-primary btn-sm" role="button" id="search-daily">Search by Tanggal</button>
        </div>
        <div class="col-md-6 mt-3">
            <button class="btn btn-primary btn-sm" role="button" id="daily-view-data">View Data Tanggal</button>
        </div>
      
		     <div class="col-md-12 d-none" id="daily-search-form">
            <input type="date" name="" id="daily-date">       
            <button class="btn btn-info" id="btn-search-daily">Search</button>
            <p class="d-none" id="alert-daily" style="color:red">Please Select Date First</p>
        </div>
        <div class="col-md-12 d-none" id="daily-view-datatable">

        </div>
    </div> -->

    
</div> 	



<script>

function myeditanalisap() {
  var x = document.getElementById("myDIVeditanalisap");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}


function myotlet() {
  var x = document.getElementById("myDIVotlet");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcariotlet");
 
    x.style.display = "none";
  
}

function mycariotlet() {
  var x = document.getElementById("myDIVcariotlet");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVotlet");
 
    x.style.display = "none";
}


function myuser() {
  var x = document.getElementById("myDIVuser");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcariuser");
 
    x.style.display = "none";
  
}

function mycariuser() {
  var x = document.getElementById("myDIVcariuser");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVuser");
 
    x.style.display = "none";
}


function mytrx() {
  var x = document.getElementById("myDIVtrx");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcaritrx");
 
    x.style.display = "none";
  
}

function mycaritrx() {
  var x = document.getElementById("myDIVcaritrx");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVtrx");
 
    x.style.display = "none";
}


function mygtv() {
  var x = document.getElementById("myDIVgtv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcarigtv");
 
    x.style.display = "none";
  
}

function mycarigtv() {
  var x = document.getElementById("myDIVcarigtv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVgtv");
 
    x.style.display = "none";
}




    Highcharts.chart('pencapaian-user', {
    chart: {
        zoomType: 'xy'
    },
    
    title: {
        text: 'User'
    },
    xAxis: [{
         <?php if(isset($_GET['os'])){ ?>
        categories: ['<?=$_GET['os']?>'],

        <?php }else {  ?>
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        <?php } ?>
        crosshair: true
    }],
    plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
    },
    yAxis: [{ // Primary yAxis
        labels: {
          
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Target',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Total',
        type: 'column',
        yAxis: 1,
        data: [ <?php 

                foreach ($getpencapaian_user_total as $user) {
                    echo $user['total'] . ",";
                }
                  
                ?>

        ],
        color: '#52b251',
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Target',
        type: 'spline',
        data: [<?php 

                foreach ($getpencapaian_user_target as $user) {
                    echo $user['target'] . ",";
                }
                  
                ?>], 
        tooltip: {
            valueSuffix: ''
        }, 
    }],
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
                }
            }
        },
        credits: {
            enabled: false
        }
});



    Highcharts.chart('pencapaian-trx', {
    chart: {
        zoomType: 'xy'
    },
    
    title: {
        text: 'TRX'
    },
    xAxis: [{
         <?php if(isset($_GET['trx'])){ ?>
        categories: ['<?=$_GET['trx']?>'],

        <?php }else {  ?>
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        <?php } ?>
        crosshair: true
    }],
    plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
    },
    yAxis: [{ // Primary yAxis
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Target',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Total',
        type: 'column',
        yAxis: 1,
        data: [ <?php 

                foreach ($getpencapaian_trx_total as $trx) {
                    echo $trx['total'] . ",";
                }
                  
                ?>

        ],
        color: '#52b251',
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Target',
        type: 'spline',
        data: [<?php 

                foreach ($getpencapaian_trx_target as $trx) {
                    echo $trx['target'] . ",";
                }
                  
                ?>],
        
        tooltip: {
            valueSuffix: ''
        }
    }],
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
                }
            }
        },
        credits: {
            enabled: false
        }
});



    Highcharts.chart('pencapaian-gtv', {
    chart: {
        zoomType: 'xy'
    },
    
    title: {
        text: 'GTV'
    },
    xAxis: [{
        <?php if(isset($_GET['gtv'])){ ?>
        categories: ['<?=$_GET['gtv']?>'],

        <?php }else {  ?>
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        <?php } ?>
        crosshair: true
    }],
    plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
    },
    yAxis: [{ // Primary yAxis
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Target',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Total',
        type: 'column',
        yAxis: 1,
        data: [ <?php 

                foreach ($getpencapaian_gtv_total as $gtv) {
                    echo $gtv['total'] . ",";
                }
                  
                ?>

        ],
        color: '#52b251',
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Target',
        type: 'spline',
        data: [<?php 

                foreach ($getpencapaian_gtv_target as $gtv) {
                    echo $gtv['target'] . ",";
                }
                  
                ?>],
        tooltip: {
            valueSuffix: ''
        }
    }],
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
                }
            }
        },
        credits: {
            enabled: false
        }
});


Highcharts.chart('pencapaian-outlet', {
    chart: {
        zoomType: 'xy'
    },
    
    title: {
        text: 'outlet'
    },
    xAxis: [{
        <?php if(isset($_GET['ou'])){ ?>
        categories: ['<?=$_GET['ou']?>'],

        <?php }else {  ?>
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        <?php } ?>
        crosshair: true
    }],
    plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
    },
    yAxis: [{ // Primary yAxis
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Target',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Total',
        type: 'column',
        yAxis: 1,
        data: [ <?php 

                foreach ($getpencapaian_outlet_total as $outlet) {
                    echo $outlet['total'] . ",";
                }
                  
                ?>

        ],
        color: '#52b251',
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Target',
        type: 'spline',
        data: [<?php 

                foreach ($getpencapaian_outlet_target as $outlet) {
                    echo $outlet['target'] . ",";
                }
                  
                ?>],
        tooltip: {
            valueSuffix: ''
        }
    }],
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
                }
            }
        },
        credits: {
            enabled: false
        }
});








</script>
