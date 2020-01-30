<?php
//do get data daily

$getMonth = date('m');
$getYear = date('Y');
$getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
 


$getmerchant = $connect->prepare("SELECT * FROM v_pilar where kategori='merchant' and jenis='cash-in'");
$getmerchant->execute();

$getmerchant_nama = $connect->prepare("SELECT name FROM v_pilar where kategori='merchant' and jenis='cash-in'");
$getmerchant_nama->execute();
$getmerchant_volume = $connect->prepare("SELECT volume FROM v_pilar where kategori='merchant' and jenis='cash-in'");
$getmerchant_volume->execute();




$getmultifinance_nama = $connect->prepare("SELECT name FROM v_pilar where kategori='multifinances' and jenis='cash-in'");
$getmultifinance_nama->execute();
$getmultifinance_volume = $connect->prepare("SELECT volume FROM v_pilar where kategori='multifinances' and jenis='cash-in'");
$getmultifinance_volume->execute();

$getmultifinance = $connect->prepare("SELECT * FROM v_pilar where kategori='multifinances' and jenis='cash-in'");
$getmultifinance->execute();



$getbumn_nama = $connect->prepare("SELECT name FROM v_pilar where kategori='BUMN' and jenis='cash-in'");
$getbumn_nama->execute();
$getbumn_volume = $connect->prepare("SELECT volume FROM v_pilar where kategori='BUMN' and jenis='cash-in'");
$getbumn_volume->execute();

$getdatabumn= $connect->prepare("SELECT * FROM v_pilar where kategori='BUMN' and jenis='cash-in'");
$getdatabumn->execute();


$getapps_nama = $connect->prepare("SELECT name FROM v_pilar where kategori='apps' and jenis='cash-in'");
$getapps_nama->execute();
$getapps_volume = $connect->prepare("SELECT volume FROM v_pilar where kategori='apps' and jenis='cash-in'");
$getapps_volume->execute();
$getapps = $connect->prepare("SELECT * FROM v_pilar where kategori='apps' and jenis='cash-in'");
$getapps->execute();


$getanalisa_pencapaian = $connect->prepare("SELECT analisa FROM p_analisa");
$getanalisa_pencapaian->execute();
$getanalisa = $getanalisa_pencapaian->fetch();






?>

<style type="text/css">
@import 'https://code.highcharts.com/css/highcharts.css';
#mymerchant {
  display: none;
}
#mymultifinances {
  display: none;
}
#mybumn {
  display: none;
}
#myapps {
  display: none;
}
#container {
    height: 400px;
    max-width: 800px;
    min-width: 320px;
    margin: 0 auto;
}
.highcharts-pie-series .highcharts-point {
    stroke: #EDE;
    stroke-width: 2px;
}
.highcharts-pie-series .highcharts-data-label-connector {
    stroke: silver;
    stroke-dasharray: 2, 2;
    stroke-width: 2px;
}</style>
<div class="col-md-12 mb-5 ">
    <h1 class="display-6 mb-6">Data 4 pilar</h1>
</div>  

<div class="col-md-6">
    <div id="merchant"></div>

    <Center><button class="btn btn-primary btn-sm" role="button"  onclick="mymerchant()">View data</button></Center>
    <hr class="my-4">
    <div id="mymerchant">
        <table class="table table-striped">
          <thead>
            <tr>
             
              <?php  foreach ($getmerchant_nama as $merchant_nama) { 

                echo '<th scope="col">'.$merchant_nama['name'].'</th>';

                 }  ?>

            </tr>
          </thead>
          <tbody>
            
            <tr>
              
               <?php  foreach ($getmerchant_volume as $merchant_volume) { 

                echo '<td>'.$merchant_volume['volume'].'</td>';

                 }  ?>
            </tr>
          
             
          </tbody>
        </table>
</div>
</div>
<div class="col-md-6">
    <div id="multifinances"></div>
    <Center><button class="btn btn-primary btn-sm" role="button" onclick="mymultifinances()">View data</button></Center>
    <hr class="my-4">
    <div id="mymultifinances">
        <table class="table table-striped">
          <thead>
            <tr>
             
              <?php  foreach ($getmultifinance_nama as $multifinance_nama) { 

                echo '<th scope="col">'.$multifinance_nama['name'].'</th>';

                 }  ?>

            </tr>
          </thead>
          <tbody>
            
            <tr>
              
               <?php  foreach ($getmultifinance_volume as $multifinance_volume) { 

                echo '<td>'.$multifinance_volume['volume'].'</td>';

                 }  ?>
            </tr>
          
             
          </tbody>
        </table>
</div>
</div>
<div class="col-md-6">
    <div id="bumn"></div>
    <Center><button class="btn btn-primary btn-sm" role="button" onclick="mybumn()">View data</button></Center>
    <hr class="my-4">
    <div id="mybumn">
        <table class="table table-striped">
          <thead>
            <tr>
             
              <?php  foreach ($getbumn_nama as $bumn_nama) { 

                echo '<th scope="col">'.$bumn_nama['name'].'</th>';

                 }  ?>

            </tr>
          </thead>
          <tbody>
            
            <tr>
              
               <?php  foreach ($getbumn_volume as $bumn_volume) { 

                echo '<td>'.$bumn_volume['volume'].'</td>';

                 }  ?>
            </tr>
          
             
          </tbody>
        </table>
</div>
</div>
<div class="col-md-6">
    <div id="data-apps"></div>
    <Center><button class="btn btn-primary btn-sm" role="button" onclick="myapps()">View data</button></Center>
    <hr class="my-4">
    <div id="myapps">
        <table class="table table-striped">
          <thead>
            <tr>
             
              <?php  foreach ($getapps_nama as $apps_nama) { 

                echo '<th scope="col">'.$apps_nama['name'].'</th>';

                 }  ?>

            </tr>
          </thead>
          <tbody>
            
            <tr>
              
               <?php  foreach ($getapps_volume as $apps_volume) { 

                echo '<td>'.$apps_volume['volume'].'</td>';

                 }  ?>
            </tr>
          
             
          </tbody>
        </table>
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



<script>

function mymerchant() {
  var x = document.getElementById("mymerchant");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function mymultifinances() {
  var x = document.getElementById("mymultifinances");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 

 function mybumn() {
  var x = document.getElementById("mybumn");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 

 function myapps() {
  var x = document.getElementById("myapps");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 
 
Highcharts.chart('merchant', {



    chart: {
        styledMode: true,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },


    title: {
        text: 'Merchant'
    },

   
    
    exporting: {
        buttons: {
            contextButton: {
                menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
            }
        }
    },
    credits: {
        enabled: false
    },

    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage}',
                connectorColor: 'silver'
            }
        }
    },

   
    series: [{
        type: 'pie',
        allowPointSelect: true,
        colorByPoint: true,
        keys: ['name', 'y', 'selected', 'sliced'],

        data: [ <?php 

                foreach ($getmerchant as $merchant) {
                    echo "['".$merchant['name'] . "',".$merchant['volume'] .  ",false],";
                }
                  
                ?>

           
        ],
        showInLegend: true
    }]
});


Highcharts.chart('multifinances', {



    chart: {
        styledMode: true,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },


    title: {
        text: 'Multifinance'
    },

   
    
    exporting: {
        buttons: {
            contextButton: {
                menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
            }
        }
    },
    credits: {
        enabled: false
    },

    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage}',
                connectorColor: 'silver'
            }
        }
    },


    series: [{
        type: 'pie',
        allowPointSelect: true,
        colorByPoint: true,
        keys: ['name', 'y', 'selected', 'sliced'],

        data: [ <?php 

                foreach ($getmultifinance as $multifinance) {
                    echo "['".$multifinance['name'] . "',".$multifinance['volume'] .  ",false],";
                }
                  
                ?>

           
        ],
        showInLegend: true
    }]
});


Highcharts.chart('bumn', {



    chart: {
        styledMode: true,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },


    title: {
        text: 'BUMN'
    },

   
    
    exporting: {
        buttons: {
            contextButton: {
                menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
            }
        }
    },
    credits: {
        enabled: false
    },

    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage}',
                connectorColor: 'silver'
            }
        }
    },


    series: [{
        type: 'pie',
        allowPointSelect: true,
        colorByPoint: true,
        keys: ['name', 'y', 'selected', 'sliced'],

        data: [ <?php 

                foreach ($getdatabumn as $data) {
                    echo "['".$data['name'] . "',".$data['volume'] .  ",false],";
                }
                  
                ?>

           
        ],
        showInLegend: true
    }]
});


Highcharts.chart('data-apps', {



    chart: {
        styledMode: true,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },


    title: {
        text: 'Apps'
    },

   
    
    exporting: {
        buttons: {
            contextButton: {
                menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
            }
        }
    },
    credits: {
        enabled: false
    },

    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage}',
                connectorColor: 'silver'
            }
        }
    },


    series: [{
        type: 'pie',
        allowPointSelect: true,
        colorByPoint: true,
        keys: ['name', 'y', 'selected', 'sliced'],

        data: [ <?php 

                foreach ($getapps as $apps) {
                    echo "['".$apps['name'] . "',".$apps['volume'] .  ",false],";
                }
                  
                ?>

           
        ],
        showInLegend: true
    }]
});

</script>
