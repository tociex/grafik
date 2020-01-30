<?php
//do get data daily

$getMonth = date('m');
$getYear = date('Y');
 $getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
 
// $tgl= echo '<th scope="col">'.date('d M j', strtotime($tgl_outlet['date'])).'</th>';



if(isset($_GET['daily'])){

$month= date("m", strtotime($_GET['daily']));



$titel_mtd='Mtd '.date('d M Y', strtotime($_GET['daily']));

$titel_target='Target '.date('M Y', strtotime($_GET['daily']));

$gettarget = $connect->prepare("SELECT * FROM m_target where month='$month' and jenis='cash-in'");
$gettarget->execute();
$target = $gettarget->fetch();

$getestimasi = $connect->prepare("SELECT * FROM m_estimasi where date='$_GET[daily]' and jenis='cash-in'");
$getestimasi->execute();
$estimasi = $getestimasi->fetch();



$getmtd = $connect->prepare("SELECT * FROM mtd where jenis='cash-in' and date='$_GET[daily]'");
$getmtd ->execute();
$mtd= $getmtd->fetch();

}else{

$titel_mtd='Mtd '.date('d M Y', strtotime($getNow));

$titel_target='Target '.date('M Y', strtotime($getNow));


$gettarget = $connect->prepare("SELECT * FROM m_target where month='$getMonth' and jenis='cash-in'");
$gettarget->execute();
$target = $gettarget->fetch();

$getestimasi = $connect->prepare("SELECT * FROM m_estimasi where date='$getNow' and jenis='cash-in'");
$getestimasi->execute();
$estimasi = $getestimasi->fetch();



$getmtd = $connect->prepare("SELECT * FROM mtd where jenis='cash-in' and date='$getNow'");
$getmtd ->execute();
$mtd= $getmtd->fetch();

}



// echo $data_user = $target['user'].','.$mtd['user'].','.$estimasi['user'];
// echo "<br/>";
// echo $data_outlet = $target['outlet'].','.$mtd['outlet'].','.$estimasi['outlet'];
// echo "<br/>";
// echo $data_trx = $target['trx'].','.$mtd['trx'].','.$estimasi['trx'];




$data_outlet = $target['outlet'].','.$target['user'].','.$target['trx'];


$data_user = $mtd['outlet'].','.$mtd['user'].','.$mtd['trx'];

$data_trx = $estimasi['outlet'].','.$estimasi['user'].','.$estimasi['trx'];

$data_outlet_ret= round($mtd['outlet']/$target['outlet']* 100,2);
$data_user_ret= round($mtd['user']/$target['user']* 100,2);
$data_trx_ret= round($mtd['trx']/$target['trx']* 100,2);
$data_vol_ret= round($mtd['volume']/$target['volume']* 100,2);

$data_vol_target= $target['volume'];
$data_vol= $mtd['volume'];
$data_est=$estimasi['volume'];


// $daily_user = $getdaily_user->fetch();
// $data_user=$daily_user['target_aug19'].','.$daily_user['mtd24_aug19'].','.$daily_user['estimasi'];

// $data_user_ret=$daily_user['retention'];

// $getdaily_outlet = $connect->prepare("SELECT * FROM daily where tipe='OUTLET' and jenis='cash-in'");
// $getdaily_outlet->execute();
// $daily_outlet = $getdaily_outlet->fetch();
// $data_outlet=$daily_outlet['target_aug19'].','.$daily_outlet['mtd24_aug19'].','.$daily_outlet['estimasi'];
// $data_outlet_ret=$daily_outlet['retention'];


// $getdaily_trx = $connect->prepare("SELECT * FROM daily where tipe='TRX' and jenis='cash-in'");
// $getdaily_trx->execute();
// $daily_trx = $getdaily_trx->fetch();
// $data_trx=$daily_trx['target_aug19'].','.$daily_trx['mtd24_aug19'].','.$daily_trx['estimasi'];
// $data_trx_ret=$daily_trx['retention'];


// $getdaily_vol = $connect->prepare("SELECT * FROM daily where tipe='VOLUME' and jenis='cash-in'");
// $getdaily_vol->execute();
// $daily_vol = $getdaily_vol->fetch();
// $data_vol_target=$daily_vol['target_aug19'];
// $data_vol= $daily_vol['mtd24_aug19'];
// $data_est=$daily_vol['estimasi'];
// $data_vol_ret=$daily_vol['retention'];









?>

<style>
#myDIVdaily {
  display: none;
}

#myDIVcaridaily {
  display: none;
}


#myDIVeditanalisad{
display: none;

}

</style>
<div class="col-md-9 mb-5 ">
    <h1 class="display-6 mb-6">Data Daily Cash In</h1>



    <div class="col-md-12" id="daily-chart">
        <div class="row">
            <div class="col-md-7 mt-4">
                <div id="daily-all"></div>
                   
                <hr class="my-4">
            </div>
            <div class="col-md-5 mt-4">
                <div id="daily-volume"></div>
                    
                <hr class="my-4">
            </div>

             
            
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <button class="btn btn-primary btn-sm" role="button" onclick="mycaridaily()">Search Tanggal</button>
            </div>
            <div class="col-md-6 mt-3">
                <button class="btn btn-primary btn-sm" role="button" onclick="mydaily()">View Data</button>

                
                
            </div>
                        
            </div>
            <hr class="my-4">
            <div id="myDIVcaridaily">
                <form method="GET" action="">
                    <div class="form-group  mt-4">
                            <label>Tanggal</label>
                            <input type="date" name="daily" class="form-control" required="true">
                        </div>

                        <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Cari Data</button>
                        </div>
                    </form>
                </div>

                <div id="myDIVdaily">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Target</th>
                              <th scope="col">MTD</th>
                              <th scope="col">Estimasi</th>
                              <th scope="col">Presentase</th>
                              
    
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              
                              <td>OTLET</td>
                              <td><?=$target['outlet']?></td>
                              <td><?=$mtd['outlet']?></td>
                              <td><?=$estimasi['outlet']?></td>
                              <td><?=$data_outlet_ret?>%</td>
                              
                            </tr>
                            
                            <tr>
                              
                              <td>USER</td>
                              <td><?=$target['user']?></td>
                              <td><?=$mtd['user']?></td>
                              <td><?=$estimasi['user']?></td>
                              <td><?=$data_user_ret?>%</td>
                              
                            </tr>
                             <tr>
                              
                              <td>TRX</td>
                              <td><?=$target['trx']?></td>
                              <td><?=$mtd['trx']?></td>
                              <td><?=$estimasi['trx']?></td>
                              <td><?=$data_trx_ret?>%</td>
                              
                            </tr>


                            <tr>
                              
                              <td>Volume</td>
                              <td><?=$target['volume']?></td>
                              <td><?=$mtd['volume']?></td>
                              <td><?=$estimasi['volume']?></td>
                              <td><?=$data_vol_ret?>%</td>
                              
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

    
</div> 	

<div class="col-md-3 mb-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hasil Analisa</h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php 


$getanalisa_pencapaian_d = $connect->prepare("SELECT d_analisa FROM p_analisa where jenis='cash-in'");
$getanalisa_pencapaian_d->execute();
$getanalisa_d = $getanalisa_pencapaian_d->fetch();
echo $getanalisa_d['d_analisa'] ?></h6>
            <p class="card-text"></p>
            <button class="btn btn-success btn-sm" role="button" onclick="myeditanalisad()">edit</button>
  <br/>
             <div id="myDIVeditanalisad">
<form role="form" method="POST" action="">
<br/>
    <div class="form-group">
       
        <input type="text" value="<?php echo $getanalisa_d['d_analisa'] ?>" name="d_analisa" id="p_analisa" class="form-control"/>
    </div>
   
    <div class="margiv-top-10">
        <input type="submit" name="ubah_d" class="btn btn-primary btn-sm" value="Update" >
        
    </div>
</form>
                </div>
        </div>
    </div>
</div>  

<?php
if(isset($_POST['ubah_d'])) {

    $d_analisa = $_POST['d_analisa'];
   
    $sql = "UPDATE p_analisa SET d_analisa='$d_analisa' WHERE jenis='cash-in'";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(":d_analisa", $d_analisa, PDO::PARAM_STR);
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}
?>

<script>

function myeditanalisad() {
  var x = document.getElementById("myDIVeditanalisad");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}


function whiteSpacer(howMany) {
  var spaceString = '';

  while (howMany) {
    spaceString += '&nbsp;';
    howMany--;
  }

  return spaceString;
}

function mydaily() {
  var x = document.getElementById("myDIVdaily");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcaridaily");
 
    x.style.display = "none";
  
}

function mycaridaily() {
  var x = document.getElementById("myDIVcaridaily");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVdaily");
 
    x.style.display = "none";
}


Highcharts.chart('daily-all', {
    chart: {
        type: 'column'
    },

    title: {
        useHTML: true,
        text: '<?=$data_outlet_ret?>%'+whiteSpacer(35) +'<?=$data_user_ret?>% '+whiteSpacer(35) +'<?=$data_trx_ret?>%',
        floating: true,
            style: {
                color: '#ff0017',
                fontWeight: 'bold',
                align: 'center',
                fontSize: '11px',

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

    xAxis: {
        categories: ['Outlet', 'User', 'TRX'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: ''
        }
    },
    
    series: [{
        name: '<?=$titel_target?>',
        data: [<?=$data_outlet?>],
        color: '#375da1',
    }, {
        name: '<?=$titel_mtd?>',
        data: [<?=$data_user?>],
        color: '#4472c4',
    }, {
        name: 'Estimasi',
        data: [<?=$data_trx?>],
        color: '#a7acdb',
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
    },

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});





Highcharts.chart('daily-volume', {
    chart: {
        type: 'column'
    },

    title: {
        text: '<?=$data_vol_ret?>%',
        floating: true,
            style: {
                color: '#ff0017',
                fontWeight: 'bold',
                fontSize: '11px',

            }
    },
        

    subtitle: {
        text: ''
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

    xAxis: {
        categories: ['Volume'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: ''
        }
    },

    series: [{
        name: '<?=$titel_target?>',
        data: [<?=$data_vol_target?>],
        color: '#375da1',
    }, {
        name: '<?=$titel_mtd?>',
        data: [<?=$data_vol?>],
        color: '#4472c4',
    }, {
        name: 'Estimasi',
        data: [<?=$data_est?>],
        color: '#a7acdb',
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
    },

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});


</script>
