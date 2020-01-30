<?php

    header('Content-type: application/json');
    require('../connection/db.php');
    if(isset($_POST['date'])){

        $date = $_POST['date'];
        $getMonthArr = explode('-',$date);
        $getMonth = $getMonthArr[1];

        $queryGetTarget = $connect->query("SELECT * FROM m_target WHERE month='" . $getMonth . "'");
        $queryGetTarget->execute();
        $target = $queryGetTarget->fetchAll(PDO::FETCH_ASSOC);
        // $target =  json_encode($target);
        $queryGetEsti = $connect->query("SELECT * FROM m_estimasi WHERE month='" .$getMonth . "'");
        $queryGetEsti->execute();
        $esti = $queryGetEsti->fetchAll(PDO::FETCH_ASSOC);

        $getDaily = $connect->query("SELECT * FROM mtd WHERE date='" . $date . "'");
        $getDaily->execute();
        $daily = $getDaily->fetchAll(PDO::FETCH_ASSOC);

        $dataDaily = [
            "target" => $target,
            "estimasi" => $esti,
            "daily" => $daily,
        ];
        
        echo json_encode($dataDaily);

        
    }
?>