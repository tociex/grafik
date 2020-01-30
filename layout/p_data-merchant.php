<?php
//do get data daily

$getMonth = date('m');
$getYear = date('Y');
$getNow = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
 





if(isset($_GET['otletbl1']) &&  isset($_GET['otletbl2'])){

    $getkategori_outlet = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='OUTLET' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_outlet->execute();


    $getmerchant_outlet_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='indomaret' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'  ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit");
    $getmerchant_outlet_indomaret->execute();

    $getmerchant_outlet_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='alfamart' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_outlet_alfamart->execute();

     
    $gettgl_outlet = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='OUTLET' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_outlet->execute();



    $gettgl_user = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='USER' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_user->execute();

    $gettgl_trx = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='TRX' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_trx->execute();


    $gettgl_gtv = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='GTV' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_gtv->execute();




    $getkategori_user = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='USER' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_user->execute();

    $getmerchant_user_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='indomaret' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'  ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_user_indomaret->execute();
    $getmerchant_user_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='alfamart' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'  ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_user_alfamart->execute();




    $getkategori_trx = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='TRX' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_trx->execute();

    $getmerchant_trx_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='indomaret'  and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'  ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_trx_indomaret->execute();

    $getmerchant_trx_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='alfamart' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_trx_alfamart->execute();




    $getkategori_gtv = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='GTV' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_gtv->execute();
    $getmerchant_gtv_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='indomaret' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_gtv_indomaret->execute();

    $getmerchant_gtv_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='alfamart' and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getmerchant_gtv_alfamart->execute();




}else if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){

    $otlet1=str_replace("+", " ", $_GET['otletnm1']);
    $otlet2=str_replace("+", " ", $_GET['otletnm2']);

    $gettgl_outlet = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='OUTLET'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_outlet->execute();

    $getkategori_outlet = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_outlet->execute();

  
    $getmerchant_outlet_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='$otlet1' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_outlet_indomaret->execute();

    $getmerchant_outlet_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='$otlet2' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_outlet_alfamart->execute();


    $gettgl_user = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='USER'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_user->execute();


    $getkategori_user = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_user->execute();

    $getmerchant_user_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='$otlet1' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_user_indomaret->execute();
    $getmerchant_user_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='$otlet2' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_user_alfamart->execute();

    

    $gettgl_trx = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='TRX'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_trx->execute();



    $getkategori_trx = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_trx->execute();

    $getmerchant_trx_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='$otlet1' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_trx_indomaret->execute();

    $getmerchant_trx_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='$otlet2' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_trx_alfamart->execute();



    $gettgl_gtv = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='GTV'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_gtv->execute();

    $getkategori_gtv = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_gtv->execute();
    $getmerchant_gtv_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='$otlet1' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_gtv_indomaret->execute();

    $getmerchant_gtv_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='$otlet2' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_gtv_alfamart->execute();







}else {

    $gettgl_outlet = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='OUTLET'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_outlet->execute();

    $getkategori_outlet = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_outlet->execute();

  
    $getmerchant_outlet_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='indomaret' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_outlet_indomaret->execute();

    $getmerchant_outlet_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='OUTLET' and jenis='purchase' and name='alfamart' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_outlet_alfamart->execute();


    $gettgl_user = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='USER'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_user->execute();


    $getkategori_user = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_user->execute();

    $getmerchant_user_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='indomaret' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_user_indomaret->execute();
    $getmerchant_user_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='USER' and jenis='purchase' and name='alfamart' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_user_alfamart->execute();

    

    $gettgl_trx = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='TRX'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_trx->execute();



    $getkategori_trx = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_trx->execute();

    $getmerchant_trx_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='indomaret' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_trx_indomaret->execute();

    $getmerchant_trx_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='TRX' and jenis='purchase' and name='alfamart' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_trx_alfamart->execute();



    $gettgl_gtv = $connect->prepare("SELECT date
    FROM merchant
    WHERE jenis='purchase' and tipe='GTV'
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $gettgl_gtv->execute();

    $getkategori_gtv = $connect->prepare("SELECT date
    FROM merchant
    GROUP BY date
    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
    $getkategori_gtv->execute();
    $getmerchant_gtv_indomaret = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='indomaret' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_gtv_indomaret->execute();

    $getmerchant_gtv_alfamart = $connect->prepare("SELECT value FROM merchant where tipe='GTV' and jenis='purchase' and name='alfamart' ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC limit 7");
    $getmerchant_gtv_alfamart->execute();







}


















?>

<style>
#myDIVmerchantotlet {
  display: none;
}

#myDIVcarimerchantotlet {
  display: none;
}

#myDIVcarimerchantyaotlet {
  display: none;
}


#myDIVeditanalisamr{
display: none;

}

</style>
<div class="col-md-9 mb-5 ">
    <h1 class="display-6 mb-6">Merchant  Purchase</h1>



    <div class="col-md-12" id="daily-chart">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div id="merchant-outlet"></div>
                    
            </div>
            <div class="col-md-6 mt-4">
                <div id="merchant-user"></div>
                    
                <hr class="my-4">
            </div>
            <div class="col-md-6 mt-4">
                <div id="merchant-trx"></div>
                    
                <hr class="my-4">
            </div>
            <div class="col-md-6 mt-4">
                <div id="merchant-gtv"></div>
                      
                <hr class="my-4">
            </div>


            <div class="col-md-6 mt-4">
            <div class="row">
                        <div class="col-md-4 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycarimerchantotlet()">Search Tgl</button>
                        </div>
                        <div class="col-md-4 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mycarimerchantnyaotlet()">Merchant</button>
                        </div>
                        <div class="col-md-4 mt-3">
                            <button class="btn btn-primary btn-sm" role="button" onclick="mymerchantotlet()">View Data</button>

                            
                            
                        </div>
                        
                    </div>
                <hr class="my-4">
                 <div id="myDIVcarimerchantotlet">
                    <form method="GET" action="">
                        <div class="form-group  mt-4">
                            <label>Dari</label>
                            <input type="date" name="otletbl1" class="form-control" required="true">
                        </div>
                        <div class="form-group mt-4">
                            <label>Sampai</label>
                            <input type="date" name="otletbl2" class="form-control" required="true">
                        </div>
                        <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Cari Data</button>
                        </div>
                                           
                     
                    </form>
                </div>

                <div id="myDIVcarimerchantyaotlet">
                    <form method="GET" action="">
                        <div class="form-group  mt-4">
                            <label>Pilih Merchant</label>
                            <select class="form-control" name="otletnm1">
                            <?php    
                                $pilihname_outlet1 = $connect->prepare("SELECT name
                                FROM merchant
                                where jenis='purchase' and tipe='OUTLET'
                                GROUP BY name
                                ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                $pilihname_outlet1->execute();

                    

                                foreach ($pilihname_outlet1 as $name_outlet1) { 


                                    echo '<option value="'.$name_outlet1['name'].'">'.$name_outlet1['name'].'</option>';
                                }
                                 ?>
             
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label>Pilih Merchant</label>
                           <select class="form-control" name="otletnm2">
                                <?php    
                                $pilihname_outlet2 = $connect->prepare("SELECT name
                                FROM merchant
                                where jenis='purchase' and tipe='OUTLET'
                                GROUP BY name
                                ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                $pilihname_outlet2->execute();

                    

                                foreach ($pilihname_outlet2 as $name_outlet2) { 


                                    echo '<option value="'.$name_outlet2['name'].'">'.$name_outlet2['name'].'</option>';
                                }
                                 ?>
             
                            </select>
                        </div>
                        <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Cari Data</button>
                        </div>
                                           
                     
                    </form>
                </div>

                <div id="myDIVmerchantotlet">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">OUTLET</th>
                                  <?php  foreach ($gettgl_outlet as $tgl_outlet) { 

                                    echo '<th scope="col">'.date('d M Y', strtotime($tgl_outlet['date'])).'</th>';

                                     }  ?>
        
                                </tr>
                              </thead>
                              <tbody>
                                
                                 <?php  

                            
                                    $getname_outlet = $connect->prepare("SELECT name
                                    FROM merchant
                                    where jenis='purchase' and tipe='OUTLET'
                                    GROUP BY name
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getname_outlet->execute();

                        

                                    foreach ($getname_outlet as $name_outlet) { 


                                        echo '<tr>
                                                              
                                        <td>'.$name_outlet['name'].'</td>';

                                    if(isset($_GET['otletbl1']) &&  isset($_GET['otletbl2'])){

                                    $getvalue_outlet = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='OUTLET' and name='$name_outlet[name]'
                                    and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_outlet->execute();

                                    }else{
                                    


                                     
                                    $getvalue_outlet = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='OUTLET' and name='$name_outlet[name]'
                                    
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_outlet->execute();

                                    }



                                    foreach ($getvalue_outlet as $value_outlet) { 

                                        echo '<td>'.$value_outlet['value'].'</td>';

                                         }
                                                               
                                        echo '</tr>';

                                    }

                                    ?>
                                                            
                                 
                              </tbody>
                            </table>




                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">USER</th>
                                  <?php  foreach ($gettgl_user as $tgl_user) { 

                                    echo '<th scope="col">'.date('d M Y', strtotime($tgl_user['date'])).'</th>';

                                     }  ?>
        
                                </tr>
                              </thead>
                              <tbody>
                                
                                 <?php  

                            
                                    $getname_user = $connect->prepare("SELECT name
                                    FROM merchant
                                    where jenis='purchase' and tipe='USER'
                                    GROUP BY name
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getname_user->execute();

                        

                                    foreach ($getname_user as $name_user) { 


                                        echo '<tr>
                                                              
                                        <td>'.$name_user['name'].'</td>';

                                    if(isset($_GET['otletbl1']) &&  isset($_GET['otletbl2'])){

                                    $getvalue_user = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='USER' and name='$name_user[name]'
                                    and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_user->execute();

                                    }else{
                                    


                                     
                                    $getvalue_user = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='USER' and name='$name_user[name]'
                                    
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_user->execute();

                                    }



                                    foreach ($getvalue_user as $value_user) { 

                                        echo '<td>'.$value_user['value'].'</td>';

                                         }
                                                               
                                        echo '</tr>';

                                    }

                                    ?>
                                                            
                                 
                              </tbody>
                            </table>




                                 <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">TRX</th>
                                  <?php  foreach ($gettgl_trx as $tgl_trx) { 

                                    echo '<th scope="col">'.date('d M Y', strtotime($tgl_trx['date'])).'</th>';

                                     }  ?>
        
                                </tr>
                              </thead>
                              <tbody>
                                
                                 <?php  

                            
                                    $getname_trx = $connect->prepare("SELECT name
                                    FROM merchant
                                    where jenis='purchase' and tipe='TRX'
                                    GROUP BY name
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getname_trx->execute();

                        

                                    foreach ($getname_trx as $name_trx) { 


                                        echo '<tr>
                                                              
                                        <td>'.$name_trx['name'].'</td>';

                                    if(isset($_GET['otletbl1']) &&  isset($_GET['otletbl2'])){

                                    $getvalue_trx = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='TRX' and name='$name_trx[name]'
                                    and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_trx->execute();

                                    }else{
                                    


                                     
                                    $getvalue_trx = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='TRX' and name='$name_trx[name]'
                                    
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_trx->execute();

                                    }



                                    foreach ($getvalue_trx as $value_trx) { 

                                        echo '<td>'.$value_trx['value'].'</td>';

                                         }
                                                               
                                        echo '</tr>';

                                    }

                                    ?>
                                                            
                                 
                              </tbody>
                            </table>



                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">GTV</th>
                                  <?php  foreach ($gettgl_gtv as $tgl_gtv) { 

                                    echo '<th scope="col">'.date('d M Y', strtotime($tgl_gtv['date'])).'</th>';

                                     }  ?>
        
                                </tr>
                              </thead>
                              <tbody>
                                
                                 <?php  

                            
                                    $getname_gtv = $connect->prepare("SELECT name
                                    FROM merchant
                                    where jenis='purchase' and tipe='GTV'
                                    GROUP BY name
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getname_gtv->execute();

                        

                                    foreach ($getname_gtv as $name_gtv) { 


                                        echo '<tr>
                                                              
                                        <td>'.$name_gtv['name'].'</td>';

                                    if(isset($_GET['otletbl1']) &&  isset($_GET['otletbl2'])){

                                    $getvalue_gtv = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='GTV' and name='$name_gtv[name]'
                                    and date BETWEEN '$_GET[otletbl1]' AND '$_GET[otletbl2]'
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_gtv->execute();

                                    }else{
                                    


                                     
                                    $getvalue_gtv = $connect->prepare("SELECT value
                                    FROM merchant
                                    where jenis='purchase' and tipe='GTV' and name='$name_gtv[name]'
                                    
                                    ORDER BY STR_TO_DATE( date, '%d-%m-%Y' ) ASC");
                                    $getvalue_gtv->execute();

                                    }



                                    foreach ($getvalue_gtv as $value_gtv) { 

                                        echo '<td>'.$value_gtv['value'].'</td>';

                                         }
                                                               
                                        echo '</tr>';

                                    }

                                    ?>
                                                            
                                 
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


<div class="col-md-3 mb-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hasil Analisa</h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php 


$getanalisa_pencapaian_mr = $connect->prepare("SELECT mr_analisa FROM p_analisa where jenis='purchase'");
$getanalisa_pencapaian_mr->execute();
$getanalisa_mr = $getanalisa_pencapaian_mr->fetch();
echo $getanalisa_mr['mr_analisa'] ?></h6>
            <p class="card-text"></p>
            <button class="btn btn-success btn-sm" role="button" onclick="myeditanalisamr()">edit</button>
  <br/>
             <div id="myDIVeditanalisamr">
<form role="form" method="POST" action="">
<br/>
    <div class="form-group">
       
        <input type="text" value="<?php echo $getanalisa_mr['mr_analisa'] ?>" name="mr_analisa" id="mr_analisa" class="form-control"/>
    </div>
   
    <div class="margiv-top-10">
        <input type="submit" name="ubah_mr" class="btn btn-primary btn-sm" value="Update" >
        
    </div>
</form>
                </div>
        </div>
    </div>
</div>  

<?php
if(isset($_POST['ubah_mr'])) {

    $mr_analisa = $_POST['mr_analisa'];
   
    $sql = "UPDATE p_analisa SET mr_analisa='$mr_analisa' WHERE jenis='purchase'";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(":mr_analisa", $m_ranalisa, PDO::PARAM_STR);
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}
?>

<script>

function myeditanalisamr() {
  var x = document.getElementById("myDIVeditanalisamr");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function mymerchantotlet() {
  var x = document.getElementById("myDIVmerchantotlet");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIVcarimerchantotlet");
 
    x.style.display = "none";

  var x = document.getElementById("myDIVcarimerchantyaotlet");
   x.style.display = "none";
}

function mycarimerchantotlet() {
  var x = document.getElementById("myDIVcarimerchantotlet");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVmerchantotlet");
 
    x.style.display = "none";

    var x = document.getElementById("myDIVcarimerchantyaotlet");
   x.style.display = "none";
}


function mycarimerchantnyaotlet() {
  var x = document.getElementById("myDIVcarimerchantyaotlet");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x = document.getElementById("myDIVmerchantotlet");
 
    x.style.display = "none";

    var x = document.getElementById("myDIVcarimerchantotlet");
 
    x.style.display = "none";
}




     Highcharts.chart('merchant-outlet', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Outlet'
    },
   
    xAxis: {
        categories: [<?php 

                foreach ($getkategori_outlet as $kategori_outlet) {
                    echo "'".$kategori_outlet['date'] ."'". ",";
                }
                  
                ?>]
    },


    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
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




         series: [{


                    name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet1; } else { echo "Indomart"; } ?>',
                    color : '#990000',
                    data: [<?php 

                            foreach ($getmerchant_outlet_indomaret  as $outlet_indomaret) {
                                echo $outlet_indomaret['value'] . ",";
                            }
                              
                            ?>]
                }, {
                    name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){  echo $otlet2; } else { echo "Alfamart";  } ?>',
                    color : '#003399',
                    data: [<?php 

                            foreach ($getmerchant_outlet_alfamart  as $outlet_alfamart) {
                                echo $outlet_alfamart['value'] . ",";
                            }
                              
                            ?>]
                }]
    
});



    Highcharts.chart('merchant-user', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'User'
    },
   
    xAxis: {
        categories: [<?php 

                foreach ($getkategori_user as $kategori_user) {
                    echo "'".$kategori_user['date'] ."'". ",";
                }
                  
                ?>]
    },


    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
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

    series: [{
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet1; } else { echo "Indomart"; } ?>',
        color : '#990000',
        data: [<?php 

                foreach ($getmerchant_user_indomaret  as $user_indomaret) {
                    echo $user_indomaret['value'] . ",";
                }
                  
                ?>]
    }, {
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet2; } else { echo "Alfamart"; } ?>',
        color : '#003399',
        data: [<?php 

                foreach ($getmerchant_user_alfamart  as $user_alfamart) {
                    echo $user_alfamart['value'] . ",";
                }
                  
                ?>]
    }]
});





Highcharts.chart('merchant-trx', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'TRX'
    },
   
    xAxis: {
        categories: [<?php 

                foreach ($getkategori_trx as $kategori_trx) {
                    echo "'".$kategori_trx['date'] ."'". ",";
                }
                  
                ?>]
    },


    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
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

    series: [{
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet1; } else { echo "Indomart"; } ?>',
        color : '#990000',
        data: [<?php 

                foreach ($getmerchant_trx_indomaret  as $trx_indomaret) {
                    echo $trx_indomaret['value'] . ",";
                }
                  
                ?>]
    }, {
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet2; } else { echo "Alfamart"; } ?>',
        color : '#003399',
        data: [<?php 

                foreach ($getmerchant_trx_alfamart  as $trx_alfamart) {
                    echo $trx_alfamart['value'] . ",";
                }
                  
                ?>]
    }]
});


Highcharts.chart('merchant-gtv', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'GTV'
    },
   
    xAxis: {
        categories: [<?php 

                foreach ($getkategori_gtv as $kategori_gtv) {
                    echo "'".$kategori_gtv['date'] ."'". ",";
                }
                  
                ?>]
    },


    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
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

    series: [{
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet1; } else { echo "Indomart"; } ?>',
        color : '#990000',
        data: [<?php 

                foreach ($getmerchant_gtv_indomaret  as $gtv_indomaret) {
                    echo $gtv_indomaret['value'] . ",";
                }
                  
                ?>]
    }, {
        name: '<?php if(isset($_GET['otletnm1']) &&  isset($_GET['otletnm2'])){ echo $otlet2; } else { echo "Alfamart"; } ?>',
        color : '#003399',
        data: [<?php 

                foreach ($getmerchant_gtv_alfamart  as $gtv_alfamart) {
                    echo $gtv_alfamart['value'] . ",";
                }
                  
                ?>]
    }]
});

</script>
