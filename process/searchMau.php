<?php

    header('Content-type: application/json');
    require('../connection/db.php');
    if(isset($_POST['month'])){

        $m = $_POST['month'];
        $queryMonth = $connect->query("SELECT month FROM m_mau_month WHERE month='$m'");
        $queryMonth->execute();
        $month = $queryMonth->fetchAll(PDO::FETCH_ASSOC);

        $queryMau1 = $connect->query("SELECT mau1 FROM m_mau_month WHERE month = '".$m."'");
        $queryMau1->execute();
        $mau1 = $queryMau1->fetchAll(PDO::FETCH_ASSOC);

        $queryMau2 = $connect->query("SELECT mau2 FROM m_mau_month WHERE month = '" . $m . "'");
        $queryMau2->execute();
        $mau2 = $queryMau2->fetchAll(PDO::FETCH_ASSOC);

        $queryMau3 = $connect->query("SELECT mau3 FROM m_mau_month WHERE month = '" . $m . "'");
        $queryMau3->execute();
        $mau3 = $queryMau3->fetchAll(PDO::FETCH_ASSOC);
        
        $queryRetention = $connect->query("SELECT retention FROM m_mau_month WHERE month = '" . $m . "'");
        $queryRetention->execute();
        $retention = $queryRetention->fetchAll(PDO::FETCH_ASSOC);

        $dataMAU = [
            "month" => $month,
            "mau1" => $mau1,
            "mau2" => $mau2,
            "mau3" => $mau3,
            "retention" => $retention
        ];
        $dataMAU = json_encode($dataMAU);

        echo $dataMAU;   
    }
