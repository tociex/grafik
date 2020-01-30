<?php
//do get data daily

$getMonth = date('m');
$getYear = date('Y');
$getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
 
$getbulan_mau = $connect->prepare("SELECT bulan FROM mau where jenis='cash-in' order by id asc");
$getbulan_mau->execute();

$getretention_mau = $connect->prepare("SELECT retention FROM mau where jenis='cash-in' order by id asc");
$getretention_mau->execute();

$gettotal_mau = $connect->prepare("SELECT total FROM mau where jenis='cash-in' order by id asc");
$gettotal_mau->execute();

$getrte_mau = $connect->prepare("SELECT rte FROM mau where jenis='cash-in' order by id asc");
$getrte_mau->execute();

$getnew_mau = $connect->prepare("SELECT new FROM mau where jenis='cash-in' order by id asc");
$getnew_mau->execute();


if(isset($_GET['mau'])){

$getbulan = $connect->prepare("SELECT bulan FROM mau where jenis='cash-in' and bulan='$_GET[mau]' order by id asc");
$getbulan->execute();

$getretention = $connect->prepare("SELECT retention FROM mau where jenis='cash-in' and bulan='$_GET[mau]' order by id asc");
$getretention->execute();

$gettotal = $connect->prepare("SELECT total FROM mau where jenis='cash-in' and bulan='$_GET[mau]' order by id asc");
$gettotal->execute();

$getrte = $connect->prepare("SELECT rte FROM mau where jenis='cash-in' and bulan='$_GET[mau]' order by id asc");
$getrte->execute();

$getnew = $connect->prepare("SELECT new FROM mau where jenis='cash-in' and bulan='$_GET[mau]' order by id asc");
$getnew->execute();

}else{

$getbulan = $connect->prepare("SELECT bulan FROM mau where jenis='cash-in' order by id asc");
$getbulan->execute();

$getretention = $connect->prepare("SELECT retention FROM mau where jenis='cash-in' order by id asc");
$getretention->execute();

$gettotal = $connect->prepare("SELECT total FROM mau where jenis='cash-in' order by id asc");
$gettotal->execute();

$getrte = $connect->prepare("SELECT rte FROM mau where jenis='cash-in' order by id asc");
$getrte->execute();

$getnew = $connect->prepare("SELECT new FROM mau where jenis='cash-in' order by id asc");
$getnew->execute();


}





?>
<style type="text/css"> 

#myDIVmau {
  display: none;
}

#myDIVcarimau {
  display: none;
}

#myDIVeditanalisam{
display: none;

}
    </style>

<div class="col-md-9 mb-5 ">
    <h1 class="display-6 mb-6">MAU Retention Tracking Cash In</h1>



    <div class="col-md-12" id="daily-chart">
        <div class="row">
         <div class="col-md-12 mt-4">
            <div id="data-mau"></div>
                    
                <hr class="my-4">
                 <div class="row">
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycarimau()">Search Bulan</button>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mymau()">View Data</button>

                            
                            
                        </div>
                        <!-- <div class="col-md-12 d-none" id="daily-search-form"> -->
                        
                    </div>
            </div> 
            
        </div>
        <div class="row">
                <div id="myDIVcarimau">
                    <form method="GET" action="">
                    <select class="form-control mt-4" name="mau" onchange="this.form.submit()">
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

                <div id="myDIVmau">
                   <br/>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">BULAN</th>
                              <?php  foreach ($getbulan_mau as $bulan_mau) { 

                                echo '<th scope="col">'.$bulan_mau['bulan'].'</th>';

                                 }  ?>
    
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              
                              <td>TOTAL</td>
                               <?php  foreach ($gettotal_mau as $tt_mau) { 

                                echo '<td>'.$tt_mau['total'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>NEW</td>
                              <?php  foreach ($getnew_mau as $tg_mau) { 

                                echo '<td>'.$tg_mau['new'].'</td>';

                                 }  ?>
                            </tr>
                            <tr>
                        
                              <td>RTE</td>
                              <?php  foreach ($getrte_mau as $tgrte_mau) { 

                                echo '<td>'.$tgrte_mau['rte'].'</td>';

                                 }  ?>
                            </tr>

                            <tr>
                        
                              <td>Retention</td>
                              <?php  foreach ($getretention_mau as $tgretention_mau) { 

                                echo '<td>'.$tgretention_mau['retention'].'%</td>';

                                 }  ?>
                            </tr>
                             
                          </tbody>
                        </table>
                </div>
                        
            </div>
            <hr class="my-4">
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

<div class="col-md-3 mb-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hasil Analisa</h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php 


$getanalisa_pencapaian_m = $connect->prepare("SELECT ma_analisa FROM p_analisa where jenis='cash-in'");
$getanalisa_pencapaian_m->execute();
$getanalisa_m = $getanalisa_pencapaian_m->fetch();
echo $getanalisa_m['ma_analisa'] ?></h6>
            <p class="card-text"></p>
            <button class="btn btn-success btn-sm" role="button" onclick="myeditanalisam()">edit</button>
  <br/>
             <div id="myDIVeditanalisam">
<form role="form" method="POST" action="">
<br/>
    <div class="form-group">
       
        <input type="text" value="<?php echo $getanalisa_m['ma_analisa'] ?>" name="m_analisa" id="m_analisa" class="form-control"/>
    </div>
   
    <div class="margiv-top-10">
        <input type="submit" name="ubah_m" class="btn btn-primary btn-sm" value="Update" >
        
    </div>
</form>
                </div>
        </div>
    </div>
</div>  

<?php
if(isset($_POST['ubah_m'])) {

    $m_analisa = $_POST['m_analisa'];
   
    $sql = "UPDATE p_analisa SET ma_analisa='$m_analisa' WHERE jenis='cash-in'";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(":m_analisa", $m_analisa, PDO::PARAM_STR);
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}
?>

<script>

function myeditanalisam() {
  var x = document.getElementById("myDIVeditanalisam");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function mymau() {
  var x = document.getElementById("myDIVmau");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcarimau");
 
    x.style.display = "none";
  
}

function mycarimau() {
  var x = document.getElementById("myDIVcarimau");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVmau");
 
    x.style.display = "none";
}

function whiteSpacer(howMany) {
  var spaceString = '';

  while (howMany) {
    spaceString += '&nbsp;';
    howMany--;
  }

  return spaceString;
}
Highcharts.chart('data-mau', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'MAU Retention Tracking'
    },



    // subtitle: {
    //     useHTML: true,
    //     text: '<?php 

    //             foreach ($getretention as $ret) {
    //                 echo $ret['retention']."%,";
    //             }
                  
    //             ?>',
    //     floating: true,
    //         style: {
    //             color: '#ff0017',
    //             fontWeight: 'bold',
    //             align: 'center',
    //             fontSize: '11px',

    //         }
    // },
    xAxis: {
        categories: [<?php 

                foreach ($getbulan as $bulan) {
                    echo "'".$bulan['bulan'] ."'". ",";
                }
                  
                ?>]
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        },
        stackLabels: {
            enabled: false,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
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
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true

            }
        }
    },





    
    series: [ {
        showInLegend: false, 
        name: 'Total',
        color: '#FFF',
        data: [<?php 

                foreach ($gettotal as $total) {
                    echo $total['total']. ",";
                }
                  
                ?>]
    }, {
        name: 'New',
        color: '#339900',
        data: [<?php 

                foreach ($getnew as $new) {
                    echo $new['new']. ",";
                }
                  
                ?>]
    }, {
        name: 'RTE',
        color: '#006600',
        data: [<?php 

                foreach ($getrte as $rte) {
                    echo $rte['rte']. ",";
                }
                  
                ?>]
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
